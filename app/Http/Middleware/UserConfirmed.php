<?php 

namespace apms\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

use apms\User;

class UserConfirmed {

    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $this->auth->getUser();
        $confirmed = $user['confirmed'];

        if (isset($confirmed) && $confirmed == "0")
        {
            // If the user has not had an activation token set
            $confirmation_code = $user->confirmation_code;

            if (empty($confirmation_code))
            {
                // generate a confirmation code
                $key = \Config::get('app.key');
                
                do{
                    $confirmation_code = hash_hmac('sha256', str_random(40), $key);
                }while(User::where('confirmation_code', $confirmation_code)->exists());
                
                $user->confirmation_code = $confirmation_code;
                $user->save();
                \Mail::send('emails.activate', 
                    ['token' => $confirmation_code, 'name' => $user->name], 
                    function($message) use ($user){
                        $message->from($user->email);
                        $message->to("hpapms@gmail.com", "Admin")
                                ->subject('Account Verification');
                });
            }

            \Session::put('alertMessage', 'Your email needs confirmation from admin!');
            return redirect()->guest('auth/logout');
        }
        return $next($request);
    }
}
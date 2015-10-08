<?php

namespace apms\Http\Controllers;

use Illuminate\Http\Request;
use apms\Http\Requests;
use apms\Http\Controllers\Controller;

use apms\Code;
use Input;

class LinkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('confirm');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('send-link.index');
        $this->middleware('confirm');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email = Input::get('email');

        $rules = array('code' => 'unique:codes, code');
        
        do
        {
           $code = $this->generateCode();
        }while(Code::where('code', '=', $code)->exists());

        $newCode = Code::create([
            'code' => $code,
            'email_add' => $email
        ]);
        
        \Mail::send('send-link.contact',
            array(
                'email' => $email,
                'code' => $code
            ), function($message)
            {
                $message->from('hpapms@gmail.com');
                $message->to(Input::get('email'), "Admin")
                    ->subject('You are referenced');
            }
        );

        return \Redirect::route('links.index')
            ->with('message', "You've successfully invited an applicant!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function generateCode() 
    {
        //variable that holds the base alphanumeric characters
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);

        $length = mt_rand(8, 12);

        $code = '';

        for ($i = 0; $i < $length; $i++) {
            $code .= $characters[rand(0, $charactersLength - 1)];
        }

        return $code;
    }
}

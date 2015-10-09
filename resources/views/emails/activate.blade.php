<h2>Please verify a user</h2>


<p>Hello Admin,</p>

<div>
    A user named {{ $name }} registered in APMS. If you recognize this user, 
    please click the link below to authorize the account. Otherwise, ignore
    this email.
    <br/>
    {{ URL::to('register/verify/' . $token) }}
</div>
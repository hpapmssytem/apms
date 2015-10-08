<h2>Please verify a user</h2>

<div>
    A user named {{ $name }} registered in APMS. Please click
    {{ URL::to('register/verify/' . $token) }} to
    verify user.<br/>

</div>
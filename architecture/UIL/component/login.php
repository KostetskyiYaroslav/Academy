<?php
if(!isset($_COOKIE['login'])) {
    echo <<<"LOGIN"
<form class="col s12">
    <div class="input-field col s6">
        <i class="material-icons prefix">contacts</i>
        <input id="user-login" name="user-login" type="text" class="valid" placeholder="Login" />
    </div>
    <div class="input-field col s6">
        <i class="material-icons prefix">vpn_key</i>
        <input id="user-password" name="user-password" type="password" class="valid" placeholder="Password" />
    </div>
    <button type="button" class="btn waves-effect blue" onclick="authorization()">Log In
        <i class="material-icons right">send</i>
    </button>
</form>
LOGIN;
} else {
    echo <<<"AUTHO"
<div>
You have already authorized!
</div>
AUTHO;
}

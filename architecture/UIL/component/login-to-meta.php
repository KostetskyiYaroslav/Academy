<?php

echo  <<<'META'
<form class="col s12" action="https://passport.meta.ua/login/" method="post" >
    <div class="input-field col s6">
        <i class="material-icons prefix">contacts</i>
        <input type="text" name="login" id="meta-login" class="valid meta-login" placeholder="Login" />
    </div>
    <div class="input-field col s6">
        <i class="material-icons prefix">vpn_key</i>
        <input type="password" name="password" id="meta-password" class="valid meta-password" placeholder="Password" />
    </div>
    <input type="submit" class="btn waves-effect blue"/>
    <input type="button" onclick="authorizationMeta()" value="Seeeend" class="btn waves-effect blue"/>
</form>
META;


/*    echo <<<"LOGIN"
<form class="col s12" action="https://passport.meta.ua/login/" method="post" >
    <div class="input-field col s6">
        <i class="material-icons prefix">contacts</i>
        <input type="text" name="login" id="login" class="valid" placeholder="Login" />
    </div>
    <div class="input-field col s6">
        <i class="material-icons prefix">vpn_key</i>
        <input type="password" name="password" class="valid" placeholder="Password" />
    </div>
    <input type=submit name />
    <input type="submit" name="subm" class="btn waves-effect blue"/>
</form>
LOGIN;*/

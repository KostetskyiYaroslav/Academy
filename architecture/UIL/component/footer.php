<?php
$date = date("l jS \of F Y h:i:s A");
echo <<<FOO
<footer class="page-footer blue darken-3 custom-nav">
 <div class="container">
  <div class="row">
    <div class="col l6 s12">
      <h5 class="white-text"> $date </h5>
    </div>
  </div>
 </div>
 <div class="footer-copyright">
  <div class="container">
  © 2016 Copyright
  </div>
 </div>
</footer>
FOO;


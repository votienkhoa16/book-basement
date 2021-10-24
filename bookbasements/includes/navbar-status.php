<?php

if(Session::get('isLoggedIn')): ?>
<ul class="nav navbar-nav navbar-right">
  <li style="display:inline-flex"><a href="account.php"><?php echo Session::get('user_name'); ?></a><a href="#">|</a> <a href="logout.php">Logout</a></li>
</ul>
<?php else: ?>
<ul class="nav navbar-nav navbar-right">
  <li><a href="account.php">Login | Create Account</a></li>
</ul>
<?php endif ?>

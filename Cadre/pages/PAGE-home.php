<?php
// (A) ALREADY SIGNED IN
if (isset($_SESS["user"])) {
  $_CORE->redirect($_SESS["user"]["user_level"]=="A" ? "admin/" : "staff/");
}

// (B) LOGIN PAGE
$_PMETA = ["load" => [["s", HOST_ASSETS."PAGE-login.js", "defer"]]];
require PATH_PAGES . "TEMPLATE-top.php"; ?>
<div class="row justify-content-center">
<div class="col-md-10 bg-white border">
<div class="row">
  <div class="col-2" style="background:url('<?=HOST_ASSETS?>book.jpg');background-size:cover"></div>
  <form class="col-10 p-4" onsubmit="return login();">
    <img src="<?=HOST_ASSETS?>favicon.png" class="p-2 mb-3 rounded-circle" style="background:#f1f1f1">
    <h3 class="mb-3">ĐĂNG NHẬP</h3>

    <div class="input-group mb-4">
      <div class="input-group-prepend">
        <span class="input-group-text mi">Email</span>
      </div>
      <input type="email" id="login-email" class="form-control" placeholder="Email" required>
    </div>

    <div class="input-group mb-4">
      <div class="input-group-prepend">
        <span class="input-group-text mi">Mật khẩu</span>
      </div>
      <input type="password" id="login-pass" class="form-control" placeholder="Mật khẩu" required>
    </div>

    <input type="submit" class="btn btn-primary py-2 mb-4" value="Đăng nhập">
    <div>
      <a href="<?=HOST_BASE?>forgot">Quên mật khẩu</a>
    </div>
  </div>
</div>
</div>
</div>
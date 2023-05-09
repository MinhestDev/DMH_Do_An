<?php
// (A) NOT SIGNED IN
if (!isset($_SESS["user"])) { $_CORE->redirect(); }

// (B) HTML PAGE
$_PMETA = ["load" => [["s", HOST_ASSETS."PAGE-account.js"]]];
require PATH_PAGES . "TEMPLATE-top.php"; ?>
<form class="bg-white border p-4" onsubmit="return save()">
  <h3 class="mb-4">TÀI KHOẢN CỦA TÔI</h3>

  <div class="input-group mb-4">
    <div class="input-group-prepend">
      <span class="input-group-text mi">Tên đăng nhập</span>
    </div>
    <input type="text" id="user-name" class="form-control" required placeholder="Name" value=<?=$_SESS["user"]["user_name"]?>>
  </div>

  <div class="input-group mb-4">
    <div class="input-group-prepend">
      <span class="input-group-text mi">Email</span>
    </div>
    <input type="email" id="user-email" class="form-control" required placeholder="Email" value="<?=$_SESS["user"]["user_email"]?>">
  </div>

  <div class="input-group mb-4">
    <div class="input-group-prepend">
      <span class="input-group-text mi">Chức vụ</span>
    </div>
    <input type="text" class="form-control" readonly value="<?=$_SESS["user"]["user_title"]?>">
  </div>

  <div class="input-group mb-4">
    <div class="input-group-prepend">
      <span class="input-group-text mi">Mật khẩu</span>
    </div>
    <input type="password" id="user-pass" class="form-control" required placeholder="Mật khẩu">
  </div>
  <div class="input-group mb-4">
    <div class="input-group-prepend">
      <span class="input-group-text mi">Xác nhận mật khẩu</span>
    </div>
    <input type="password" id="user-cpass" class="form-control" required placeholder="Xác nhận mật khẩu">
  </div>

  <input type="submit" class="btn btn-primary" value="Lưu">
</form>
<?php require PATH_PAGES . "TEMPLATE-bottom.php";
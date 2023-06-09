<?php
// (A) GET USER
$_CORE->Settings->defineN("USR_LEVELS", true);
$edit = isset($_POST["id"]) && $_POST["id"]!="";
if ($edit) {
  $user = $_CORE->autoCall("Users", "get");
}

// (B) USER FORM ?>
<h3 class="mb-3"><?=$edit?"EDIT":"ADD"?> NGƯỜI DÙNG</h3>
<form onsubmit="return usr.save()">
  <input type="hidden" id="user_id" value="<?=isset($user)?$user["user_id"]:""?>">

  <div class="bg-white border p-4 mb-3">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text mi">Tên đăng nhập</span>
      </div>
      <input type="text" class="form-control" id="user_name" required value="<?=isset($user)?$user["user_name"]:""?>" placeholder="Name">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text mi">Email</span>
      </div>
      <input type="email" class="form-control" id="user_email" required value="<?=isset($user)?$user["user_email"]:""?>" placeholder="Email">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text mi">Chức vụ</span>
      </div>
      <input type="text" class="form-control" id="user_title" required value="<?=isset($user)?$user["user_title"]:""?>" placeholder="Title">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text mi">gpp_good</span>
      </div>
      <select class="form-select" id="user_level" required><?php
        foreach (USR_LEVELS as $l=>$ln) {
          printf("<option %svalue='%s'>%s</option>",
            $l==$user["user_level"]?"selected ":"", $l, $ln
          );
        }
      ?></select>
    </div>

    <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text mi">Mật khẩu</span>
      </div>
      <input type="password" id="user_password" class="form-control" placeholder="Password" required>
    </div>
    <div class="mt-2 text-secondary">* Ít nhất 8 ký tự chữ và số.</div>
  </div>

  <input type="button" class="col btn btn-danger" value="Back" onclick="cb.page(0)">
  <input type="submit" class="col btn btn-primary" value="Save">
</form>
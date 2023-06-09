<?php
$_PMETA = ["load" => [["s", HOST_ASSETS . "USR-leave.js", "defer"]]];
require PATH_PAGES . "TEMPLATE-top.php"; ?>
<!-- (A) HEADER -->
<h3>BẢN GHI NGHỈ CỦA TÔI</h3>
<div class="mb-3">Nhấp vào "+" để áp dụng nghỉ phép.</div>

<!-- (B) YEAR BAR -->
<form class="d-flex align-items-stretch mb-3 p-2 head" onsubmit="return leave.set()">
  <input type="number" id="leave-year" placeholder="Year" class="form-control form-control-sm" value="<?= date("Y") ?>">
  <button class="btn btn-primary mi mx-1">
    search
  </button>
  <button class="btn btn-primary mi" onclick="leave.apply()">
    add
  </button>
</form>

<!-- (C) LEAVE RECORDS -->
<div id="leave-list" class="zebra my-4"></div>
<?php require PATH_PAGES . "TEMPLATE-bottom.php"; ?>
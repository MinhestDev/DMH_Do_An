<?php
$_PMETA = ["load" => [["s", HOST_ASSETS."ADM-holiday.js", "defer"]]];
require PATH_PAGES . "TEMPLATE-top.php"; ?>
<!-- (A) HEADER -->
<h3 class="mb-3">QUẢN LÝ NGÀY NGHỈ</h3>

<!-- (B) YEAR BAR -->
<form class="d-flex align-items-stretch mb-3 p-2 head" onsubmit="return hol.set()">
  <input type="number" id="hol-year" placeholder="Năm" class="form-control form-control-sm" value="<?=date("Y")?>">
  <button class="btn btn-primary mi mx-1">
    search
  </button>
  <button class="btn btn-primary mi" onclick="hol.addEdit()">
    add
  </button>
</form>

<!-- (C) HOLIDAYS LIST -->
<div id="hol-list" class="zebra my-4"></div>
<?php require PATH_PAGES . "TEMPLATE-bottom.php"; ?>
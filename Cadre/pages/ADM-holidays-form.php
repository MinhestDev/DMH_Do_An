<?php
// (A) GET HOLIDAY
$edit = isset($_POST["id"]) && $_POST["id"]!="";
if ($edit) {
  $day = $_CORE->autoCall("Holiday", "get");
}

// (B) HOLIDAY FORM ?>
<h3 class="mb-3"><?=$edit?"EDIT":"ADD"?> NGÀY NGHỈ</h3>
<form onsubmit="return hol.save()">
  <input type="hidden" id="holiday_id" value="<?=isset($day)?$day["holiday_id"]:""?>">

  <div class="bg-white border p-4 mb-3">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text mi">Lịch trình</span>
      </div>
      <input type="text" class="form-control" id="holiday_name" required value="<?=isset($day)?$day["holiday_name"]:""?>" placeholder="Name">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text mi">Sự kiện</span>
      </div>
      <input type="date" class="form-control" id="holiday_date" required value="<?=isset($day)?$day["holiday_date"]:""?>" placeholder="Date">
    </div>

    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text mi">hourglass_bottom</span>
      </div>
      <select class="form-select" id="holiday_half">
        <option value="0">Cả ngày</option>
        <option value="1"<?=isset($day)&&$day["holiday_half"]==1?" selected":""?>>Nửa ngày</option>
      </select>
    </div>
  </div>

  <input type="button" class="col btn btn-danger" value="Back" onclick="cb.page(0)">
  <input type="submit" class="col btn btn-primary" value="Save">
</form>
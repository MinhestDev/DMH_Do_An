<?php
// (A) GET LEAVE DAYS
$_CORE->Settings->defineN(["LEAVE_DAYS", "LEAVE_STATUS", "LEAVE_TYPES"], true);
$leave = $_CORE->autoCall("Leave", "getTaken");

// (B) HTML ?>
<table class="table table-striped">
  <tr>
    <th>Giai đoạn</th>
    <td><?=$leave["leave_from"]?> đến <?=$leave["leave_to"]?> </td>
  </tr>
  <tr>
    <th>Loại</th>
    <td><?=LEAVE_TYPES[$leave["leave_type"]]?></td>
  </tr>
  <tr>
    <th>Ngày</th>
    <td><?=$leave["leave_days"]?></td>
  </tr>
  <tr>
    <th>Trạng thái</th>
    <td><?=LEAVE_STATUS[$leave["leave_status"]]?></td>
  </tr>
</table>

<ul class="list-group my-4"><?php
  for ($unix=strtotime($leave["leave_from"]); $unix<=strtotime($leave["leave_to"]); $unix+=86400) {
    $day = date("Y-m-d", $unix);
    printf("<li class='list-group-item'>%s (%s)</li>",
      $day, !isset($leave["days"][$day]) ? "NA" : LEAVE_DAYS[$leave["days"][$day]]
    );
  }
?></ul>
<button class="btn btn-danger" onclick="cb.page(0)">
  Trở lại
</button>
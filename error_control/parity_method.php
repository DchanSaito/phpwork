<?php
function parity_method($datas) {
  foreach($datas as &$data) {
    $data = odd_prity($data);
  }
  return $datas;
}

function odd_prity($binaly) {
  $cnt = 0;
  for($i = 0; $i < strlen($binaly); $i++) {
    if($binaly[$i] === "1") {
      $cnt++;
    }
  }
  if($cnt % 2 == 0) {
    return $binaly."1";
  } else {
    return $binaly."0";
  }
}

$test_data = ["01010", "01110", "11100"];
foreach(parity_method($test_data) as $res) {
  echo $res."\n";
}


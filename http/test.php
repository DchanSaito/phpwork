<?php
$word = $_POST['word'];
$number = $_POST['number'];
$chunks = ceil(mb_strlen($word) / $number);

echo "'$word'を $number 文字ずつに分解した結果は次のようになります<br>\n";

for ($i=0; $i < $chunks; $i++) {
  $chunk = mb_substr($word, $i * $number, $number);
  printf("%d: %s<br>\n", $i + 1, $chunk);
}

<?php
// ファイルから文字データを読み込み
function filereader($filename) {
  $file = file_get_contents('./'.$filename, true);
  return $file;
}

// 省略語か確認する関数
function is_abbreviation($word) {
  $abbreviationList['mr'] = true;
  $abbreviationList['mrs'] = true;
  $abbreviationList['u.s'] = true;
  $abbreviationList['p.m'] = true;
  $abbreviationList['a.m'] = true;
  return isset($abbreviationList[$word]);
}

// 半角スペース区切りで単語抽出
function explode_text($datas) {
  $words = explode(" ", $datas);
  foreach($words as $index => &$word) {
    // クリーニング
    $word = preg_replace('/[(),]/', '', $word);
    $word = preg_replace('/\.$/', '', $word);
    // 正規化
    $word = strtolower($word);
    // 省略語復元
    if(is_abbreviation($word)) {
      $word = $word.'.';
    }
    echo '('.($index+1).'番目) '.$word."\n";
  }
  return $words;
}

$datas = filereader('text_en.dat');
$words = explode_text($datas);

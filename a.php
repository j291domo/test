#!/usr/bin/php
<?php 
  foreach(file('/usr/share/dict/words') as $line){
    // strpos() 関数を使って、文字列 "xy" が含まれる単語を echo "$line"; で表示しなさい。
    if( strpos($line, "xy") !== false){//$lineにxyが含まれているか確認してtrueとなった場合に条件成立
      echo "$line";//$lineを出力
    }   
  } 
?>
<?php 
class Person{
  static function name($firstName)
  {
    return $firstName;
  } 
}
// 動的に呼び出したいときはforward_static_call_arrayが便利
echo forward_static_call_array(['Person', 'name'], ['yamada']);

error_log("エラーメッセージaaa", 3, "/home/homepage/log/error.log");

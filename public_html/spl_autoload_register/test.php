<?php

class ClassLoader
{
    // 救済メソッド実行時、クラス探索の対象となるディレクトリを格納する変数
    public $dirs;
		
    // 救済メソッド実行時、クラス探索の対象となるディレクトリを保存する関数
    public function registerDir($dir)
    {
			$this->dirs[] = $dir;
    }

    // spl_autoload_register実行
    public function register()
    {
    	// 未定義のクラスをcallした際、loadClassメソッドを実行する。
			spl_autoload_register(array($this, 'loadClass'));
    }

    // 救済メソッド。引数には、callしようとしたクラス名が渡ってくる。
    public function loadClass($class)
    {
			// 登録済みの探索ディレクトリに、newしようとしたクラスファイルが存在しているか確認
			foreach($this->dirs as $dir){
				$file = $dir. '/' . $class . '.php';
				// 存在していればrequire。エラーにならない。
				if(is_readable($file)){
					require $file;
					return;
				}
			}
    }
}

$loader = new ClassLoader();

// dir1とdir2をクラス探索対象のディレクトリに登録
$loader->registerDir(dirname(__FILE__).'/dir1');
$loader->registerDir(dirname(__FILE__).'/dir2');

echo "<pre>";
var_dump($loader->dirs);
echo "</pre>";

// spl_autoload_register実行
$loader->register();

// requireしていないクラスをnewする。newに成功する。
$Class1 = new Class1();
$Class1->test1();
$Class2 = new Class2();
$Class2->test2();

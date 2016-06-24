<?php 
// ??????????
interface flyer {
	public function fly($oil , $height);
}
interface runer {
	public function run($cicle , $dir);
}
interface water {
	public function swim($dir);
}

class Super implements flyer , runer , water {
	public function fly($oil , $height) {
		echo 'I am flying';
	}
	public function run($cicle , $dir) {
		echo 'I am flying';
	}
	public function swim($dir) {
		echo 'I am flying';
	}
}
$s = new Super();
$s->fly(100 , 900);
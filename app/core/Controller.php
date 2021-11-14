<?php 
class Controller{
	public function view($view, $data = []){
		// tak perlu instasiasi karena hanya menampilkan html
		require_once '../app/views/' . $view . '.php';
	}

	public function model($model){
		require_once '../app/models/' . $model . '.php';

		// instasiasi karena ada kelas
		return new $model; 
	}
}
?>
<?php


class About extends Controller{

	public function index($nama='andris sahata',$pekerjaan='dosen',$umur=28)
	{
		$data['nama']=$nama;
		$data['pekerjaan']=$pekerjaan;
		$data['umur']=$umur;
		$this->view('templates/header');
		$this->view('about/index', $data);
		$this->view('templates/header');
	}

	public function page()
	{
		$this->view('templates/header');
		$this->view('about/page');
		$this->view('templates/header');
	}
}
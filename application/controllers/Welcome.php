<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function contactos()
	{
        $this->load->view('header');
		$this->load->view('contactos');
		$this->load->view('footer');

	}

	public function eventos()
	{
        $this->load->view('header');
		$this->load->view('eventos');
		$this->load->view('footer');

	}

	public function nosotros()
	{
        $this->load->view('header');
		$this->load->view('nosotros');
		$this->load->view('footer');

	}

	public function noticia()
	{
        $this->load->view('header');
		$this->load->view('noticia');
		$this->load->view('footer');

	}

	public function servi()
	{
        $this->load->view('header');
		$this->load->view('servi');
		$this->load->view('footer');

	}

	public function trans()
	{
        $this->load->view('header');
		$this->load->view('trans');
		$this->load->view('footer');

	}

	public function areas()
	{
        $this->load->view('header');
		$this->load->view('areas');
		$this->load->view('footer');

	}

}

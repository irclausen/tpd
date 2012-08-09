<?php

include 'ChromePhp.php';

class Pages extends CI_Controller {
	public function view($page = 'home')
	{
		ChromePhp::log(file_exists('application/views/pages/'.$page.'.php'));
		if (!file_exists('application/views/pages/'.$page.'.php'))
		{
			show_404();
		}

		$data['title'] = ucfirst($page); //Capitalize the first letter of the filename

		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);

	}
}
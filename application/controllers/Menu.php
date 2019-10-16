<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function index()
	{
		$query = $this->menu_model->read_menu(); // read_personal คือ function  personal_model คือ class
		// print_r($query);

		$value = array(
			'menu' => $query
		); //ตั้งตัวแปร array ขึ้นมา
		$this->load->view('menu_list',$value); //การเรียกดู personal_list and ข้อมูลนี้ไปด้วยกัน
		
	}

	public function insert_menu()
	{
		$input = $this->input->post();
		// print_r($input);
		$this->menu_model->insert_menu($input); //ส่งไปที่ personal_model
		redirect('Menu');
	}
}

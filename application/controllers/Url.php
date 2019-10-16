<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Url extends CI_Controller {
	public function form_menu_insert()
	{
		$query = $this->menu_model->read_category(); // เรียก function read จากนั้น return ไปที่ qurry
		// print_r($query ); //แสดงข้อมูลหน้าวิว
		$value = array( // ตั้งตัวแปรขึ้นมาใหม่ใน array ชื่อ class เอา query มาแทนค่า
			'category' => $query
		); //ตั้งตัวแปร array ขึ้นมา
		$this->load->view('menu_insert',$value); //การเรียกดู personal_insert and ข้อมูลนี้ไปด้วยกัน
	}
}

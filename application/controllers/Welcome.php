<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('overview_model');

		$datacurrentr1_1 = $this->overview_model->ambildata1r1_currently();
		$datacurrentr1_2 = $this->overview_model->ambildata2r1_currently();
		$datacurrentr1_3 = $this->overview_model->ambildata3r1_currently();
		$datacurrentr1_4 = $this->overview_model->ambildata4r1_currently();
		$datacurrentr1_5 = $this->overview_model->ambildata5r1_currently();
		$datacurrentr1_6 = $this->overview_model->ambildata6r1_currently();

		$cr1 = 0;
		$pw1 = 0;
		foreach ($datacurrentr1_1 as $data1){
			$cr1 += $data1->current;
			$pw1 += $data1->power;
		}
		foreach ($datacurrentr1_2 as $data2){
			$cr1 += $data2->current;
			$pw1 += $data2->power;
		}
		foreach ($datacurrentr1_3 as $data3){
			$cr1 += $data3->current;
			$pw1 += $data3->power;
		}
		foreach ($datacurrentr1_4 as $data4){
			$cr1 += $data4->current;
			$pw1 += $data4->power;
		}
		foreach ($datacurrentr1_5 as $data5){
			$cr1 += $data5->current;
			$pw1 += $data5->power;
		}
		foreach ($datacurrentr1_6 as $data6){
			$cr1 += $data6->current;
			$pw1 += $data6->power;
		}	

		$data['current1']=$cr1;
		$data['power1']=$pw1;

		$datacurrentr2_1 = $this->overview_model->ambildata1r2_currently();
		$datacurrentr2_2 = $this->overview_model->ambildata2r2_currently();
		$datacurrentr2_3 = $this->overview_model->ambildata3r2_currently();
		$datacurrentr2_4 = $this->overview_model->ambildata4r2_currently();
		$datacurrentr2_5 = $this->overview_model->ambildata5r2_currently();
		$datacurrentr2_6 = $this->overview_model->ambildata6r2_currently();

		$cr2 = 0;
		$pw2 = 0;
		foreach ($datacurrentr2_1 as $data1){
			$cr2 += $data1->current;
			$pw2 += $data1->power;
		}
		foreach ($datacurrentr2_2 as $data2){
			$cr2 += $data2->current;
			$pw2 += $data2->power;
		}
		foreach ($datacurrentr2_3 as $data3){
			$cr2 += $data3->current;
			$pw2 += $data3->power;
		}
		foreach ($datacurrentr2_4 as $data4){
			$cr2 += $data4->current;
			$pw2 += $data4->power;
		}
		foreach ($datacurrentr2_5 as $data5){
			$cr2 += $data5->current;
			$pw2 += $data5->power;
		}
		foreach ($datacurrentr2_6 as $data6){
			$cr2 += $data6->current;
			$pw2 += $data6->power;
		}	

		$data['current2']=$cr2;
		$data['power2']=$pw2;

		$datacurrentr3_1 = $this->overview_model->ambildata1r3_currently();
		$datacurrentr3_2 = $this->overview_model->ambildata2r3_currently();
		$datacurrentr3_3 = $this->overview_model->ambildata3r3_currently();
		$datacurrentr3_4 = $this->overview_model->ambildata4r3_currently();
		$datacurrentr3_5 = $this->overview_model->ambildata5r3_currently();
		$datacurrentr3_6 = $this->overview_model->ambildata6r3_currently();

		$cr3 = 0;
		$pw3 = 0;
		foreach ($datacurrentr3_1 as $data1){
			$cr3 += $data1->current;
			$pw3 += $data1->power;
		}
		foreach ($datacurrentr3_2 as $data2){
			$cr3 += $data2->current;
			$pw3 += $data2->power;
		}
		foreach ($datacurrentr3_3 as $data3){
			$cr3 += $data3->current;
			$pw3 += $data3->power;
		}
		foreach ($datacurrentr3_4 as $data4){
			$cr3 += $data4->current;
			$pw3 += $data4->power;
		}
		foreach ($datacurrentr3_5 as $data5){
			$cr3 += $data5->current;
			$pw3 += $data5->power;
		}
		foreach ($datacurrentr3_6 as $data6){
			$cr3 += $data6->current;
			$pw3 += $data6->power;
		}	

		$data['current3']=$cr3;
		$data['power3']=$pw3;

		$datacurrentr4_1 = $this->overview_model->ambildata1r4_currently();
		$datacurrentr4_2 = $this->overview_model->ambildata2r4_currently();
		$datacurrentr4_3 = $this->overview_model->ambildata3r4_currently();
		$datacurrentr4_4 = $this->overview_model->ambildata4r4_currently();
		$datacurrentr4_5 = $this->overview_model->ambildata5r4_currently();
		$datacurrentr4_6 = $this->overview_model->ambildata6r4_currently();

		$cr4 = 0;
		$pw4 = 0;
		foreach ($datacurrentr4_1 as $data1){
			$cr4 += $data1->current;
			$pw4 += $data1->power;
		}
		foreach ($datacurrentr4_2 as $data2){
			$cr4 += $data2->current;
			$pw4 += $data2->power;
		}
		foreach ($datacurrentr4_3 as $data3){
			$cr4 += $data3->current;
			$pw4 += $data3->power;
		}
		foreach ($datacurrentr4_4 as $data4){
			$cr4 += $data4->current;
			$pw4 += $data4->power;
		}
		foreach ($datacurrentr4_5 as $data5){
			$cr4 += $data5->current;
			$pw4 += $data5->power;
		}
		foreach ($datacurrentr4_6 as $data6){
			$cr4 += $data6->current;
			$pw4 += $data6->power;
		}								


		$data['current4']=$cr4;
		$data['power4']=$pw4;

		$currentlyh1 = $this->overview_model->view_currently();

		$crh1 = 0;
		foreach ($currentlyh1 as $data1){
			$crh1 += $data1->power;
		}

		$data['powerh'] = $crh1;

		$dailyh1 = $this->overview_model->view_daily();

		$crd1 = 0;
		foreach ($dailyh1 as $data1){
			$crd1 += $data1->power;
		}

		$data['powerd'] = $crd1;

		$sumdailyh1 = $this->overview_model->jumlah_powerdall();

		$crs1 = 0;
		foreach ($sumdailyh1 as $data1){
			$crs1 += $data1->powerm;
		}

		$data['powers'] = $crs1;

		$monthlyh1 = $this->overview_model->view_monthly();

		$crm1 = 0;
		foreach ($monthlyh1 as $data1){
			$crm1 += $data1->power;
		}

		$data['powerm'] = $crm1;

		$data['charth'] = $this->overview_model->view_allcurrently();
		$data['chartd'] = $this->overview_model->view_alldaily();
		$data['chartm'] = $this->overview_model->view_allmonthly();

		$this->load->view('welcome_message', $data);
	}
}

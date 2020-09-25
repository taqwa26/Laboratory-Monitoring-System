<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		$this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
		
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

        $this->load->view("admin/overview", $data);
	}

	public function error(){
		$this->load->view("admin/develop");
	}

// Fungsi untuk mendapatkan kwh jam setiap room dan membersihkan datatabel setiap sensor !!! PENTING !!!
	public function jumlahperjam(){
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('overview_model');
		if (isset($_GET['data'])) {
			// $clock = $this->input->get('data');
			$clock = date('H');
			$day = date('d');

			$currentlyh1 = $this->overview_model->ambil_currently1();
			$currentlyh2 = $this->overview_model->ambil_currently2();
			$currentlyh3 = $this->overview_model->ambil_currently3();
			$currentlyh4 = $this->overview_model->ambil_currently4();
	
			$crh1 = 0;
			foreach ($currentlyh1 as $data1){
				$crh1 += $data1->power;
			}
			foreach ($currentlyh2 as $data2){
				$crh1 += $data2->power;
			}
			foreach ($currentlyh3 as $data3){
				$crh1 += $data3->power;
			}
			foreach ($currentlyh4 as $data4){
				$crh1 += $data4->power;
			}

			$insert = array('power' => $crh1, 'time' => time(), 't' => $clock, 'd' => $day);
			if ($this->overview_model->power_s1h($insert)){
				$this->overview_model->delete_sensor($clock);
				echo "BERHASIL";
			}else{
				echo "ERROR";
			}

		}else{
			echo "Variabel data tidak terdefinisi";
		}
	}

// Fungsi untuk mendapatkan kwh perhari setiap room dan membersihkan datatabel power/jam !!! PENTING !!!
	public function jumlahperhari(){
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('overview_model');
		if (isset($_GET['data'])) {
			// $day = $this->input->get('data');
			$day = date("d");
			$month = date("m");
			 
			$dailyh1 = $this->overview_model->ambil_daily1();
			$dailyh2 = $this->overview_model->ambil_daily2();
			$dailyh3 = $this->overview_model->ambil_daily3();
			$dailyh4 = $this->overview_model->ambil_daily4();
	
			$crd1 = 0;
			foreach ($dailyh1 as $data1){
				$crd1 += $data1->power;
			}
			foreach ($dailyh2 as $data2){
				$crd1 += $data2->power;
			}
			foreach ($dailyh3 as $data3){
				$crd1 += $data3->power;
			}
			foreach ($dailyh4 as $data4){
				$crd1 += $data4->power;
			}

			$insert = array('power' => $crd1, 'time' => time(), 'd' => $day, 'm' => $month);
			if ($this->overview_model->power_s1d($insert)){
				$daya = date('d',strtotime("-1 days"));
				$this->overview_model->delete_jh($daya);
				echo "BERHASIL";
			}else{
				echo "ERROR";
			}

		}else{
			echo "Variabel data tidak terdefinisi";
		}
	}

// Fungsi untuk mendapatkan kwh perbulan setiap room dan membersihkan datatabel power/day !!! PENTING !!!
	public function jumlahperbulan(){
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('overview_model');
		if (isset($_GET['data'])) {
			// $month = $this->input->get('data');
			$month = date("m");
			$year = date("Y");
			 
			$monthlyh1 = $this->overview_model->ambil_monthly1();
			$monthlyh2 = $this->overview_model->ambil_monthly2();
			$monthlyh3 = $this->overview_model->ambil_monthly3();
			$monthlyh4 = $this->overview_model->ambil_monthly4();
	
			$crm1 = 0;
			foreach ($monthlyh1 as $data1){
				$crm1 += $data1->power;
			}
			foreach ($monthlyh2 as $data2){
				$crm1 += $data2->power;
			}
			foreach ($monthlyh3 as $data3){
				$crm1 += $data3->power;
			}
			foreach ($monthlyh4 as $data4){
				$crm1 += $data4->power;
			}

			$insert = array('power' => $crm1, 'time' => time(), 'm' => $month, 'y' => $year);
			if ($this->overview_model->power_s1m($insert)){
				$montha = date('m',strtotime("-1 month"));
				$this->overview_model->delete_jd($montha);
				echo "BERHASIL";
			}else{
				echo "ERROR";
			}

		}else{
			echo "Variabel data tidak terdefinisi";
		}
	}

// Fungsi untuk hapus semua data pada semua datatable
	public function reset(){
		$query = "TRUNCATE TABLE sensor_1r1";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_2r1";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_3r1";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_4r1";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_5r1";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_6r1";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_1r2";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_2r2";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_3r2";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_4r2";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_5r2";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_6r2";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_1r3";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_2r3";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_3r3";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_4r3";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_5r3";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_6r3";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_1r4";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_2r4";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_3r4";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_4r4";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_5r4";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_5r4";
		$this->db->query($query);
		$query = "TRUNCATE TABLE sensor_6r4";
		$this->db->query($query);
		$query = "TRUNCATE TABLE power_s1d";
		$this->db->query($query);
		$query = "TRUNCATE TABLE power_s1h";
		$this->db->query($query);
		$query = "TRUNCATE TABLE power_s1m";
		$this->db->query($query);
		$query = "TRUNCATE TABLE power_s2d";
		$this->db->query($query);
		$query = "TRUNCATE TABLE power_s2h";
		$this->db->query($query);
		$query = "TRUNCATE TABLE power_s2m";
		$this->db->query($query);
		$query = "TRUNCATE TABLE power_s3d";
		$this->db->query($query);
		$query = "TRUNCATE TABLE power_s3h";
		$this->db->query($query);
		$query = "TRUNCATE TABLE power_s3m";
		$this->db->query($query);
		$query = "TRUNCATE TABLE power_allh";
		$this->db->query($query);
		$query = "TRUNCATE TABLE power_alld";
		$this->db->query($query);
		$query = "TRUNCATE TABLE power_allm";
		$this->db->query($query);
		redirect(site_url('admin'));
	}

	// Fungsi chart dan datatabel setiap sensor
	public function sensor_1r1(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_1r1();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_2r1(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_2r1();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_3r1(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_3r1();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_4r1(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_4r1();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_5r1(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_5r1();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_6r1(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_6r1();
        $this->load->view("admin/sensor", $data);
	}

	public function sensor_1r2(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_1r2();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_2r2(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_2r2();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_3r2(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_3r2();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_4r2(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_4r2();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_5r2(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_5r2();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_6r2(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_6r2();
        $this->load->view("admin/sensor", $data);
	}

	public function sensor_1r3(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_1r3();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_2r3(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_2r3();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_3r3(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_3r3();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_4r3(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_4r3();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_5r3(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_5r3();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_6r3(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_6r3();
        $this->load->view("admin/sensor", $data);
	}

	public function sensor_1r4(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_1r4();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_2r4(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_2r4();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_3r4(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_3r4();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_4r4(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_4r4();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_5r4(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_5r4();
        $this->load->view("admin/sensor", $data);
	}
	public function sensor_6r4(){
		$this->load->model('overview_model');
		$data['chart'] = $this->overview_model->getsensor_6r4();
        $this->load->view("admin/sensor", $data);
	}
// end Fungsi chart dan datatable setiap sensor

// Fungsi get status dari database untuk wemos (menyalakan dan memtikan relay) !!! PENTING !!!
	public function status_1r1(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_1r1();
		foreach ($data as $status){
			echo $status->sensor_1r1;
		}	
	}
	public function status_2r1(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_2r1();
		foreach ($data as $status){
			echo $status->sensor_2r1;
		}	
	}
	public function status_3r1(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_3r1();
		foreach ($data as $status){
			echo $status->sensor_3r1;
		}	
	}
	public function status_4r1(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_4r1();
		foreach ($data as $status){
			echo $status->sensor_4r1;
		}	
	}
	public function status_5r1(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_5r1();
		foreach ($data as $status){
			echo $status->sensor_5r1;
		}	
	}
	public function status_6r1(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_6r1();
		foreach ($data as $status){
			echo $status->sensor_6r1;
		}	
	}

	public function status_1r2(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_1r2();
		foreach ($data as $status){
			echo $status->sensor_1r2;
		}	
	}
	public function status_2r2(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_2r2();
		foreach ($data as $status){
			echo $status->sensor_2r2;
		}	
	}
	public function status_3r2(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_3r2();
		foreach ($data as $status){
			echo $status->sensor_3r2;
		}	
	}
	public function status_4r2(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_4r2();
		foreach ($data as $status){
			echo $status->sensor_4r2;
		}	
	}
	public function status_5r2(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_5r2();
		foreach ($data as $status){
			echo $status->sensor_5r2;
		}	
	}
	public function status_6r2(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_6r2();
		foreach ($data as $status){
			echo $status->sensor_6r2;
		}	
	}

	public function status_1r3(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_1r3();
		foreach ($data as $status){
			echo $status->sensor_1r3;
		}	
	}
	public function status_2r3(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_2r3();
		foreach ($data as $status){
			echo $status->sensor_2r3;
		}	
	}
	public function status_3r3(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_3r3();
		foreach ($data as $status){
			echo $status->sensor_3r3;
		}	
	}
	public function status_4r3(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_4r3();
		foreach ($data as $status){
			echo $status->sensor_4r3;
		}	
	}
	public function status_5r3(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_5r3();
		foreach ($data as $status){
			echo $status->sensor_5r3;
		}	
	}
	public function status_6r3(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_6r3();
		foreach ($data as $status){
			echo $status->sensor_6r3;
		}	
	}

	public function status_1r4(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_1r4();
		foreach ($data as $status){
			echo $status->sensor_1r4;
		}	
	}
	public function status_2r4(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_2r4();
		foreach ($data as $status){
			echo $status->sensor_2r4;
		}	
	}
	public function status_3r4(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_3r4();
		foreach ($data as $status){
			echo $status->sensor_3r4;
		}	
	}
	public function status_4r4(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_4r4();
		foreach ($data as $status){
			echo $status->sensor_4r4;
		}	
	}
	public function status_5r4(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_5r4();
		foreach ($data as $status){
			echo $status->sensor_5r4;
		}	
	}
	public function status_6r4(){
		$this->load->model('overview_model');
		$data = $this->overview_model->getstatus_6r4();
		foreach ($data as $status){
			echo $status->sensor_6r4;
		}	
	}
// end Fungsi get status dari database untuk wemos (menyalakan dan memtikan relay)
}
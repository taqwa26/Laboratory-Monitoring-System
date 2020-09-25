<?php

class Room2 extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		$this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
		
		$this->load->model('monlab2_model');

		$data['sensor1'] = $this->monlab2_model->ambildata1r1_currently();//sensor1
		$data['sensor2'] = $this->monlab2_model->ambildata2r1_currently();//sensor2
		$data['sensor3'] = $this->monlab2_model->ambildata3r1_currently();//sensor3
		$data['sensor4'] = $this->monlab2_model->ambildata4r1_currently();//sensor4
		$data['sensor5'] = $this->monlab2_model->ambildata5r1_currently();//sensor5
		$data['sensor6'] = $this->monlab2_model->ambildata6r1_currently();//senosr6
		
		$currentlyh = $this->monlab2_model->ambil_powerh();//jumlah perjam
		$crh = 0;
		foreach ($currentlyh as $data1){
			$crh += $data1->power;
		}
		$data['powerc0'] = $crh;

		$dailyh = $this->monlab2_model->ambil_powerd();//jumlah perhari
		$crd = 0;
		foreach ($dailyh as $data1){
			$crd += $data1->power;
		}
		$data['powerc1'] = $crd;
		
		$data['powerc2'] = $this->monlab2_model->ambil_powerhall();//chart

		$sumdailyh = $this->monlab2_model->jumlah_powerdall();//jumlah perhari dari bln lalu
		$crs = 0;
		foreach ($sumdailyh as $data1){
			$crs += $data1->powerm;
		}
		$data['powerc3'] = $crs;

		$monthlyh = $this->monlab2_model->ambil_powerm();//jumlah perbulan
		$crm = 0;
		foreach ($monthlyh as $data1){
			$crm += $data1->power;
		}
		$data['powerc4'] = $crm;

		$data['powerc5'] = $this->monlab2_model->ambil_powerdall();//chart

		$data['status'] = $this->monlab2_model->getstatus();
		
		$this->load->view('admin/mnc/room2', $data);
        // load view admin/overview.php
	}

	public function sensor1(){
		date_default_timezone_set("Asia/Makassar");
		$this->load->model('monlab2_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$current = $this->input->get('data');
			$voltage = 220;
			$power = $current*$voltage;
			//echo $panjang;

			$datasensor = array('current' => $current, 'voltage' => $voltage, 'power' => $power, 't' => date("H"), 'time' => time());

			if($this->monlab2_model->save1r1($datasensor)){
				echo "BERHASIL";
			}else{
				echo "ERROR";
			}
		}else{
			echo "Variabel data tidak terdefinisi";
		}
	}

	public function sensor2(){
		date_default_timezone_set("Asia/Makassar");
		$this->load->model('monlab2_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$current = $this->input->get('data');
			$voltage = 220;
			$power = $current*$voltage;
			//echo $panjang;

			$datasensor = array('current' => $current, 'voltage' => $voltage, 'power' => $power, 't' => date("H"), 'time' => time());

			if($this->monlab2_model->save2r1($datasensor)){
				echo "BERHASIL";
			}else{
				echo "ERROR";
			}
		}else{
			echo "Variabel data tidak terdefinisi";
		}
	}

	public function sensor3(){
		date_default_timezone_set("Asia/Makassar");
		$this->load->model('monlab2_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$current = $this->input->get('data');
			$voltage = 220;
			$power = $current*$voltage;
			//echo $panjang;

			$datasensor = array('current' => $current, 'voltage' => $voltage, 'power' => $power, 't' => date("H"), 'time' => time());

			if($this->monlab2_model->save3r1($datasensor)){
				echo "BERHASIL";
			}else{
				echo "ERROR";
			}
		}else{
			echo "Variabel data tidak terdefinisi";
		}
	}

	public function sensor4(){
		date_default_timezone_set("Asia/Makassar");
		$this->load->model('monlab2_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$current = $this->input->get('data');
			$voltage = 220;
			$power = $current*$voltage;
			//echo $panjang;

			$datasensor = array('current' => $current, 'voltage' => $voltage, 'power' => $power, 't' => date("H"), 'time' => time());

			if($this->monlab2_model->save4r1($datasensor)){
				echo "BERHASIL";
			}else{
				echo "ERROR";
			}
		}else{
			echo "Variabel data tidak terdefinisi";
		}
	}

	public function sensor5(){
		date_default_timezone_set("Asia/Makassar");
		$this->load->model('monlab2_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$current = $this->input->get('data');
			$voltage = 220;
			$power = $current*$voltage;
			//echo $panjang;

			$datasensor = array('current' => $current, 'voltage' => $voltage, 'power' => $power, 't' => date("H"), 'time' => time());

			if($this->monlab2_model->save5r1($datasensor)){
				echo "BERHASIL";
			}else{
				echo "ERROR";
			}
		}else{
			echo "Variabel data tidak terdefinisi";
		}
	}

	public function sensor6(){
		date_default_timezone_set("Asia/Makassar");
		$this->load->model('monlab2_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$current = $this->input->get('data');
			$voltage = 220;
			$power = $current*$voltage;
			//echo $panjang;

			$datasensor = array('current' => $current, 'voltage' => $voltage, 'power' => $power, 't' => date("H"), 'time' => time());

			if($this->monlab2_model->save6r1($datasensor)){
				echo "BERHASIL";
			}else{
				echo "ERROR";
			}
		}else{
			echo "Variabel data tidak terdefinisi";
		}
	}

	public function jumlahperjam(){
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('monlab2_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$clock = date('H');
			$day = date("d");

			$datapower1 = $this->monlab2_model->jumlah_ps1h($clock);
			$datapower2 = $this->monlab2_model->jumlah_ps2h($clock);
			$datapower3 = $this->monlab2_model->jumlah_ps3h($clock);
			$datapower4 = $this->monlab2_model->jumlah_ps4h($clock);
			$datapower5 = $this->monlab2_model->jumlah_ps5h($clock);
			$datapower6 = $this->monlab2_model->jumlah_ps6h($clock);

			foreach ($datapower1 as $data1){
				$lo1 = $data1->jumlah1;
				foreach ($datapower2 as $data2){
					$lo2 = $data2->jumlah2 + $lo1;
					foreach ($datapower3 as $data3){
						$lo3 = $data3->jumlah3 + $lo2;
						foreach ($datapower4 as $data4){
							$lo4 = $data4->jumlah4 + $lo3;
							foreach ($datapower5 as $data5){
								$lo5 = $data5->jumlah5 + $lo4;
								foreach ($datapower6 as $data6){
									$lo6 = $data6->jumlah6 + $lo5 + 0;
									$insert = array('power' => $lo6, 'time' => time(), 't' => $clock, 'd' => $day);
									if ($this->monlab2_model->power_s1h($insert)){
										echo "BERHASIL";
									}else{
										echo "ERROR";
									}
								}								
							}
						}
					}
				}
			}
		}else{
			echo "Variabel data tidak terdefinisi";
		}
	}

	public function jumlahperhari(){
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('monlab2_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$day = date("d");
			$month = date("m");

			$datapower1 = $this->monlab2_model->jumlah_ps1d($day);

			foreach ($datapower1 as $data1){
				$lo1 = $data1->jumlah+0;
				$insert = array('power' => $lo1, 'time' => time(), 'd' => $day, 'm' => $month);
				if ($this->monlab2_model->power_s1d($insert)){
				echo "BERHASIL";
				}else{
					echo "ERROR";
				}
			}								
		}else{
			echo "Variabel data tidak terdefinisi";
		}

	}

	public function jumlahperbulan(){
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('monlab2_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$month = date("m");
			$year = date("Y");

			$datapower1 = $this->monlab2_model->jumlah_ps1m($month);

			foreach ($datapower1 as $data1){
				$lo1 = $data1->jumlah+0;
				$insert = array('power' => $lo1, 'time' => time(), 'm' => $month, 'y' => $year);
				if ($this->monlab2_model->power_s1m($insert)){
				echo "BERHASIL";
				}else{
					echo "ERROR";
				}
			}								
		}else{
			echo "Variabel data tidak terdefinisi";
		}
	}

	public function updstatus1(){
		$this->load->model('monlab2_model');    
		// if($this->input->post('submit'))
		// { // Jika user mengklik tombol submit yang ada di form   
			$this->monlab2_model->update1(); // Panggil fungsi edit() yang ada di SiswaModel.php
			redirect("admin/room2");        
		// }
	}
	public function updstatus2(){
		$this->load->model('monlab2_model');    
		$this->monlab2_model->update2(); // Panggil fungsi edit() yang ada di SiswaModel.php
		redirect("admin/room2");        
	}
	public function updstatus3(){
		$this->load->model('monlab2_model');    
		$this->monlab2_model->update3(); // Panggil fungsi edit() yang ada di SiswaModel.php
		redirect("admin/room2");        
	}
	public function updstatus4(){
		$this->load->model('monlab2_model');    
		$this->monlab2_model->update4(); // Panggil fungsi edit() yang ada di SiswaModel.php
		redirect("admin/room2");        
	}
	public function updstatus5(){
		$this->load->model('monlab2_model');    
		$this->monlab2_model->update5(); // Panggil fungsi edit() yang ada di SiswaModel.php
		redirect("admin/room2");        
	}
	public function updstatus6(){
		$this->load->model('monlab2_model');    
		$this->monlab2_model->update6(); // Panggil fungsi edit() yang ada di SiswaModel.php
		redirect("admin/room2");        
	}
}

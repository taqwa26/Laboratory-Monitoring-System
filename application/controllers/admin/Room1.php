<?php

class Room1 extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('monlab_model');

		$data['sensor1'] = $this->monlab_model->ambildata1r1_currently();
		$data['sensor2'] = $this->monlab_model->ambildata2r1_currently();
		$data['sensor3'] = $this->monlab_model->ambildata3r1_currently();
		$data['sensor4'] = $this->monlab_model->ambildata4r1_currently();
		$data['sensor5'] = $this->monlab_model->ambildata5r1_currently();
		$data['sensor6'] = $this->monlab_model->ambildata6r1_currently();
		$data['powerc0'] = $this->monlab_model->ambil_powerh();
		$data['powerc1'] = $this->monlab_model->ambil_powerd();
		$data['powerc2'] = $this->monlab_model->ambil_powerhall();
		$data['powerc3'] = $this->monlab_model->jumlah_powerdall();
		$data['powerc4'] = $this->monlab_model->ambil_powerm();
		$data['powerc5'] = $this->monlab_model->ambil_powerdall();
		
		$this->load->view('admin/mnc/room1', $data);
        // load view admin/overview.php
	}

	public function sensor1(){
		date_default_timezone_set("Asia/Makassar");
		$this->load->model('monlab_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$current = $this->input->get('data');
			$voltage = 220;
			$power = $current*$voltage;
			//echo $panjang;

			$datasensor = array('current' => $current, 'voltage' => $voltage, 'power' => $power, 't' => date("H"), 'time' => time());

			if($this->monlab_model->save1r1($datasensor)){
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
		$this->load->model('monlab_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$current = $this->input->get('data');
			$voltage = 220;
			$power = $current*$voltage;
			//echo $panjang;

			$datasensor = array('current' => $current, 'voltage' => $voltage, 'power' => $power, 't' => date("H"), 'time' => time());

			if($this->monlab_model->save2r1($datasensor)){
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
		$this->load->model('monlab_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$current = $this->input->get('data');
			$voltage = 220;
			$power = $current*$voltage;
			//echo $panjang;

			$datasensor = array('current' => $current, 'voltage' => $voltage, 'power' => $power, 't' => date("H"), 'time' => time());

			if($this->monlab_model->save3r1($datasensor)){
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
		$this->load->model('monlab_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$current = $this->input->get('data');
			$voltage = 220;
			$power = $current*$voltage;
			//echo $panjang;

			$datasensor = array('current' => $current, 'voltage' => $voltage, 'power' => $power, 't' => date("H"), 'time' => time());

			if($this->monlab_model->save4r1($datasensor)){
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
		$this->load->model('monlab_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$current = $this->input->get('data');
			$voltage = 220;
			$power = $current*$voltage;
			//echo $panjang;

			$datasensor = array('current' => $current, 'voltage' => $voltage, 'power' => $power, 't' => date("H"), 'time' => time());

			if($this->monlab_model->save5r1($datasensor)){
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
		$this->load->model('monlab_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$current = $this->input->get('data');
			$voltage = 220;
			$power = $current*$voltage;
			//echo $panjang;

			$datasensor = array('current' => $current, 'voltage' => $voltage, 'power' => $power, 't' => date("H"), 'time' => time());

			if($this->monlab_model->save6r1($datasensor)){
				echo "BERHASIL";
			}else{
				echo "ERROR";
			}
		}else{
			echo "Variabel data tidak terdefinisi";
		}
	}

	public function jumlahperjam(){
		date_default_timezone_set("Asia/Makassar");
		$this->load->model('monlab_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$clock = $this->input->get('data');

			$datapower1 = $this->monlab_model->jumlah_ps1h($clock);
			$datapower2 = $this->monlab_model->jumlah_ps2h($clock);
			$datapower3 = $this->monlab_model->jumlah_ps3h($clock);
			$datapower4 = $this->monlab_model->jumlah_ps4h($clock);
			$datapower5 = $this->monlab_model->jumlah_ps5h($clock);
			$datapower6 = $this->monlab_model->jumlah_ps6h($clock);

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
									$lo6 = $data6->jumlah6 + $lo5;
									$insert = array('power' => $lo6, 'time' => time(), 't' => date("H"), 'd' => date("d"));
									if ($this->monlab_model->power_s1h($insert)){
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
		date_default_timezone_set("Asia/Makassar");
		$this->load->model('monlab_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$day = $this->input->get('data');

			$datapower1 = $this->monlab_model->jumlah_ps1d($day);

			foreach ($datapower1 as $data1){
				$lo1 = $data1->jumlah;
				$insert = array('power' => $lo1, 'time' => time(), 'd' => date("d"), 'm' => date("m"));
				if ($this->monlab_model->power_s1d($insert)){
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
		date_default_timezone_set("Asia/Makassar");
		$this->load->model('monlab_model');
		if (isset($_GET['data'])) {
			//echo "OK";
			$month = $this->input->get('data');

			$datapower1 = $this->monlab_model->jumlah_ps1m($month);

			foreach ($datapower1 as $data1){
				$lo1 = $data1->jumlah;
				$insert = array('power' => $lo1, 'time' => time(), 'm' => date("m"), 'y' => date("Y"));
				if ($this->monlab_model->power_s1m($insert)){
				echo "BERHASIL";
				}else{
					echo "ERROR";
				}
			}								
		}else{
			echo "Variabel data tidak terdefinisi";
		}

	}

}

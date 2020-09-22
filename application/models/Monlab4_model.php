<?php
/**
* 
*/
class Monlab4_model extends CI_Model
{
	
	function save1r1($datasensor)
	{
		$this->db->insert('sensor_1r4', $datasensor);
		return TRUE;
    }
    
    function save2r1($datasensor)
	{
		$this->db->insert('sensor_2r4', $datasensor);
		return TRUE;
    }
    
    function save3r1($datasensor)
	{
		$this->db->insert('sensor_3r4', $datasensor);
		return TRUE;
    }
    
    function save4r1($datasensor)
	{
		$this->db->insert('sensor_4r4', $datasensor);
		return TRUE;
    }
    
    function save5r1($datasensor)
	{
		$this->db->insert('sensor_5r4', $datasensor);
		return TRUE;
    }
    
    function save6r1($datasensor)
	{
		$this->db->insert('sensor_6r4', $datasensor);
		return TRUE;
	}

	function ambildata1r1_currently(){
		// $this->db->select('*');
		// $this->db->from('sensor_1r4');
        // $query = $this->db->get();
       	// if ($query->num_rows()>0) {
		// 	return $query->result();
		// }
		date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT * FROM sensor_1r4 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}
	
	function ambildata2r1_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT * FROM sensor_2r4 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata3r1_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT * FROM sensor_3r4 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata6r1_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT * FROM sensor_6r4 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata4r1_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT * FROM sensor_4r4 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata5r1_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT * FROM sensor_5r4 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function jumlah_ps1h($clock){
		// $query1 = "SELECT sum(power) AS jumlah, count(power) AS row FROM sensor_1r4 WHERE t=$clock";
		$query1 = "SELECT AVG(power) AS jumlah1 FROM sensor_1r4 WHERE t=$clock";
		return $this->db->query($query1)->result();
	}

	function jumlah_ps2h($clock){
		// $query1 = "SELECT sum(power) AS jumlah, count(power) AS row FROM sensor_1r4 WHERE t=$clock";
		$query1 = "SELECT AVG(power) AS jumlah2 FROM sensor_2r4 WHERE t=$clock";
		return $this->db->query($query1)->result();
	}

	function jumlah_ps3h($clock){
		// $query1 = "SELECT sum(power) AS jumlah, count(power) AS row FROM sensor_1r4 WHERE t=$clock";
		$query1 = "SELECT AVG(power) AS jumlah3 FROM sensor_3r4 WHERE t=$clock";
		return $this->db->query($query1)->result();
	}

	function jumlah_ps4h($clock){
		// $query1 = "SELECT sum(power) AS jumlah, count(power) AS row FROM sensor_1r4 WHERE t=$clock";
		$query1 = "SELECT AVG(power) AS jumlah4 FROM sensor_4r4 WHERE t=$clock";
		return $this->db->query($query1)->result();
	}

	function jumlah_ps5h($clock){
		// $query1 = "SELECT sum(power) AS jumlah, count(power) AS row FROM sensor_1r4 WHERE t=$clock";
		$query1 = "SELECT AVG(power) AS jumlah5 FROM sensor_5r4 WHERE t=$clock";
		return $this->db->query($query1)->result();
	}

	function jumlah_ps6h($clock){
		// $query1 = "SELECT sum(power) AS jumlah, count(power) AS row FROM sensor_1r4 WHERE t=$clock";
		$query1 = "SELECT AVG(power) AS jumlah6 FROM sensor_6r4 WHERE t=$clock";
		return $this->db->query($query1)->result();
	}

	function power_s1h($insert)
	{
		$this->db->insert('power_s4h', $insert);
		return TRUE;
	}

	function ambil_powerh(){
		date_default_timezone_set("Asia/Jakarta");
        $kondisi=date("H");
        $kondisi2=date("d");
		$query = "SELECT power FROM power_s4h WHERE t=$kondisi AND d=$kondisi2 ORDER BY id_power DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambil_powerd(){
		date_default_timezone_set("Asia/Jakarta");
        $kondisi=date("d");
        $kondisi2=date("m");
		$query = "SELECT power FROM power_s4d WHERE d=$kondisi AND m=$kondisi2 ORDER BY id_power DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambil_powerm(){
		date_default_timezone_set("Asia/Jakarta");
        $kondisi=date("m");
        $kondisi2=date("Y");
		$query = "SELECT power FROM power_s4m WHERE m=$kondisi AND y=$kondisi2 ORDER BY id_power DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambil_powerhall(){
		// $this->db->select('*');
		// $this->db->from('sensor_1r4');
        // $query = $this->db->get();
       	// if ($query->num_rows()>0) {
		// 	return $query->result();
		// }
		$query = "SELECT * FROM power_s4h ORDER BY id_power ASC LIMIT 10";
		return $this->db->query($query)->result();
	}

	function ambil_powers1r1(){
		$query = "SELECT * FROM sensor_s1r1 ORDER BY id_power ASC";
		return $this->db->query($query)->result();
	}

	function ambil_powers2r1(){
		$query = "SELECT * FROM sensor_s2r1 ORDER BY id_power ASC";
		return $this->db->query($query)->result();
	}

	function ambil_powers13r1(){
		$query = "SELECT * FROM sensor_s3r1 ORDER BY id_power ASC";
		return $this->db->query($query)->result();
	}

	function ambil_powers4r1(){
		$query = "SELECT * FROM sensor_s4r1 ORDER BY id_power ASC";
		return $this->db->query($query)->result();
	}

	function ambil_powers5r1(){
		$query = "SELECT * FROM sensor_s5r1 ORDER BY id_power ASC";
		return $this->db->query($query)->result();
	}

	function ambil_powers6r1(){
		$query = "SELECT * FROM sensor_s6r1 ORDER BY id_power ASC";
		return $this->db->query($query)->result();
	}

	function ambil_powerdall(){
		$query = "SELECT * FROM power_s4d ORDER BY id_power ASC";
		return $this->db->query($query)->result();
	}

	function jumlah_powerdall(){
		// $query = "SELECT SUM(power) as powerm FROM power_s4d ORDER BY id_power ASC";
		// return $this->db->query($query)->result();
		date_default_timezone_set("Asia/Makassar");
		$kondisi=date("m");
		$query = "SELECT SUM(power) as powerm FROM power_s4d WHERE m=$kondisi";
		return $this->db->query($query)->result();
	}

	function jumlah_ps1d($day){
		$query1 = "SELECT SUM(power) AS jumlah FROM power_s4h WHERE d=$day";
		return $this->db->query($query1)->result();
	}

	function power_s1d($insert)
	{
		$this->db->insert('power_s4d', $insert);
		return TRUE;
	}

	function jumlah_ps1m($month){
		$query1 = "SELECT SUM(power) AS jumlah FROM power_s4d WHERE m=$month";
		return $this->db->query($query1)->result();
	}

	function power_s1m($insert)
	{
		$this->db->insert('power_s4m', $insert);
		return TRUE;
	}

}

?>
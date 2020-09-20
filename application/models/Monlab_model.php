<?php
/**
* 
*/
class Monlab_model extends CI_Model
{
	
	function save1r1($datasensor)
	{
		$this->db->insert('sensor_1r1', $datasensor);
		return TRUE;
    }
    
    function save2r1($datasensor)
	{
		$this->db->insert('sensor_2r1', $datasensor);
		return TRUE;
    }
    
    function save3r1($datasensor)
	{
		$this->db->insert('sensor_3r1', $datasensor);
		return TRUE;
    }
    
    function save4r1($datasensor)
	{
		$this->db->insert('sensor_4r1', $datasensor);
		return TRUE;
    }
    
    function save5r1($datasensor)
	{
		$this->db->insert('sensor_5r1', $datasensor);
		return TRUE;
    }
    
    function save6r1($datasensor)
	{
		$this->db->insert('sensor_6r1', $datasensor);
		return TRUE;
	}

	function ambildata1r1_currently(){
		// $this->db->select('*');
		// $this->db->from('sensor_1r1');
        // $query = $this->db->get();
       	// if ($query->num_rows()>0) {
		// 	return $query->result();
		// }
		$query = "SELECT * FROM sensor_1r1 ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}
	
	function ambildata2r1_currently(){
		// $this->db->select('*');
		// $this->db->from('sensor_1r1');
        // $query = $this->db->get();
       	// if ($query->num_rows()>0) {
		// 	return $query->result();
		// }
		$query = "SELECT * FROM sensor_2r1 ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata3r1_currently(){
		// $this->db->select('*');
		// $this->db->from('sensor_1r1');
        // $query = $this->db->get();
       	// if ($query->num_rows()>0) {
		// 	return $query->result();
		// }
		$query = "SELECT * FROM sensor_3r1 ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata6r1_currently(){
		// $this->db->select('*');
		// $this->db->from('sensor_1r1');
        // $query = $this->db->get();
       	// if ($query->num_rows()>0) {
		// 	return $query->result();
		// }
		$query = "SELECT * FROM sensor_1r1 ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata4r1_currently(){
		// $this->db->select('*');
		// $this->db->from('sensor_1r1');
        // $query = $this->db->get();
       	// if ($query->num_rows()>0) {
		// 	return $query->result();
		// }
		$query = "SELECT * FROM sensor_4r1 ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata5r1_currently(){
		// $this->db->select('*');
		// $this->db->from('sensor_1r1');
        // $query = $this->db->get();
       	// if ($query->num_rows()>0) {
		// 	return $query->result();
		// }
		$query = "SELECT * FROM sensor_5r1 ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function jumlah_ps1h($clock){
		// $query1 = "SELECT sum(power) AS jumlah, count(power) AS row FROM sensor_1r1 WHERE t=$clock";
		$query1 = "SELECT AVG(power) AS jumlah1 FROM sensor_1r1 WHERE t=$clock";
		return $this->db->query($query1)->result();
	}

	function jumlah_ps2h($clock){
		// $query1 = "SELECT sum(power) AS jumlah, count(power) AS row FROM sensor_1r1 WHERE t=$clock";
		$query1 = "SELECT AVG(power) AS jumlah2 FROM sensor_2r1 WHERE t=$clock";
		return $this->db->query($query1)->result();
	}

	function jumlah_ps3h($clock){
		// $query1 = "SELECT sum(power) AS jumlah, count(power) AS row FROM sensor_1r1 WHERE t=$clock";
		$query1 = "SELECT AVG(power) AS jumlah3 FROM sensor_3r1 WHERE t=$clock";
		return $this->db->query($query1)->result();
	}

	function jumlah_ps4h($clock){
		// $query1 = "SELECT sum(power) AS jumlah, count(power) AS row FROM sensor_1r1 WHERE t=$clock";
		$query1 = "SELECT AVG(power) AS jumlah4 FROM sensor_4r1 WHERE t=$clock";
		return $this->db->query($query1)->result();
	}

	function jumlah_ps5h($clock){
		// $query1 = "SELECT sum(power) AS jumlah, count(power) AS row FROM sensor_1r1 WHERE t=$clock";
		$query1 = "SELECT AVG(power) AS jumlah5 FROM sensor_5r1 WHERE t=$clock";
		return $this->db->query($query1)->result();
	}

	function jumlah_ps6h($clock){
		// $query1 = "SELECT sum(power) AS jumlah, count(power) AS row FROM sensor_1r1 WHERE t=$clock";
		$query1 = "SELECT AVG(power) AS jumlah6 FROM sensor_6r1 WHERE t=$clock";
		return $this->db->query($query1)->result();
	}

	function power_s1h($insert)
	{
		$this->db->insert('power_s1h', $insert);
		return TRUE;
	}

	function ambil_powerh(){
		$query = "SELECT power FROM power_s1h ORDER BY id_power DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambil_powerd(){
		$query = "SELECT power FROM power_s1d ORDER BY id_power DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambil_powerm(){
		$query = "SELECT power FROM power_s1m ORDER BY id_power DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambil_powerhall(){
		// $this->db->select('*');
		// $this->db->from('sensor_1r1');
        // $query = $this->db->get();
       	// if ($query->num_rows()>0) {
		// 	return $query->result();
		// }
		$query = "SELECT * FROM power_s1h ORDER BY id_power ASC LIMIT 10";
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
		$query = "SELECT * FROM power_s1d ORDER BY id_power ASC";
		return $this->db->query($query)->result();
	}

	function jumlah_powerdall(){
		$query = "SELECT SUM(power) as powerm FROM power_s1d ORDER BY id_power ASC";
		return $this->db->query($query)->result();
	}

	function jumlah_ps1d($day){
		$query1 = "SELECT SUM(power) AS jumlah FROM power_s1h WHERE d=$day";
		return $this->db->query($query1)->result();
	}

	function power_s1d($insert)
	{
		$this->db->insert('power_s1d', $insert);
		return TRUE;
	}

	function jumlah_ps1m($month){
		$query1 = "SELECT SUM(power) AS jumlah FROM power_s1d WHERE m=$month";
		return $this->db->query($query1)->result();
	}

	function power_s1m($insert)
	{
		$this->db->insert('power_s1m', $insert);
		return TRUE;
	}

}

?>
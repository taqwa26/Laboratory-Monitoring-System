<?php
/**
* 
*/
class Overview_model extends CI_Model
{
    function ambildata1r1_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_1r1 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}
	
	function ambildata2r1_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_2r1 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata3r1_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_3r1 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata6r1_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_6r1 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata4r1_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_4r1 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata5r1_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_5r1 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
    }
    
    


    
    function ambildata1r2_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_1r2 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}
	
	function ambildata2r2_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_2r2 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata3r2_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_3r2 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata6r2_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_6r2 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata4r2_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_4r2 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata5r2_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_5r2 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
    }




    
    function ambildata1r3_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_1r3 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}
	
	function ambildata2r3_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_2r3 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata3r3_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_3r3 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata6r3_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_6r3 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata4r3_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_4r3 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata5r3_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_5r3 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
    }
    




    function ambildata1r4_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_1r4 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}
	
	function ambildata2r4_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_2r4 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata3r4_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_3r4 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata6r4_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_6r4 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata4r4_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_4r4 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
	}

	function ambildata5r4_currently(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("H");
		$query = "SELECT current, power FROM sensor_5r4 WHERE t=$kondisi ORDER BY id_sensor DESC LIMIT 1";
		return $this->db->query($query)->result();
    }
    

    function ambil_currently1(){
        date_default_timezone_set("Asia/Jakarta");
        $kondisi=date("H");
        $kondisi2=date("d");
        $query = "SELECT power FROM power_s1h WHERE t='$kondisi' AND d='$kondisi2'";
        return $this->db->query($query)->result();
    }

    function ambil_currently2(){
        date_default_timezone_set("Asia/Jakarta");
        $kondisi=date("H");
        $kondisi2=date("d");
        $query = "SELECT power FROM power_s2h WHERE t='$kondisi' AND d='$kondisi2'";
        return $this->db->query($query)->result();
    }

    function ambil_currently3(){
        date_default_timezone_set("Asia/Jakarta");
        $kondisi=date("H");
        $kondisi2=date("d");
        $query = "SELECT power FROM power_s3h WHERE t='$kondisi' AND d='$kondisi2'";
        return $this->db->query($query)->result();
    }
		

    function ambil_currently4(){
        date_default_timezone_set("Asia/Jakarta");
        $kondisi=date("H");
        $kondisi2=date("d");
        $query = "SELECT power FROM power_s4h WHERE t='$kondisi' AND d='$kondisi2'";
        return $this->db->query($query)->result();		
    }

    function ambil_daily1(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("d");
        $kondisi2=date("m");
        if ($kondisi==1){
            $kondisi=date('d',strtotime("-1 days"));
            $kondisi2=date('m',strtotime("-1 days"));
            $query = "SELECT power FROM power_s1d WHERE d='$kondisi' AND m='$kondisi2'";
            return $this->db->query($query)->result();
        }else{
            $kondisi=date('d',strtotime("-1 days"));
            $query = "SELECT power FROM power_s1d WHERE d='$kondisi' AND m='$kondisi2'";
            return $this->db->query($query)->result();
        }		
    }
    function ambil_daily2(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("d");
        $kondisi2=date("m");
        if ($kondisi==1){
            $kondisi=date('d',strtotime("-1 days"));
            $kondisi2=date('m',strtotime("-1 days"));
            $query = "SELECT power FROM power_s2d WHERE d='$kondisi' AND m='$kondisi2'";
            return $this->db->query($query)->result();
        }else{
            $kondisi=date('d',strtotime("-1 days"));
            $query = "SELECT power FROM power_s2d WHERE d='$kondisi' AND m='$kondisi2'";
            return $this->db->query($query)->result();
        }        		
    }
    function ambil_daily3(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("d");
        $kondisi2=date("m");
        if ($kondisi==1){
            $kondisi=date('d',strtotime("-1 days"));
            $kondisi2=date('m',strtotime("-1 days"));
            $query = "SELECT power FROM power_s3d WHERE d='$kondisi' AND m='$kondisi2'";
            return $this->db->query($query)->result();
        }else{
            $kondisi=date('d',strtotime("-1 days"));
            $query = "SELECT power FROM power_s3d WHERE d='$kondisi' AND m='$kondisi2'";
            return $this->db->query($query)->result();
        }        		
    }
    function ambil_daily4(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("d");
        $kondisi2=date("m");
        if ($kondisi==1){
            $kondisi=date('d',strtotime("-1 days"));
            $kondisi2=date('m',strtotime("-1 days"));
            $query = "SELECT power FROM power_s4d WHERE d='$kondisi' AND m='$kondisi2'";
            return $this->db->query($query)->result();
        }else{
            $kondisi=date('d',strtotime("-1 days"));
            $query = "SELECT power FROM power_s4d WHERE d='$kondisi' AND m='$kondisi2'";
            return $this->db->query($query)->result();
        }        
    }

    function ambil_sumdaily1(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi2=date("m");
        $query = "SELECT SUM(power) as jumlah FROM power_s1d WHERE m='$kondisi2'";
        return $this->db->query($query)->result();        
    }
    function ambil_sumdaily2(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi2=date("m");
        $query = "SELECT SUM(power) as jumlah FROM power_s2d WHERE m='$kondisi2'";
        return $this->db->query($query)->result();        		
    }
    function ambil_sumdaily3(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi2=date("m");
        $query = "SELECT SUM(power) as jumlah FROM power_s3d WHERE m='$kondisi2'";
        return $this->db->query($query)->result();		
    }
    function ambil_sumdaily4(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi2=date("m");
        $query = "SELECT SUM(power) as jumlah FROM power_s4d WHERE m='$kondisi2'";
        return $this->db->query($query)->result();		
    }

    function ambil_monthly1(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi2=date('m',strtotime("-1 month"));
        $query = "SELECT power FROM power_s1m WHERE m='$kondisi2'";
        return $this->db->query($query)->result();        
    }
    function ambil_monthly2(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi2=date('m',strtotime("-1 month"));
        $query = "SELECT power FROM power_s2m WHERE m='$kondisi2'";
        return $this->db->query($query)->result();        		
    }
    function ambil_monthly3(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi2=date('m',strtotime("-1 month"));
        $query = "SELECT power FROM power_s3m WHERE m='$kondisi2'";
        return $this->db->query($query)->result();		
    }
    function ambil_monthly4(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi2=date('m',strtotime("-1 month"));
        $query = "SELECT power FROM power_s4m WHERE m='$kondisi2'";
        return $this->db->query($query)->result();		
    }

    function power_s1h($insert)
	{
		$this->db->insert('power_allh', $insert);
		return TRUE;
    }
    function view_currently(){
        date_default_timezone_set("Asia/Jakarta");
        $kondisi=date("H");
        $kondisi2=date("d");
        $query = "SELECT power FROM power_allh WHERE t='$kondisi' AND d='$kondisi2' ORDER BY id_power DESC LIMIT 1";
        return $this->db->query($query)->result();
    }
    function power_s1d($insert)
	{
		$this->db->insert('power_alld', $insert);
		return TRUE;
    }
    function power_s1m($insert)
	{
		$this->db->insert('power_allm', $insert);
		return TRUE;
    }
    function view_daily(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("d");
        $kondisi2=date("m");
        if ($kondisi==1){
            $kondisi=date('d',strtotime("-1 days"));
            $kondisi2=date('m',strtotime("-1 days"));
            $query = "SELECT power FROM power_alld WHERE d='$kondisi' AND m='$kondisi2' ORDER BY id_power DESC LIMIT 1";
            return $this->db->query($query)->result();
        }else{
            $kondisi=date('d',strtotime("-1 days"));
            $query = "SELECT power FROM power_alld WHERE d='$kondisi' AND m='$kondisi2' ORDER BY id_power DESC LIMIT 1";
            return $this->db->query($query)->result();
        } 
    }
    function jumlah_powerdall(){
		date_default_timezone_set("Asia/Makassar");
		$kondisi=date("m");
		$query = "SELECT SUM(power) as powerm FROM power_alld WHERE m=$kondisi";
        return $this->db->query($query)->result();
    }
    function view_monthly(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date('m',strtotime("-1 month"));
        $kondisi2=date("Y");
        $query = "SELECT power FROM power_allm WHERE m='$kondisi' AND y='$kondisi2' ORDER BY id_power DESC LIMIT 1";
        return $this->db->query($query)->result();
    }

    function view_alldaily(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("m");
        $query = "SELECT * FROM power_alld WHERE m='$kondisi' ORDER BY id_power ASC LIMIT 10";
        return $this->db->query($query)->result();
    }
    function view_allcurrently(){
        $query = "SELECT * FROM power_allh ORDER BY id_power ASC LIMIT 10";
		return $this->db->query($query)->result();
    }
    function view_allmonthly(){
        date_default_timezone_set("Asia/Makassar");
        $kondisi=date("Y");
        $query = "SELECT * FROM power_allm WHERE y='$kondisi' ORDER BY id_power ASC LIMIT 10";
		return $this->db->query($query)->result();
    }

    function delete_sensor($clock){
        $query = "DELETE FROM sensor_1r1 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_2r1 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_3r1 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_4r1 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_5r1 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_6r1 WHERE t='$clock'";
        $this->db->query($query);
        
        $query = "DELETE FROM sensor_1r2 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_2r2 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_3r2 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_4r2 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_5r2 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_6r2 WHERE t='$clock'";
        $this->db->query($query);
        
        $query = "DELETE FROM sensor_1r3 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_2r3 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_3r3 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_4r3 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_5r3 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_6r3 WHERE t='$clock'";
        $this->db->query($query);
        
        $query = "DELETE FROM sensor_1r4 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_2r4 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_3r4 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_4r4 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_5r4 WHERE t='$clock'";
        $this->db->query($query);
        $query = "DELETE FROM sensor_6r4 WHERE t='$clock'";
		$this->db->query($query);
    }

    function delete_jh($daya){
        $query = "DELETE FROM power_s1h WHERE d='$daya'";
        $this->db->query($query);
        $query = "DELETE FROM power_s2h WHERE d='$daya'";
        $this->db->query($query);
        $query = "DELETE FROM power_s3h WHERE d='$daya'";
        $this->db->query($query);
        $query = "DELETE FROM power_s4h WHERE d='$daya'";
        $this->db->query($query);
        $query = "DELETE FROM power_allh WHERE d='$daya'";
        $this->db->query($query);
    }

    function delete_jd($montha){
        $query = "DELETE FROM power_s1d WHERE d='$montha'";
        $this->db->query($query);
        $query = "DELETE FROM power_s2d WHERE d='$montha'";
        $this->db->query($query);
        $query = "DELETE FROM power_s3d WHERE d='$montha'";
        $this->db->query($query);
        $query = "DELETE FROM power_s4d WHERE d='$montha'";
        $this->db->query($query);
        $query = "DELETE FROM power_alld WHERE d='$montha'";
        $this->db->query($query);
    }

    function getsensor_1r1(){
        $query = "SELECT * FROM sensor_1r1 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_2r1(){
        $query = "SELECT * FROM sensor_2r1 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_3r1(){
        $query = "SELECT * FROM sensor_3r1 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_4r1(){
        $query = "SELECT * FROM sensor_4r1 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_5r1(){
        $query = "SELECT * FROM sensor_5r1 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_6r1(){
        $query = "SELECT * FROM sensor_6r1 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }

    function getsensor_1r2(){
        $query = "SELECT * FROM sensor_1r2 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_2r2(){
        $query = "SELECT * FROM sensor_2r2 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_3r2(){
        $query = "SELECT * FROM sensor_3r2 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_4r2(){
        $query = "SELECT * FROM sensor_4r2 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_5r2(){
        $query = "SELECT * FROM sensor_5r2 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_6r2(){
        $query = "SELECT * FROM sensor_6r2 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }

    function getsensor_1r3(){
        $query = "SELECT * FROM sensor_1r3 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_2r3(){
        $query = "SELECT * FROM sensor_2r3 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_3r3(){
        $query = "SELECT * FROM sensor_3r3 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_4r3(){
        $query = "SELECT * FROM sensor_4r3 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_5r3(){
        $query = "SELECT * FROM sensor_5r3 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_6r3(){
        $query = "SELECT * FROM sensor_6r3 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }

    function getsensor_1r4(){
        $query = "SELECT * FROM sensor_1r4 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_2r4(){
        $query = "SELECT * FROM sensor_2r4 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_3r4(){
        $query = "SELECT * FROM sensor_3r4 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_4r4(){
        $query = "SELECT * FROM sensor_4r4 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_5r4(){
        $query = "SELECT * FROM sensor_5r4 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }
    function getsensor_6r4(){
        $query = "SELECT * FROM sensor_6r4 ORDER BY id_sensor ASC";
		return $this->db->query($query)->result();
    }


    
    function getstatus_1r1(){
        $query = "SELECT sensor_1r1 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_2r1(){
        $query = "SELECT sensor_2r1 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_3r1(){
        $query = "SELECT sensor_3r1 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_4r1(){
        $query = "SELECT sensor_4r1 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_5r1(){
        $query = "SELECT sensor_5r1 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_6r1(){
        $query = "SELECT sensor_6r1 FROM status";
		return $this->db->query($query)->result();
    }

    function getstatus_1r2(){
        $query = "SELECT sensor_1r2 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_2r2(){
        $query = "SELECT sensor_2r2 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_3r2(){
        $query = "SELECT sensor_3r2 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_4r2(){
        $query = "SELECT sensor_4r2 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_5r2(){
        $query = "SELECT sensor_5r2 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_6r2(){
        $query = "SELECT sensor_6r2 FROM status";
		return $this->db->query($query)->result();
    }

    function getstatus_1r3(){
        $query = "SELECT sensor_1r3 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_2r3(){
        $query = "SELECT sensor_2r3 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_3r3(){
        $query = "SELECT sensor_3r3 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_4r3(){
        $query = "SELECT sensor_4r3 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_5r3(){
        $query = "SELECT sensor_5r3 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_6r3(){
        $query = "SELECT sensor_6r3 FROM status";
		return $this->db->query($query)->result();
    }

    function getstatus_1r4(){
        $query = "SELECT sensor_1r4 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_2r4(){
        $query = "SELECT sensor_2r4 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_3r4(){
        $query = "SELECT sensor_3r4 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_4r4(){
        $query = "SELECT sensor_4r4 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_5r4(){
        $query = "SELECT sensor_5r4 FROM status";
		return $this->db->query($query)->result();
    }
    function getstatus_6r4(){
        $query = "SELECT sensor_6r4 FROM status";
		return $this->db->query($query)->result();
    }
}
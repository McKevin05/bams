<?php 

namespace App\Validation;

class CustomRules
{
	//event time valiation
	public function time(string $str, string $fields, array $data)
	{
		$time_start = strtotime($str);
		$time_end = strtotime($data[$fields]);

		if ($time_start >= $time_end) 
			return FALSE;
		
		return TRUE;
	}

	//event date valiation
	public function v_date(string $str, string $fields, array $data)
	{
		$date_start = strtotime($str);
		$date_end = strtotime($data[$fields]);

		if ($date_start >= $date_end) 
			return FALSE;
		
		return TRUE;
	}

	//voters validation
	public function v_voter_active(string $str)
	{
		$this->voter_m = new \App\Models\Voter_m();
		$count = $this->voter_m
							->where('voter_password',$str)
							->where('voter_actived',1)
							->countAllResults();


		if ($count == 0) 
			return FALSE;

		return TRUE;
	}

	public function v_voter_pass(string $str)
	{
		$this->voter_m = new \App\Models\Voter_m();
		$count = $this->voter_m
							->where('voter_password',$str)
							->countAllResults();
		if ($count == 0) 
			return FALSE;

		return TRUE;
	}

	
}

?>
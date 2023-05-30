<?php 

	function randomPassword() 
	{
	    $alphabet = "ABCDEFGHJKLMNPQRSTUWXYZ23456789";
	    $pass = array(); //remember to declare $pass as an array
	    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	    for ($i = 0; $i < 8; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    return implode($pass); //turn the array into a string
	}

	function update_arr_val($arr,$field,$val)
	{
		$newData = $arr;

		foreach ($newData as $key => $data) 
		{
			$newData[$key][$field] = $val;
		}

		return $newData;
	}
	function show($el = "",$showCon = TRUE)
	{
		if ($showCon) 
			echo  $el;
	}

	function button($type="ADD",$name = "",$att=NULL,$link=NULL,$addClass = NULL)
	{
		if ($type == "") 
		{
			echo "";
			return FALSE;
		}	


		$typeArr = array(
			          "ADD"  		=> array('class' => 'btn btn-success','icon' => "fas fa-plus-circle"),   
			          "EDIT"  		=> array('class' => 'btn btn-success','icon' => "fas fa-edit"),
			          "DELETE"		=> array('class' => 'btn btn-danger','icon' => "fas fa-trash"),
			          "VIEW"   		=> array('class' => 'btn btn-primary','icon' => "fas fa-eye"),
			          "PRINT" 		=> array('class' => 'btn btn-secondary','icon' => "fas fa-print"),
			          "CLOSE" 		=> array('class' => 'btn btn-secondary','icon' => "fas fa-times"),
			          "SAVE"  		=> array('class' => 'btn btn-primary','icon' => "fas fa-save"),
			          "SEARCH"		=> array('class' => 'btn btn-primary','icon' => "fas fa-search") ,
			          "BACK"		=> array('class' => 'btn btn-secondary','icon' => "fas fa-chevron-left") ,
			          "DOWNLOAD"	=> array('class' => 'btn btn-secondary','icon' => "fas fa-download") ,
			         );

		$data = $typeArr[strtoupper($type)];

		$attributes = "";

		if (!empty($att)) 
		{
			if (is_string($att)) 
				$attributes = $att;

			elseif(is_array($att))
			{
				foreach ($att as $key => $value) 
				{
					$attributes .= "{$key} = '{$value}' ";
				}
			}
			else
			{
				$attributes = "";
			}
		}


		if ($link != NULL)
		{
		   echo "<a href='{$link}' {$attributes} class='{$data['class']} {$addClass}'><i class='{$data['icon']}'></i> {$name}</a>";
		} 
		else
		{
		   echo "<button {$attributes} class='{$data['class']} {$addClass}'><i class='{$data['icon']}'></i> {$name}</button>";
		}
		return TRUE;
	}


?>
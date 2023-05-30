<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Session\Handlers\FileHandler;

class CustomConfig extends BaseConfig
{
    public $site_title 		= "ELECTION SYSTEM";
    public $name		 	= "MACEMCO";
    public $bams_logo 		= '/assets/images/bams_logo.jpg';
    public $logo 			= '/assets/images/macemco_logo_sm.png';
}
?>
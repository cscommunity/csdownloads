<?php

class CSDownloadsFactory extends JFactory{

	public function get_controller($name, $app = 'admin', $config = array(), $prefix = CSDOWNLOADS_PREFIX){
		static $loaded = array();
		
		$class_name = $prefix.$app.'Controller'.$name;
		if(!isset($loaded[strtolower($class_name)])){
			if(!class_exists($class_name, true)){
				$file = CSDOWNLOADS_SITE;					
				if($app == 'admin'){
					$file = CSDOWNLOADS_ADMIN;
				}
				require_once $file.'/controller/'.$name.'.php';
			}
			
			$loaded[$class_name] = new $class_name($config);
		}
		
		return $loaded[$class_name];
	}
	
	public function get_instance($name, $type, $com_prefix = CSDOWNLOADS_PREFIX){
		
	}
}


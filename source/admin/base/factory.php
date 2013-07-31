<?php

class CSDownloadsFactory extends JFactory{

	public function get_instance($name, $type, $prefix = CSDOWNLOADS_PREFIX, $config = array()){
		static $loaded = array();
		
		$class_name = $prefix.$type.$name;
		if(!isset($loaded[strtolower($class_name)])){
			if(!class_exists($class_name, true)){
				throw new Exception('Class '.$class_name.' not found.');
			}
			
			$loaded[$class_name] = new $class_name($config);
		}
		
		return $loaded[$class_name];
	}
}


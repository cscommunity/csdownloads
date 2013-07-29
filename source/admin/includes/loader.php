<?php

if(!function_exists('csdownloads_import')){
	function csdownloads_import($package, $package_prefix, $base_path = CSDOWNLOADS_ADMIN, $com_prefix = CSDOWNLOADS_PREFIX){
		static $loaded = array();
		
		if(!isset($loaded[$package])){
			$path = $base_path.'/'.$package;
			foreach(JFolder::files($path, ".php") as $file){
				$class_name = $com_prefix.$package_prefix.$file;
				if(!class_exists($class_name, true)){
					require_once $path.'/'.$file;
				}
			}
			
			$loaded[$package] = true;
		}
		
		return true;
	}
}
	
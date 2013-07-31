<?php

class CSDownloadsView extends JViewLegacy
{
	public function getModel(){
		return CSDownloadsFactory::get_instance($this->getName(), 'model');
	}
	
	public function grid()
	{
		$model = $this->getModel();
		echo $this->display('grid');
		return true;
	}
}
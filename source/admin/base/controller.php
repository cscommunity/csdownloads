<?php

class CSDownloadsController extends JControllerLegacy
{
	public function getView($name = '', $type = 'html', $prefix = '', $config = array())
	{
		return parent::getView($name, $type, $this->getPrefix().'View', $config);
	}
	
	public function getPrefix()
	{
		if (empty($this->prefix))
		{
			$r = null;
			if (!preg_match('/(.*)Controller/i', get_class($this), $r))
			{
				throw new Exception(JText::_('JLIB_APPLICATION_ERROR_CONTROLLER_GET_PREFIX'), 500);
			}
			$this->prefix = strtolower($r[1]);
		}

		return $this->prefix;
	}
	
	public function getName()
	{
		if (empty($this->name))
		{
			$r = null;
			if (!preg_match('/Controller(.*)/i', get_class($this), $r))
			{
				throw new Exception(JText::_('JLIB_APPLICATION_ERROR_CONTROLLER_GET_NAME'), 500);
			}
			$this->name = strtolower($r[1]);
		}

		return $this->name;
	}
	
	public function grid()
	{
		$this->getView()->grid();
	}
}
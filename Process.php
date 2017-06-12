<?php

use Interfaces\ProcessInterface;

class Process extends ProcessAbstract implements ProcessInterface {

	public function start()
	{
		$this->batch = new Batch;
	}

	public function addNewParcel($id)
	{
		if($this->run)
		{
			$this->batch->add(new Parcel($id));
		}
	}

	public function stop()
	{
		$this->run = false;
	}

}
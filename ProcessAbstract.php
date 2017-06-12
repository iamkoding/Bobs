<?php

abstract class ProcessAbstract {

	private $batch;
	private $run = true;

	/**
	 * @return Parcel
	 */
	public function getParcel()
	{
		$parcel = $batch->getOne();
		if(!$parcel) return false;

		return $parcel;
	}
}
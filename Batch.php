<?php

class Batch {

	private $undelivered_parcels = [];
	private $delivered_parcels = [];


	/**
	 * @var int $parcel
	 * @return void;
	 */
	public function add($parcel)
	{
		$this->undelivered_parcels[] = $parcel;
	}

	/**
	 * @return Parcel
	 */
	public function getOne()
	{
		if(count($this->undelivered_parcels) < 1) return false;
		
		$parcel = array_pop($this->undelivered_parcels);
		$this->delivered_parcels[] = $parcel;
		return $parcel;
	}
}

<?php

namespace Courier;

abstract class CourierAbstract {

	private $id;
	private $transport;
	private $parcels = [];

	/**
	 * @var int $id
	 * @var string $transport
	 */
	public function __construct($id, $transport)
	{
		$this->id = $id;
		$this->transport = $transport;
	}

	/**
	 * @var Parcel $parcel
	 * @return void
	 */
	public function add($parcel)
	{
		$parcel->addCourierConsignment($this->algorith());
		$this->parcels[] = $parcel;
	}

	/**
	 * @return array 
	 */
	public function getParcels()
	{
		return $this->parcels;
	}

	/**
	 * @return string
	 */
	public function transportMethod()
	{
		return $this->transport;
	}

	public function deliver($parcel)
	{
		$parcel->assigned($this->id);
		$this->add($parcel);
	}
}




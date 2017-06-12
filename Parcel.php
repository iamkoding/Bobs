<?php

class Parcel {

	private $id;
	private $consignment_number;
	private $courier_id;

	/**
	 * @var int $id
	 */
	public function __construct($id)
	{
 		$this->id = $id;
	}

	/**
	 * @return void
	 */
	public function assigned($courier_id)
	{
		$this->courier_id = $courier_id;
	}

	/**
	 * @return void
	 */
	public function addCourierConsignment($id)
	{
		$this->consignment_number = $id;
	}
	
}
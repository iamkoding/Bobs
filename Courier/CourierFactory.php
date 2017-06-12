<?php

namespace Courier;

class CourierFactory {

	private $id;
	private $name;
	private $transport;

	/**
	 * @var int $id
	 * @var string $name
	 * @var string $transport
	 */
	public function __construct($id, $name, $transport)
	{
		$this->id = $id;
		$this->name = $name;
		$this->transport = $transport;
	} 

	/**
	 * @return object
	 */
	public function get()
	{
		switch($this->name)
		{
			case 'rm':
				return new Courier\RoyalMail($this->id, $this->transport);
				break;
			default:
				return new Courier\Anc($this->id, $this->transport);
				break;
		}
	}
}
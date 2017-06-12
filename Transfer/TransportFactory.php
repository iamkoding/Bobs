<?php

namespace Transfer;

class TransportFactory {

	private $method;
	private $list;

	/**
	 * @var string $method
	 * @var array $list
	 */
	public function __construct($method, $list)
	{
		$this->method = $method;	
		$this->list = $list;	
	}

	/**
	 * @return void
	 */
	public function send()
	{
		switch($method)
		{
			case 'ftp':
				$transport = new Transfer\FTP();
				break;
			default:
				$transport = new Transfer\Email();
				break;
		}

		$transport->attempt($this->list); 
	}
}
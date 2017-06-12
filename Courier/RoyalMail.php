<?php

namespace Courier;

use Interfaces\CourierInterface;

class RoyalMail extends CourierAbstract implements CourierInterface {

	public function algorithm()
	{
		return mt_rand(100000, 999999);
	}

}
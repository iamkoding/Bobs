<?php

namespace Courier;

use Interfaces\CourierInterface;

class Anc extends CourierAbstract implements CourierInterface {

	public function algorithm()
	{
		return mt_rand(1, 999);
	}

}
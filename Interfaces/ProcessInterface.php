<?php

namespace Interfaces;

interface ProcessInterface {

	/**
	 * @return void
	 */
	public function start();

	/**
	 * @var int $id
	 * @return void
	 */
	public function addNewParcel($id);

	/**
	 * @return void
	 */
	public function stop();
}
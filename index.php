<?php

$process = new Process();
$process->start();
$process->addNewParcel(1);
$process->addNewParcel(2);

$courierFactory = new Courier\CourierFactory(1, 'rm', 'email');
$courier = $courierFactory->get();
$courier->deliver($process->getParcel());
$courier->deliver($process->getParcel());

try {
	$list = $courier->getParcels();
	$transport = new Transfer\TransportFactory($courier->transportMethod(), $list);
	$transport->send();
} catch(Exception $e) {
	//Add to logs, send error message
}

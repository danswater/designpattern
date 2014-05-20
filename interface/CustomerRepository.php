<?php

class CustomerRepository {
	private $Idatabase;

	public function __construct ( DatabaseInterface $Idatabase ) {
		$this->Idatabase = $Idatabase;
	}

	public function Add ( $customerName, $valueName ) {
		$this->Idatabase->AddRow( $customerName , $valueName );
	}
}
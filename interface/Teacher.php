<?php
require( 'DatabaseInterface.php' );
require( 'CustomerRepository.php' );

class Teacher implements DatabaseInterface {
	public function AddRow ( $table, $value ) {
		print $table . ' ' . $value;
	}
}

$teacher = new Teacher();
$customerRepository = new CustomerRepository( $teacher );

$customerRepository->Add( 'hello', 'world' );
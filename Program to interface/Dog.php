<?php
require( 'Animal.php' );

class Dog implements Animal {
	public function makeSound () {
		print "Bow wow wow";
	}
}
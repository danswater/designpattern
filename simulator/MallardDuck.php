<?php
require( 'Duck.php' );
require( 'Quack.php' );
require( 'FlyWithWings.php' );

class MallardDuck extends Duck {
	
	public function __construct () {
		$this->quackBehavior = new Quack();
		$this->flyBehavior   = new FlyWithWings();
	}

	public function display () {
		print 'I\'m a real Mallard duck';
	}
}
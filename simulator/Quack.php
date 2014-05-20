<?php
require( 'QuackBehaviorInterface.php' );

class Quack implements QuackBehavior {
	public function quack () {
		print 'Quack';
	}
}
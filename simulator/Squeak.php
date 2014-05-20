<?php
require( 'QuackBehaviorInterface.php' );

class Squeak implements QuackBehavior {
	public function quack () {
		print 'Squeak';
	}
}
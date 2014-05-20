<?php
require( 'QuackBehaviorInterface.php' );

class MuteQuack implements QuackBehavior {
	public function quack () {
		print 'Silence';
	}
}
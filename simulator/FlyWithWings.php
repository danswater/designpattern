<?php
require( 'FlyBehaviorInterface.php' );

class FlyWithWings implements FlyBehaviorInterface {
	public function fly () {
		print 'I\'m flying!!';
	}
}
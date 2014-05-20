<?php
require( 'FlyBehaviorInterface.php' );

class FlyNoWay implements FlyBehaviorInterface {
	public function fly () {
		print 'I ca\'nt fly!!';
	}
}
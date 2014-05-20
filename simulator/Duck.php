<?php

class Duck {
	protected $flyBehavior;
	protected $quackBehavior;

	public function performQuack () {
		$quackBehavior->quack();
	}

	public function performFly () {
		$flyBehavior->fly();
	}

	public function swin () {
		print 'All ducks float, even decoys';
	}
}
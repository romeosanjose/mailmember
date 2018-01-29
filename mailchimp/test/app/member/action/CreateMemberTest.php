<?php

namespace AppTest\Member\Action;

use PHPUnit\Framework\TestCase;

class CreateMemberTest extends TestCase{
    
	private $createMember;

	public function setUp(){
		$this->createMember = new CreateMember();
	}

	public function testShouldReturnErrorIfRequriedFieldsAreBlank(){
		
	}

}

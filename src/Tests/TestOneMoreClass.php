<?php

namespace YuriyYakubskiy\ComposerProject\Tests;

use YuriyYakubskiy\ComposerProject\Folder\OneMoreClass;

class TestOneMoreClass extends \PHPUnit_Framework_TestCase
{

    private $omc = null;	

    protected function setUp()
    {
        $this->omc = new OneMoreClass();
    }

    protected function tearDown()
    {
    }

    public function testInitialState()
    {
	
    }

    public function testGetPrs(){
	$this->assertEquals( 1, $this->omc->One() );
    }
}

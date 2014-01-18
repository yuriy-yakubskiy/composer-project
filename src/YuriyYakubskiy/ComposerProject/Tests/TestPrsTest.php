<?php

namespace YuriyYakubskiy\ComposerProject\Tests;

use YuriyYakubskiy\ComposerProject\PrsTest;


class TestPrsTest extends \PHPUnit_Framework_TestCase
{

    private $prs = null;	

    protected function setUp()
    {
        $this->prs = new PrsTest();
    }

    protected function tearDown()
    {
    }

    public function testInitialState()
    {
#        $this->assertEquals(null, $this->prs);
        
	
    }

    public function testGetPrs(){
	$this->assertEquals( 1, $this->prs->getPrs() );
    }
}

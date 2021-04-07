<?php
use PHPUnit\Framework\TestCase;
require 'Par.php';

class ParTest extends TestCase
{
    private $par;
 
    protected function setUp(): void
    {
        $this->par = new Par();
    }
 
    protected function tearDown(): void
    {
        $this->par = NULL;
    }
 
    public function testPar(): void
    {
        $result = $this->par->espar(1);
        $this->assertEquals(0, $result);
   }

    public function testPar2(): void
    {
        $result = $this->par->espar(2);
        $this->assertEquals(1, $result);
    }

}

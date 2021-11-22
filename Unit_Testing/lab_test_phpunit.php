<?php
use PHPUnit\Framework\TestCase;

class lab_test_phpunit extends TestCase { //Child class that can assess all the methods available in TestCase
    public function testFailure(): void
    {
        $this->assertArrayHasKey('foo', ['bar' => 'baz']);
    }

    public function testSame() {
        $string1 = 'testing'; //works for any data type
        $string2 = 'testing'; 
        $this->assertSame($string1, $string2);
    }

    public function testEquals(){
        $this->assertEquals(4, 3+1);
    }
}


?>
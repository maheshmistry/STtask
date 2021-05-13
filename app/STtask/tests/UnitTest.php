<?php

use App\Controller\fizzbuzzController;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class STUnitTest extends KernelTestCase
{
    /** @test */
    public function assertFizzCase()
    {
        $fizzbuzzController = new fizzbuzzController();
        $this->assertSame("Fizz", $fizzbuzzController->fizzbuzz(3));
        $this->assertSame("Fizz", $fizzbuzzController->fizzbuzz(99));
        $this->assertSame("Fizz", $fizzbuzzController->fizzbuzz(66));
    }

    /** @test */
    public function assertBuzzCase()
    {
        $fizzbuzzController = new fizzbuzzController();
        $this->assertSame("Buzz", $fizzbuzzController->fizzbuzz(100));
        $this->assertSame("Buzz", $fizzbuzzController->fizzbuzz(5));
        $this->assertSame("Buzz", $fizzbuzzController->fizzbuzz(50));
    }
    
    /** @test */
    public function assertFizzBuzzCase()
    {
        $fizzbuzzController = new fizzbuzzController();
        $this->assertSame("FizzBuzz", $fizzbuzzController->fizzbuzz(30));
        $this->assertSame("FizzBuzz", $fizzbuzzController->fizzbuzz(90));
    }
    
    /** @test */
    public function assertNumberCase()
    {
        $fizzbuzzController = new fizzbuzzController();
        $this->assertSame(1, $fizzbuzzController->fizzbuzz(1));
        $this->assertSame(2, $fizzbuzzController->fizzbuzz(2));
        $this->assertSame(29, $fizzbuzzController->fizzbuzz(29));
        $this->assertSame(86, $fizzbuzzController->fizzbuzz(86));
    }
}
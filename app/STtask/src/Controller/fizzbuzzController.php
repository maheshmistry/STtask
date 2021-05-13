<?php

declare(strict_types = 1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class fizzbuzzController extends AbstractController
{
    public function fizzbuzzfunc()
    {
        $fb = array();
        for($i=1; $i<=100; $i++)
        {
            $fb[$i] = $this->fizzbuzz($i);
        }
        return $this->render('fizzbuzz.html.twig', [
            'fb' => $fb
        ]);
    }

    public function fizzbuzz($i)
    {
        if ($i % 15 == 0) {
            $i = 'FizzBuzz';
        } elseif ($i % 3 == 0) {
            $i =  'Fizz';
        } elseif ($i % 5 == 0) {
            $i = 'Buzz';
        } else {
            $i = $i;
        }
        return $i;
    }
}
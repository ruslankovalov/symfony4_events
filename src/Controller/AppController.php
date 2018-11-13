<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class AppController
{
    /**
     * @Route("/", methods={"GET"})
     */
    public function helloWorldAction()
    {
        return new Response('Hello World');
    }
}
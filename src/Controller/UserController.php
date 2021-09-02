<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;

class UserController extends BaseController
{
    /**
     * @Rest\Post ("/api/test")
     */
    public function test()
    {
        dd('test');
    }
}

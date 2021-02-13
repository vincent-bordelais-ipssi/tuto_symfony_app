<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Hello2Controller extends AbstractController
{
  /**
   * @Route("hello2/{param}", requirements={"param"="\d+"}) // requirement signifie condition, ici la regex pour un digital positif.
   */
  function helloNumber($param)
  {
    return new Response('Salut !' . $param);
  }
}

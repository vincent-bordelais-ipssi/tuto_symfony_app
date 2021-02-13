<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Hello3Controller extends AbstractController
{

  /**
   * @Route("hello3")
   */
  function hello3()
  {
    $title = "Utilisateurs";
    $users = ["Mickey", "Léo", "Donnie", "Raph"];
    return $this->render('hello3.html.twig');
  }

  /**
   * @Route("hello/{first_name}", name="hellowithname")
   */
  function helloWithName($first_name)
  {
    return new Response('Salut !' . $first_name);
  }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Hello1Controller extends AbstractController
{
  /**
   * @Route("hello1")
   */
  function hello1()
  {
    $title = "Utilisateurs";
    $users = ["Mickey", "Léo", "Donnie", "Raph"];
    return $this->render(
      'hello1.html.twig',
      ['title' => $title, 'array' => $users]
    ); // $this référe à ma classe HelloController
  }
}

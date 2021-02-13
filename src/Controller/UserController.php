<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Form\UserType;

class UserController extends AbstractController
{

  /**
   *@Route("/user")
   */
  function  createUserForm(Request $request)
  {
    $user = new User();
    $form = $this->createForm(UserType::class, $user);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $userInfos = $form->getData();  // récup de l'objet qui contient les infos saisies
      $entityManager = $this->getDoctrine()->getManager();  // récup l'entityMager de Doctrine (via AbstractController), c'est l'objet qui traite l'interraction entre entity et bdd
      $entityManager->persist($userInfos); // demande à entityManager de faire persister un objet, c'est une préparation
      $entityManager->flush(); // on confirme la transaction
      return new Response("Formulaire validé");
    }

    return $this->render('form.html.twig', ['user_form' => $form->createView()]);
  }
}

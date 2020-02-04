<?php

namespace App\Controller;

use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
  /**
   * @Route("/contact", name="contact")
   */
  public function index(Request $request, MailerInterface $mailer)
  {
    $contact = new Contact();

    $form = $this->createFormBuilder($contact)
      ->add('name', TextType::class, [
        'label' => 'Nome completo*'
      ])
      ->add('email', TextType::class, [
        'label' => 'E-mail*'
      ])
      ->add('subject', TextType::class, [
        'label' => 'Assunto*'
      ])
      ->add('message', TextareaType::class, [
        'label' => 'Mensagem*'
      ])
      ->add('save', SubmitType::class, [
        'label' => 'Enviar'
      ])
      ->getForm();

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $task = $form->getData();

      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->persist($task);
      $entityManager->flush();

      $email = (new Email())
      ->from($task->getEmail())
      ->to('daniel.aroucha97@gmail.com')
      ->priority(Email::PRIORITY_HIGH)
      ->subject($task->getSubject())
      ->text($task->getMessage());

      $this->addFlash(
        'notice',
        'Sua mensagem foi enviada!'
      );

      return $this->redirectToRoute('contact');
  }

    return $this->render('contact/index.html.twig', [
      'form' => $form->createView()
    ]);
  }
}

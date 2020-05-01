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
use Symfony\Component\Mime\Address;

class ContactController extends AbstractController
{
  /**
   * @Route("/contact", name="contact", options={"sitemap" = {"priority" = 0.7 }})
   */
  public function index(Request $request)
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
      $contact = $form->getData();

      $entityManager = $this->getDoctrine()->getManager();
      $entityManager->persist($contact);
      $entityManager->flush();

      $body = $this->get('twig')->render(
          'contact/email.html.twig',
          [
            'message' => $contact->getMessage(),
            'name' => $contact->getName(),
            'subject' => $contact->getSubject(),
            'emailAddress' => $contact->getEmail()
          ]
      );

      $message = (new \Swift_Message($contact->getSubject()))
          ->setFrom('jessica@casalit.com.br')
          ->setTo('jessica@casalit.com.br')
          ->setBody($body, 'text/html')
      ;

      $transport = (new \Swift_SmtpTransport('smtp.skymail.net.br', 465, 'ssl'))
      ->setUsername('jessica@casalit.com.br')
      ->setPassword('J25m03L91@22')
      ;

      $mailer = new \Swift_Mailer($transport);
      $mailer->send($message);

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

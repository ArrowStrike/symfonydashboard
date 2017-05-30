<?php

namespace DashboardBundle\Controller;

use DashboardBundle\Entity\Message;
use DashboardBundle\Form\Type\MessageFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;


class DashboardController extends Controller
{
    /**
     * @Route("/add", name="addAction")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function addAction(Request $request)
    {
        $message = new Message();
        $form = $this->createForm(MessageFormType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $message->setCreatedAt();

            $em = $this->getDoctrine()->getManager();
            $em->persist($message);
            $em->flush();

            $this->addFlash(
                'notice',
                'Message Added'
            );

            return $this->redirectToRoute('list');
        }


        return $this->render(
            '@Dashboard/Dashboard/message.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * @Route("/list", name="list")
     */
    public function indexAction(){
        $messages = $this->getDoctrine()
            ->getRepository('DashboardBundle:Message')
            ->findAll();

        return $this->render(
            '@Dashboard/Dashboard/index.html.twig',
            [
                'messages' => $messages,
            ]
        );
    }

    /**
     * @Route("/deleteAction/{id}", name="deleteAction")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $todo = $em->getRepository('DashboardBundle:Message')->find($id);

        $em->remove($todo);
        $em->flush();

        $this->addFlash(
            'error',
            'Message Removed'
        );

        return $this->redirectToRoute('list');
    }

}

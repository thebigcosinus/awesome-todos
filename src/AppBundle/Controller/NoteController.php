<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Note;
use AppBundle\Form\Type\NoteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NoteController extends Controller
{

    /**
     * @param Request $request
     * @Route("/note/add", name="add_note")
     * @Method({"GET","POST"})
     */
    public function addAction(Request $request)
    {
        $note = new Note();
        $translator = $this->get('translator');
        $form = $this->createForm(NoteType::class, $note);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $note = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($note);
            $em->flush();
            $this->addFlash('notice', $translator->trans('note.notice.added_success'));
            
            return $this->redirectToRoute('todo_list');
        }
        return $this->render(
            'note/add.html.twig', [
                'form'=> $form->createView()
            ]
        );

    }
}

<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Label;
use AppBundle\Form\Type\LabelType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Label controller.
 *
 * @Route("label")
 */
class LabelController extends Controller
{
    /**
     * Lists all label entities.
     *
     * @Route("/", name="label_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $labels = $em->getRepository('AppBundle:Label')->findAll();

        return $this->render('label/index.html.twig', array(
            'labels' => $labels,
        ));
    }

    /**
     * Creates a new label entity.
     *
     * @Route("/new", name="label_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $label = new Label();
        
        $form = $this->createForm(LabelType::class, $label);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $label->setUpdatedAt(new \DateTime());
            $label->setCreatedAt(new \DateTime());
            $label->setOwner($this->getUser());
            $em->persist($label);
            $em->flush($label);

            return $this->redirectToRoute('label_show', array('id' => $label->getId()));
        }

        return $this->render('label/new.html.twig', array(
            'label' => $label,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a label entity.
     *
     * @Route("/{id}", name="label_show")
     * @Method("GET")
     */
    public function showAction(Label $label)
    {
        $deleteForm = $this->createDeleteForm($label);

        return $this->render('label/show.html.twig', array(
            'label' => $label,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing label entity.
     *
     * @Route("/{id}/edit", name="label_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Label $label)
    {
        $deleteForm = $this->createDeleteForm($label);
        $editForm = $this->createForm(LabelType::class, $label);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $label->setUpdatedAt(new \DateTime());
            $em->flush();

            return $this->redirectToRoute('label_edit', array('id' => $label->getId()));
        }

        return $this->render('label/edit.html.twig', array(
            'label' => $label,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a label entity.
     *
     * @Route("/{id}", name="label_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Label $label)
    {
        $form = $this->createDeleteForm($label);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($label);
            $em->flush($label);
        }

        return $this->redirectToRoute('label_index');
    }

    /**
     * Creates a form to delete a label entity.
     *
     * @param Label $label The label entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Label $label)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('label_delete', array('id' => $label->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

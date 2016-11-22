<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Form\Type\CategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CategoryController
 * @package AppBundle\Controller
 */
class CategoryController extends Controller
{
    /**
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/categories", name="category_list")
     */
    public function listAction()
    {
        $rep = $this->getDoctrine()->getRepository('AppBundle:Category');

        $categories = $rep->findAll();

        return $this->render('category/list.html.twig', array('categories' => $categories));
    }

    /**
     * @Route("/category/create", name="category_create")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createAction(Request $request)
    {
        $translator = $this->translator();
        
        $antispam = $this->container->get('app.antispam');

        $category = new Category();
        
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

         if ($form->isSubmitted() && $form->isValid()) {

             /** @var Category $category */
             $category = $form->getData();
             if ($antispam->isSpam($category->getName())) {
                 $this->addFlash('error',$translator->trans('category.is_spam'));
                 return $this->redirectToRoute('category_list');

             }

             $category->setOwner($this->getUser());

             $em = $this->getDoctrine()->getManager();
             $em->persist($category);
             $em->flush();

             $this->addFlash("notice", $translator->trans('category.notice.added_success'));

             return $this->redirectToRoute('category_list');
         }
        return $this->render('category/create.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @param Category $category
     * @Route("/category/delete/{id}", name="category_delete", requirements={"id"="\d+"})
     * @ParamConverter("categoty", class="AppBundle:Category")
     */
    public function deleteAction(Category $category)
    {
        $translator = $this->translator();
        $em =  $this->getDoctrine()->getEntityManager();
        
        $em->remove($category);

        $em-> flush();

        $this->addFlash('notice', $translator->trans('category.notice.deleted_success'));

        return $this->redirectToRoute('category_list');
    }

    /**
     * @param Category $category
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/category/edit/{id}", name="category_edit", requirements={"id"="\d+"})
     */
    public function editAction(Category $category, Request $request)
    {
        $translator = $this->translator();

        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /** @var Category $category */
            $category = $form->getData();

            $category->setUpdatedAt(new \DateTime());

            $em = $this->getDoctrine()->getEntityManager();

            $em->flush();

            $this->addFlash('notice', $translator->trans('category.notice.updated_success'));

            return $this->redirectToRoute('category_list');
        }
        return $this->render('category/edit.html.twig', array(
            'form' => $form->createView()
        ));
    }
    private function translator()
    {
        return $this->get('translator');
    }
}

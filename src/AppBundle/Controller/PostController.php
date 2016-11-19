<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends Controller
{
    /**
     * @param $id
     * @Route("/posts/{id}", name="post_show")
     */
    public function showAction($id)
    {
        $post ='';

        $this->denyAccessUnlessGranted('view', $post);
    }

    /**
     * @Route("/posts/{id}/edit", name="post_edit")
     */
    public function editAction() {
        $post = "";

        $this->denyAccessUnlessGranted('edit', $post);
    }
}

<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use OC\PlatformBundle\Entity\Category;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{

    public function addAction()
    {

    }

    public function editAction($id)
    {

    }

    public function viewAction($id)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('OCPlatformBundle:Category');

        $category = $repository->find($id);

        if(null === $category)
        {
            throw new NotFoundHtppException("La catégorie " .$id. " n'existe pas." );
        }

        return $this->render('OCPlatformBundle:Category:view.html.twig', array('category' => $category));

    }

    public function deleteAction($id)
    {
    	
    }
}

?>
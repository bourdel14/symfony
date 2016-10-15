<?php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoreController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCCoreBundle:Core:index.html.twig');
    }

    public function contactAction()
    {
    
	    // Bien sûr, cette méthode devra réellement ajouter l'annonce
	    
	    // Mais faisons comme si c'était le cas
	    $this->get('session')->getFlashBag()->add('info','La page de contact n’est pas encore disponible');

	   return $this->redirect($this->generateUrl('oc_core_home'));
    }
}

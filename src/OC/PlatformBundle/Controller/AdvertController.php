<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Form\AdvertType;
use OC\PlatformBundle\Form\AdvertEditType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
    public function indexAction($page)
    {
        if ($page < 1) {
          throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

        $nbPerPage = 3;

        $repository = $this->getDoctrine()->getManager()->getRepository('OCPlatformBundle:Advert');

        $listAdverts = $repository->listAdverts($page, $nbPerPage);

        // On calcule le nombre total de pages grâce au count($listAdverts) qui retourne le nombre total d'annonces
        $nbPages = ceil(count($listAdverts) / $nbPerPage);

        // Si la page n'existe pas, on retourne une 404
        if ($page > $nbPages) {
          throw $this->createNotFoundException("La page ".$page." n'existe pas.");
        }

    	return $this->render('OCPlatformBundle:Advert:index.html.twig', array(
            'listAdverts' => $listAdverts,
            'page'   => $page,
            'nbPages' =>$nbPages));
    }

    public function addAction(Request $request)
    {
        $advert = new Advert();
        $form   = $this->createForm(new AdvertType(), $advert);

        //On vérifie que la requête est de type POST
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($advert);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirect($this->generateUrl('oc_platform_view', array('id' => $advert->getId())));
        }

            //On affiche la vue du formulaire d'ajout
            return $this->render('OCPlatformBundle:Advert:add.html.twig', array(
              'form' => $form->createView()
            ));
    }


    public function editAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);


        if (null === $advert) {
          throw new NotFoundHttpException("L'annonce d'id " .$id. " n'existe pas.");
        }

        $form   = $this->createForm(new AdvertEditType(), $advert);

        //On vérifie que la requête est de type POST
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($advert);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirect($this->generateUrl('oc_platform_view', array('id' => $advert->getId())));
        }

            //On affiche la vue du formulaire d'ajout
            return $this->render('OCPlatformBundle:Advert:edit.html.twig', array(
              'form'    => $form->createView(),
              'advert'  => $advert
            ));

    }

    public function viewAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);

        //$listCategories = $advert->getCategories();

        if (null === $advert) {
          throw new NotFoundHttpException("L'annonce d'id " .$id. " n'existe pas.");
        }

        return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
            'advert'         => $advert,
            'listCategories' => $advert->getCategories()
        ));

    }

    public function deleteAction($id)
    {
    	
    }
}

?>
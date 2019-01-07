<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request) {

        return $this->render('home/about.html.twig');
    }

    /**
     * @Route("/contact/{place}", name="contact")
     */
    public function blogAction(Request $request, $place = 'all') {

        return $this->render('home/contact.html.twig', ['place' => $place]);
    }
}

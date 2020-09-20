<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Mapping as ORM;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     * @Template("AppBundle:home:index.html.twig")
     */
    public function indexAction() {
        return array();
    }



 }

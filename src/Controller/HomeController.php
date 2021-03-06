<?php

namespace Xippogmbh\XippoErpCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('@xippo-erp-core/home/index.html.twig', [
            'controller_name' => 'Natascha',
        ]);
    }
}

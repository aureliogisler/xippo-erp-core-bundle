<?php

namespace Xippogmbh\XippoErpCoreBundle\Services;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;

class HelloWorldService
{
    /**
     * @param RequestStack $requestStack
     */
    public function __construct(RequestStack $requestStack)
    {
        $this->request = $requestStack->getMasterRequest();
    }

    /**
     * @return Response
     */
    public function sayWhat()
    {
        if ($this->request->query->has('who')) {
            return new Response('Hello ' . $this->request->query->get('who'));
        }

        return new Response('Hello world');
    }
}
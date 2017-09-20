<?php

namespace Bolt\Extension\PandaMadness\Payment\Controllers;


use Bolt\Controller\Base;
use Silex\ControllerCollection;
use Symfony\Component\HttpFoundation\Request;

class PaymentController extends Base
{

    /**
     * PaymentController constructor.
     */
    public function __construct()
    {
    }

    protected function addRoutes(ControllerCollection $c)
    {
        $c->match('/success', [$this, 'success'])->method('GET');
        $c->match('/success/post', [$this, 'successPost'])->method('POST');
        $c->match('/fail', [$this, 'fail'])->method('GET');
        $c->match('/fail/post', [$this, 'failPost'])->method('POST');
    }

    public function success()
    {
        return $this->render('');
    }

    public function successPost(Request $request)
    {

    }

    public function fail()
    {
        return $this->render('');
    }

    public function failPost(Request $request)
    {

    }
}
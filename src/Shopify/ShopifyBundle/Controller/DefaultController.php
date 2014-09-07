<?php

namespace Shopify\ShopifyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ShopifyShopifyBundle:Default:install_form.html.twig');
   
    }
 #----------------------------------------------------------------------------
    public function createAction(){
        
        return new response("test");
    }
}

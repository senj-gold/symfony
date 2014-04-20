<?php

namespace ITDoors\OperBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class CrudController
{
     public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
     public function creadAction()
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
     public function readAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
     public function updateAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
     public function deleteAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}

<?php

namespace ITDoors\OperBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class CrudController
{
     public function indexAction($name)
    {
          return $this->render(
        'OperBundl:Crud:index.twig.'.$_format,
        array('name' => $name)
    );
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
     public function creadAction()
    {
        return new Response('<html><body>Создаем '.'!</body></html>');
    }
     public function readAction()
    {
        return new Response('<html><body>Получаем запси !</body></html>');
    }
     public function updateAction($id)
    {
        return new Response('<html><body>Обновить запись '.(int)$id.'!</body></html>');
    }
     public function deleteAction($id)
    {
        return new Response('<html><body>Удалить запись '.(int)$id.'!</body></html>');
    }
}

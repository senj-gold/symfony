<?php

namespace ITDoors\OperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ITDoors\OperBundle\Entity\Department;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Response;

class CrudController  extends Controller
{
     public function indexAction($name)
    {
        
    
//          return $this->render(
//        'OperBundl:Crud:index.twig.'.$_format,
//        array('name' => $name)
//    );
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
     public function creadAction()
    {
         if(isset($_POST['cread'])){
    $product = new Department();
    $product->setName('Лайф');
    $product->setContact('Возле офиса лайф ))');

    $em = $this->getDoctrine()->getEntityManager();
    $em->persist($product);
    $em->flush();
    return new Response('Created product name '.$product->getName());
         }

    
    }
     public function readAction()
    {
         $em = $this->get('doctrine')->getEntityManager();
        $posts = $em->getRepository('ITDoorsOperBundle:Department')->findAll();
        var_dump($posts);
        
        return new Response('<html><body>Получаем записи!</body></html>');
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

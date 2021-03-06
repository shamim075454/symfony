<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HelloController
{
	/**
     * @Route("/hello/{name}", name="hello")
     */
    public function indexAction($name)
    {
        //return new Response('<html><body>Hello '.$name.'!</body></html>');

        $data = array(
            'name' => $name,
        );
        //JSON
         return new Response(
            json_encode($data),
            200,
            array('Content-Type' => 'application/json')
        );
    }
}
?>
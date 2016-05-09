namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController
{
	/**
     * @Route("/hello/{name}", name="hello")
     */
    public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
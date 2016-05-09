Symfony Standard Edition
========================

<b>Installation : </b> <br>
1.install composer <br>
2. create project command<br>
composer create-project symfony/framework-standard-edition symfony "3.0.*" <br>

<b>How to run: </b> <br>
1.goto bin directory <br>
2.php console server:run

<b>HelloWorld</b> <br>
1.Create a controller HelloController.php of APPBundle directory (see the file)
<b>Routing</b> <br>
Three way <br>
1.Anotated way (prefered way)<br>
/**<br>
 * @Route("/hello/{name}", name="hello")<br>
 */<br>
2.configure way(app/confiq/routing.yaml)<br>
3.Programatic way(PHP)<br>
browse http://localhost:8000/hello/shamim <br>
<b>JSON Response</b> <br>

$data = array(  <br>
            'name' => $name, <br>
        );<br>
//JSON<br>
 return new Response(<br>
    json_encode($data),<br>
    200,<br>
    array('Content-Type' => 'application/json')<br>
 or<br>
 return new JsonResponse($data); <br>  
);<br>


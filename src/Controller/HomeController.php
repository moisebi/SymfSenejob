<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

/**
 * @Route("/", name="homepage")
 * 
 */
public function home(){


    $name = 'willice';
    $txt = 'Lorem ipsum dolor sit amet.'; 
    return $this->render(
        'home.html.twig',
        [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'name' => $name,
        'txt' => $txt,
        ]
    
    );
}
}






?>
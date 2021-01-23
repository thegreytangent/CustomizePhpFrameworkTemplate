<?php
namespace app\Controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController  extends Controller
{



    public function home() {
        $params = [
            'name' => 'WorkCodeHolic'
        ];

        return $this->render('home', $params);


    }

    public function handleContact(Request $request) {

        $body = $request->getBody();

        var_dump($body);
        
        return "Handling contact";
    }

    public function contact(Request $request) {
        $body = $request->getBody();

        var_dump($body);
        return $this->render('contact');
    }

}
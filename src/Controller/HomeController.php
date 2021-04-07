<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

class HomeController extends AbstractController
{
    public function showProducts()
    {
        $products = ['Guitar', 'Bass', 'Drum', 'Keyboard', 'Pedals'];
        return $this->twig->render('products.html.twig',[
            'products' => $products
        ]);

    }


    public function index()
    {
        return $this->twig->render('Home/index.html.twig');
    }
}

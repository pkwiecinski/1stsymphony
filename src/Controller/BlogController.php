<?php
// src/Controller/blogController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class BlogController extends AbstractController
{
    public function list()
    { 
        $list = [
            ["slug" => "jkluj", "costam" => "tamcos", "abc"=>"xyz"],
            ["slug" => "jkluj1", "costam" => "tamcos1", "abc"=>"xyz1"],
            ["slug" => "jkluj2", "costam" => "tamcos2", "abc"=>"xyz2"],
        ];

        return $this->render('blog/list.html.twig', [
            'list' => $list,
            ]
        );
    }
}

?>
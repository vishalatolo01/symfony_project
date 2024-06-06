<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ViewController extends AbstractController
{
    #[Route('/view', name: 'app_view')]
    public function index(): Response
    {
        // return $this->render('view/index.html.twig', [
        //     'controller_name' => 'ViewController',
        // ]);
        $tag = date("l");
        $user = [
            'name'=> 'udamy',
            'course'=>'Backend development',
            'alter'=> '99'
        ];
        $arr = array('french', 'English', 'Spanish', 'Russian');
        return $this ->render('view/index.html.twig', [
            'd' => $tag,
            'user'=>$user,
            'arr'=>$arr,
        ]);
    }
    public function getView():Response{
        $tag = date("l");
        $user = [
            'name'=> 'udamy',
            'course'=>'Backend development',
            'alter'=> '99'
        ];
        $arr = array('french', 'English', 'Spanish', 'Russian');
        return $this ->render('view/index.html.twig', [
            'd' => $tag,
            'user'=>$user,
            'arr'=>$arr,
        ]);
    }
}

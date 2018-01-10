<?php
/**
 * Created by PhpStorm.
 * User: MY
 * Date: 10.01.2018
 * Time: 22:32
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class LuckyController extends Controller
{
    /**
     * @Route("/lucky")
     *
     * @return Response
     */
    public function number()
    {
        $number = mt_rand(1, 100);
        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }
}
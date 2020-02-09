<?php

namespace App\Controller;

use App\Entity\Dernek;
use App\Entity\Setting;
use App\Repository\DernekRepository;
use App\Repository\ImageRepository;
use App\Repository\SettingRepository;
use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(SettingRepository $settingRepository,DernekRepository $dernekRepository)
    {
        $setting=$settingRepository->findBy(['id'=>1]);
        $slider=$dernekRepository->findAll();
        $derneks=$dernekRepository->findBy([],['title'=>'DESC'], 4);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'setting'=>$setting,
            'slider'=>$slider,
            'derneks'=>$derneks,
        ]);
    }


    /**
     * @Route("dernek/{id}", name="dernek_show", methods={"GET"})
     */
    public function show(Dernek $dernek,$id,ImageRepository $imageRepository,DernekRepository $dernekRepository): \Symfony\Component\HttpFoundation\Response
    {
        $slider=$dernekRepository->findAll();
        $images=$imageRepository->findBy(['dernek'=> $id]);
        return $this->render('home/dernekshow.html.twig', [
            'dernek' => $dernek,
            'slider'=>$slider,
            'images' => $images,
        ]);
    }

    /**
     * @Route("/about", name="home_about")
     */
    public function  about(SettingRepository $settingRepository): \Symfony\Component\HttpFoundation\Response
    {
        $setting=$settingRepository->findAll();
        return $this->render('home/aboutus.html.twig',[
            'setting'=>$setting,
        ]);
    }
    private  function  generateUniqueFileName() {
        return md5(uniqid());
    }

}

<?php

namespace App\Controller;

use App\Entity\Dernek;
use App\Form\Dernek1Type;
use App\Form\Dernek1TypeType;
use App\Repository\DernekRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/user/dernek")
 */
class DernekController extends AbstractController
{
    /**
     * @Route("/", name="user_dernek_index", methods={"GET"})
     */
    public function index(DernekRepository $dernekRepository): Response
    {
        $user=$this->getUser();
        return $this->render('dernek/index.html.twig', [

            'derneks' => $dernekRepository->findBy(['userid'=> $user->getId()])
        ]);
    }

    /**
     * @Route("/new", name="user_dernek_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $dernek = new Dernek();
        $form = $this->createForm(Dernek1Type::class, $dernek);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file=$form['image']->getData();
            if($file){
                $fileName=$this->generateUniqueFileName() . '.'. $file->guessExtension();
                try {
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                } catch (FileException $e){

                }
                $dernek->setImage($fileName);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $dernek->setStatus("New");
            $user=$this->getUser();
            $dernek->setUserid($user->getId());
            $entityManager->persist($dernek);
            $entityManager->flush();

            return $this->redirectToRoute('user_dernek_index');
        }

        return $this->render('dernek/new.html.twig', [
            'dernek' => $dernek,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_dernek_show", methods={"GET"})
     */
    public function show(Dernek $dernek): Response
    {
        return $this->render('dernek/show.html.twig', [
            'dernek' => $dernek,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_dernek_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Dernek $dernek): Response
    {
        $form = $this->createForm(Dernek1Type::class, $dernek);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file=$form['image']->getData();
            if($file){
                $fileName=$this->generateUniqueFileName() . '.'. $file->guessExtension();
                try {
                    $file->move(
                        $this->getParameter('images_directory'),
                        $fileName
                    );
                } catch (FileException $e){

                }
                $dernek->setImage($fileName);
            }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_dernek_index');
        }

        return $this->render('dernek/edit.html.twig', [
            'dernek' => $dernek,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_dernek_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Dernek $dernek): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dernek->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($dernek);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_dernek_index');
    }
    private  function  generateUniqueFileName() {
        return md5(uniqid());
    }
}

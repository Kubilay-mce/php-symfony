<?php

namespace App\Controller\Admin;

use App\Entity\Dernek;
use App\Form\DernekType;
use App\Repository\DernekRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("admin/dernek")
 */
class DernekController extends AbstractController
{
    /**
     * @Route("/", name="admin_dernek_index", methods={"GET"})
     */
    public function index(DernekRepository $dernekRepository): Response
    {
        return $this->render('admin/dernek/index.html.twig', [
            'derneks' => $dernekRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_dernek_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $dernek = new Dernek();
        $form = $this->createForm(DernekType::class, $dernek);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();


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


            $entityManager->persist($dernek);
            $entityManager->flush();

            return $this->redirectToRoute('admin_dernek_index');
        }

        return $this->render('admin/dernek/new.html.twig', [
            'dernek' => $dernek,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_dernek_show", methods={"GET"})
     */
    public function show(Dernek $dernek): Response
    {
        return $this->render('admin/dernek/show.html.twig', [
            'dernek' => $dernek,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_dernek_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Dernek $dernek): Response
    {
        $form = $this->createForm(DernekType::class, $dernek);
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

            return $this->redirectToRoute('admin_dernek_index');
        }

        return $this->render('admin/dernek/edit.html.twig', [
            'dernek' => $dernek,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_dernek_delete", methods={"DELETE"})
     */



    public function delete(Request $request, Dernek $dernek): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dernek->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($dernek);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_dernek_index');
    }
    private  function  generateUniqueFileName() {
        return md5(uniqid());
    }
}

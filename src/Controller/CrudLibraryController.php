<?php

namespace App\Controller;

use App\Entity\Library;
use App\Entity\Author;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\LibraryRepository;
use App\Repository\AuthorRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Form\LibraryType;

#[Route('/crud/library')]
class CrudLibraryController extends AbstractController
{
    // Show all 
    #[Route('/list', name: 'app_crud_library_list')]
    public function list(LibraryRepository $repository): Response
    {
        $list = $repository->findAll();
        return $this->render('crud_library/list.html.twig', ['list' => $list]);
    }

    // Show one 
    #[Route('/search/{name}', name: 'app_crud_library_view')]
    public function SearchByName(LibraryRepository $repository, Request $request): Response
    {
        
    $name = $request->get('name');

        $list = $repository->findByName($name);

        return $this->render('crud_author/list.html.twig',['list'=>$list]);
    }

    // Add
    #[Route('/new', name: 'app_crud_library_new')]
    public function newLibrary(ManagerRegistry $doctrine,Request $request): Response
    {   
        $library = new Library();
        $form = $this->createForm(LibraryType::class, $library);

        // Handle the request
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($library);
            $em->flush();

            return $this->redirectToRoute('app_crud_library_list');
        }

        // Render the form
        return $this->render('crud_library/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }



    // Delete   
    #[Route('/delete/{id}', name: 'app_crud_library_delete')]
    public function deleteLibrary(Library $library, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $em->remove($library);
        $em->flush();

        return $this->redirectToRoute('app_crud_library_list');
    }

    // Update 
    #[Route('/update/{id}', name: 'app_crud_library_update')]
    public function updateLibrary(Library $library, Request $request, ManagerRegistry $doctrine): Response
    {
        $form = $this->createForm(LibraryType::class, $library);

        // Handle the request
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->flush();

            return $this->redirectToRoute('app_crud_library_list');
        }

        // Render the form
        return $this->render('crud_library/edit.html.twig', [
            'form' => $form->createView(),
            'library' => $library, // Pass the library to the template
        ]);
    }
}

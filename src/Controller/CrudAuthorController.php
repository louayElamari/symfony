<?php

namespace App\Controller;
use App\Entity\Author ;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\AuthorRepository;
use App\Repository\LibraryRepository;
use Doctrine\Persistence\ManagerRegistry ;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Library; 
use App\Form\AuthorType;



#[Route('/crud/author')]
class CrudAuthorController extends AbstractController
{   
    //show all
    #[Route('/list', name: 'app_crud_author')]
    public function list( AuthorRepository $repository): Response
    {
        $list= $repository->findall();
        return $this->render('crud_author/list.html.twig',['list'=>$list]);
    }

    //show one
    #[Route('/search/{name}', name: 'app_crud_author_search')]
    public function SearchByName(AuthorRepository $repository, Request $request) :Response  
    {
        $name=$request->get('name');
        $list= $repository->findByName($name);
        return $this->render('crud_author/list.html.twig',['list'=>$list]);

    }
 
    //add one
    #[Route('/new', name: 'app_crud_author_new')]
    public function newAuthor(ManagerRegistry $doctrine,Request $request) :Response
    {
        $author = new Author();
        $form = $this->createForm(AuthorType::class, $author);
    
        // Handle the request
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($author);
            $em->flush();
    
            return $this->redirectToRoute('app_crud_author');
        }
    
        // Render the form
        return $this->render('crud_author/new.html.twig', [
            'form' => $form->createView(),
        ]);


    }
    //delete        
    #[Route('/delete/{id}', name: 'app_crud_author_delete')]
    public function deleteAuthor(Author $author, ManagerRegistry $doctrine) :Response
    {
        
      
            $em=$doctrine->getManager();
            $em->remove($author);
            $em->flush();
        
        return $this->redirectToRoute('app_crud_author');
    }


    //update
    #[Route('/update/{id}', name: 'app_crud_author_update')]
    public function UpdateAuthor(Author $author, Request $request, ManagerRegistry $doctrine) :Response
    {
        $form = $this->createForm(AuthorType::class, $author);

        // Handle the request
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->flush();
    
            return $this->redirectToRoute('app_crud_author');
        }
    
        // Render the form
        return $this->render('crud_author/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/search-by-library', name: 'app_crud_author_search_by_library')]
    public function searchByLibrary(Request $request, LibraryRepository $libraryRepository, AuthorRepository $authorRepository): Response
    {
        $libraryName = $request->query->get('library', '');

        // Find authors by the associated library if the library name is provided
        $authors = [];
        if (!empty($libraryName)) {
            $library = $libraryRepository->findOneBy(['name' => $libraryName]);
            if ($library) {
                $authors = $authorRepository->findBy(['library' => $library]);
            }
        }

        // Render the authors' list
        return $this->render('crud_author/search_by_library.html.twig', [
            'authors' => $authors,
            'libraryName' => $libraryName,
        ]);
    }
    
    

}

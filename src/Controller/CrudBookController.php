<?php

namespace App\Controller;

use App\Entity\Book;
use App\Entity\Author;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\BookRepository;
use App\Repository\AuthorRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Form\BookType;

#[Route('/crud/book')]
class CrudBookController extends AbstractController
{
    // Show all books
    #[Route('/list', name: 'app_crud_book_list')]
    public function list(BookRepository $repository): Response
    {
        $list = $repository->findAll();
        return $this->render('crud_book/list.html.twig', ['list' => $list]);
    }

    // Show one book by title
    #[Route('/search/{title}', name: 'app_crud_book_search')]
    public function searchByTitle(BookRepository $repository, Request $request): Response
    {
        $title = $request->get('title');
        $list = $repository->findBy(['title' => $title]);
        return $this->render('crud_book/list.html.twig', ['list' => $list]);
    }

    // Add a new book
    #[Route('/new', name: 'app_crud_book_new')]
    public function newBook(ManagerRegistry $doctrine, Request $request, AuthorRepository $authorRepository): Response
    {
        $book = new Book();
        $form = $this->createForm(BookType::class, $book);

        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->persist($book);
            $em->flush();

            return $this->redirectToRoute('app_crud_book_list');
        }

        
        return $this->render('crud_book/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Delete a book
    #[Route('/delete/{id}', name: 'app_crud_book_delete')]
    public function deleteBook(Book $book, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $em->remove($book);
        $em->flush();

        return $this->redirectToRoute('app_crud_book_list');
    }

    // Update a book
    #[Route('/update/{id}', name: 'app_crud_book_update')]
    public function updateBook(Book $book, Request $request, ManagerRegistry $doctrine): Response
    {
        $form = $this->createForm(BookType::class, $book);

        // Handle the request
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();
            $em->flush();

            return $this->redirectToRoute('app_crud_book_list');
        }

        // Render the form
        return $this->render('crud_book/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

<?php

namespace App\Controller;

use App\Entity\Obavijesti;
use App\Form\ObavijestiType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/obavijesti')]
class ObavijestiController extends AbstractController
{
    #[Route('/', name: 'obavijesti_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager,Paginator $paginator): Response
    {
        $obavijestis = $entityManager
            ->getRepository(Obavijesti::class)
            ->findBy( array(), array('id' => 'DESC'));


        $paginator->paginate($obavijestis, $request->query->getInt('page', 1));
        return $this->render('obavijesti/index.html.twig', [
            'obavijestis' => $obavijestis,
            'paginator' => $paginator,
        ]);
    }

    #[Route('/new', name: 'obavijesti_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $obavijesti = new Obavijesti();
        $form = $this->createForm(ObavijestiType::class, $obavijesti);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($obavijesti);
            $entityManager->flush();

            return $this->redirectToRoute('obavijesti_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('obavijesti/new.html.twig', [
            'obavijesti' => $obavijesti,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'obavijesti_show', methods: ['GET'])]
    public function show(Obavijesti $obavijesti): Response
    {
        return $this->render('obavijesti/show.html.twig', [
            'obavijesti' => $obavijesti,
        ]);
    }

    #[Route('/{id}/edit', name: 'obavijesti_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Obavijesti $obavijesti, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ObavijestiType::class, $obavijesti);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('obavijesti_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('obavijesti/edit.html.twig', [
            'obavijesti' => $obavijesti,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'obavijesti_delete', methods: ['POST'])]
    public function delete(Request $request, Obavijesti $obavijesti, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$obavijesti->getId(), $request->request->get('_token'))) {
            $entityManager->remove($obavijesti);
            $entityManager->flush();
        }

        return $this->redirectToRoute('obavijesti_index', [], Response::HTTP_SEE_OTHER);
    }
}

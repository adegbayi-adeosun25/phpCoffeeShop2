<?php

namespace App\Controller;

use App\Entity\Shops;
use App\Form\ShopsType;
use App\Repository\ShopsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/shops")
 */
class ShopsController extends AbstractController
{
    /**
     * @Route("/", name="shops_index", methods={"GET"})
     */
    public function index(ShopsRepository $shopsRepository): Response
    {
        return $this->render('shops/index.html.twig', [
            'shops' => $shopsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="shops_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $shop = new Shops();
        $form = $this->createForm(ShopsType::class, $shop);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($shop);
            $entityManager->flush();

            return $this->redirectToRoute('shops_index');
        }

        return $this->render('shops/new.html.twig', [
            'shop' => $shop,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="shops_show", methods={"GET"})
     */
    public function show(Shops $shop): Response
    {
        return $this->render('shops/show.html.twig', [
            'shop' => $shop,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="shops_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Shops $shop): Response
    {
        $form = $this->createForm(ShopsType::class, $shop);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('shops_index', [
                'id' => $shop->getId(),
            ]);
        }

        return $this->render('shops/edit.html.twig', [
            'shop' => $shop,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="shops_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Shops $shop): Response
    {
        if ($this->isCsrfTokenValid('delete'.$shop->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($shop);
            $entityManager->flush();
        }

        return $this->redirectToRoute('shops_index');
    }
}

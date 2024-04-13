<?php

namespace App\Controller;

use App\Entity\PsShop;
use App\Form\PsShopType;
use App\Repository\PsShopRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse; // Importa la clase JsonResponse


#[Route('/ps/shop')]
class PsShopController extends AbstractController
{
    // #[Route('/', name: 'app_ps_shop_index', methods: ['GET'])]
    // public function index(PsShopRepository $psShopRepository): Response
    // {
    //     return $this->render('ps_shop/index.html.twig', [
    //         'ps_shops' => $psShopRepository->findAll(),
    //     ]);
    // }

    #[Route('/', name: 'app_ps_shop_index', methods: ['GET'])]
    public function index(PsShopRepository $psShopRepository): JsonResponse
    {
        $psShops = $psShopRepository->findAll();

        // Serializar los datos de las entidades a formato JSON
        $data = [];
        foreach ($psShops as $psShop) {
            $data[] = [
                'id' => $psShop->getIdShop(), // Reemplaza 'id' con el nombre de la propiedad que corresponde al id
                'name' => $psShop->getName(), // Reemplaza 'name' con el nombre de la propiedad que corresponde al nombre
                // Añade aquí todas las propiedades que desees incluir en el JSON
            ];
        }
        // Crear y devolver una respuesta JSON
        return new JsonResponse($data);
    }

    // #[Route('/new', name: 'app_ps_shop_new', methods: ['GET', 'POST'])]
    // public function new(Request $request, EntityManagerInterface $entityManager): Response
    // {
    //     $psShop = new PsShop();
    //     $form = $this->createForm(PsShopType::class, $psShop);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $entityManager->persist($psShop);
    //         $entityManager->flush();

    //         return $this->redirectToRoute('app_ps_shop_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->render('ps_shop/new.html.twig', [
    //         'ps_shop' => $psShop,
    //         'form' => $form,
    //     ]);
    // }

    #[Route('/new', name: 'app_ps_shop_new', methods: ['POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        // Decodificar los datos JSON recibidos en la solicitud
        $data = json_decode($request->getContent(), true);

        // Crear una nueva instancia de la entidad PsShop y asignar los datos recibidos
        $psShop = new PsShop();
        $psShop->setIdShopGroup($data['id_shop_group']);
        $psShop->setName($data['name']);
        $psShop->setIdCategory($data['id_category']);
        $psShop->setThemeName($data['theme_name']);
        $psShop->setActive($data['active']);
        $psShop->setDeleted($data['deleted']);

        // Persistir la nueva tienda en la base de datos
        $entityManager->persist($psShop);
        $entityManager->flush();

        // Devolver una respuesta JSON con los datos de la nueva tienda y el código de estado 201 (CREATED)
        return new JsonResponse(['message' => 'Tienda creada correctamente', 'data' => $data], JsonResponse::HTTP_CREATED);
    }


    // #[Route('/{idShop}', name: 'app_ps_shop_show', methods: ['GET'])]
    // public function show(PsShop $psShop): Response
    // {
    //     return $this->render('ps_shop/show.html.twig', [
    //         'ps_shop' => $psShop,
    //     ]);
    // }

    #[Route('/{idShop}', name: 'app_ps_shop_show', methods: ['GET'])]
    public function show(?PsShop $psShop): JsonResponse
    {
        if (!$psShop) {
            // Si no se encuentra la tienda, devolver un mensaje de error
            return new JsonResponse(['message' => 'Tienda no encontrada'], Response::HTTP_NOT_FOUND);
        }

        // Serializar los datos de la tienda a formato JSON
        $data = [
            'id' => $psShop->getIdShop(), // Reemplaza 'id' con el nombre de la propiedad que corresponde al id
            'name' => $psShop->getName(), // Reemplaza 'name' con el nombre de la propiedad que corresponde al nombre
            // Añade aquí todas las propiedades que deseas incluir en el JSON
        ];

        // Devolver una respuesta JSON con los datos de la tienda
        return new JsonResponse($data);
    }

    // #[Route('/{idShop}/edit', name: 'app_ps_shop_edit', methods: ['GET', 'POST'])]
    // public function edit(Request $request, PsShop $psShop, EntityManagerInterface $entityManager): Response
    // {
    //     $form = $this->createForm(PsShopType::class, $psShop);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $entityManager->flush();

    //         return $this->redirectToRoute('app_ps_shop_index', [], Response::HTTP_SEE_OTHER);
    //     }

    //     return $this->render('ps_shop/edit.html.twig', [
    //         'ps_shop' => $psShop,
    //         'form' => $form,
    //     ]);
    // }

    #[Route('/{idShop}/edit', name: 'app_ps_shop_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PsShop $psShop, EntityManagerInterface $entityManager): JsonResponse
    {
        // Crear el formulario y manejar la solicitud
        $form = $this->createForm(PsShopType::class, $psShop);
        $form->handleRequest($request);

        // Verificar si el formulario ha sido enviado y es válido
        if ($form->isSubmitted() && $form->isValid()) {
            // Persistir los cambios en la base de datos
            $entityManager->flush();

            // Devolver una respuesta JSON de éxito
            return new JsonResponse(['message' => 'Tienda actualizada correctamente'], JsonResponse::HTTP_OK);
        }

        // Si la solicitud no es válida, devolver una respuesta JSON con errores
        return new JsonResponse(['errors' => (string) $form->getErrors(true)], JsonResponse::HTTP_BAD_REQUEST);
    }

    // #[Route('/{idShop}', name: 'app_ps_shop_delete', methods: ['POST'])]
    // public function delete(Request $request, PsShop $psShop, EntityManagerInterface $entityManager): Response
    // {
    //     if ($this->isCsrfTokenValid('delete' . $psShop->getIdShop(), $request->getPayload()->get('_token'))) {
    //         $entityManager->remove($psShop);
    //         $entityManager->flush();
    //     }

    //     return $this->redirectToRoute('app_ps_shop_index', [], Response::HTTP_SEE_OTHER);
    // }

    #[Route('/{idShop}', name: 'app_ps_shop_delete', methods: ['DELETE'])]
    public function delete(PsShop $psShop, EntityManagerInterface $entityManager): JsonResponse
    {
        // Eliminar la tienda de la base de datos
        $entityManager->remove($psShop);
        $entityManager->flush();
    
        // Devolver una respuesta JSON de éxito
        return new JsonResponse(['message' => 'Tienda eliminada correctamente'], JsonResponse::HTTP_OK);
    }
}

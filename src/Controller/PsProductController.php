<?php

namespace App\Controller;

use App\Entity\PsProduct;
use App\Form\PsProductType;
use App\Repository\PsProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse; // Importa la clase JsonResponse


#[Route('/ps/product')]
class PsProductController extends AbstractController
{
    #[Route('/', name: 'app_ps_product_index', methods: ['GET'])]
    public function index(PsProductRepository $psProductRepository): JsonResponse
    {
        // Obtener todos los productos del repositorio
        $products = $psProductRepository->findAll();

        // Mapear los productos a un array asociativo
        $data = $this->mapProductsToResponse($products);

        // Devolver una respuesta JSON con los datos de los productos
        return new JsonResponse($data);
    }

    private function mapProductToResponse(PsProduct $product): array
    {
        return [
            'idProduct' => $product->getIdProduct(),
            'idSupplier' => $product->getIdSupplier(),
            'idManufacturer' => $product->getIdManufacturer(),
            'idCategoryDefault' => $product->getIdCategoryDefault(),
            'idShopDefault' => $product->getIdShopDefault(),
            'idTaxRulesGroup' => $product->getIdTaxRulesGroup(),
            'onSale' => $product->getOnSale(),
            'onlineOnly' => $product->getOnlineOnly(),
            'ean13' => $product->getEan13(),
            'isbn' => $product->getIsbn(),
            'upc' => $product->getUpc(),
            'ecotax' => $product->getEcotax(),
            'quantity' => $product->getQuantity(),
            'minimalQuantity' => $product->getMinimalQuantity(),
            'lowStockThreshold' => $product->getLowStockThreshold(),
            'lowStockAlert' => $product->getLowStockAlert(),
            'price' => $product->getPrice(),
            'wholesalePrice' => $product->getWholesalePrice(),
            'unity' => $product->getUnity(),
            'unitPriceRatio' => $product->getUnitPriceRatio(),
            'additionalShippingCost' => $product->getAdditionalShippingCost(),
            'reference' => $product->getReference(),
            'supplierReference' => $product->getSupplierReference(),
            'location' => $product->getLocation(),
            'width' => $product->getWidth(),
            'height' => $product->getHeight(),
            'depth' => $product->getDepth(),
            'weight' => $product->getWeight(),
            'additionalDeliveryTimes' => $product->getAdditionalDeliveryTimes(),
            'quantityDiscount' => $product->getQuantityDiscount(),
            'customizable' => $product->getCustomizable(),
            'uploadableFiles' => $product->getUploadableFiles(),
            'active' => $product->getActive(),
            'showPrice' => $product->getShowPrice(),
            'indexed' => $product->getIndexed(),
            'cacheIsPack' => $product->getCacheIsPack(),
            'cacheHasAttachments' => $product->getCacheHasAttachments(),
            'isVirtual' => $product->getIsVirtual(),
            'cacheDefaultAttribute' => $product->getCacheDefaultAttribute(),
            'dateAdd' => $product->getDateAdd()->format('Y-m-d H:i:s'),
            'dateUpd' => $product->getDateUpd()->format('Y-m-d H:i:s'),
        ];
    }

    private function mapProductsToResponse(iterable $products): array
    {
        $data = [];

        // Iterar sobre cada producto y agregar sus datos al array
        foreach ($products as $product) {
            $data[] = $this->mapProductToResponse($product);
        }

        return $data;
    }

    #[Route('/{idProduct}', name: 'app_ps_product_show', methods: ['GET'])]
    public function show(PsProduct $psProduct): JsonResponse
    {
        // Mapear el producto a un array asociativo
        $data = $this->mapProductToResponse($psProduct);

        // Devolver una respuesta JSON con los datos del producto
        return new JsonResponse($data);
    }
}

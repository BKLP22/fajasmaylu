<?php

namespace App\Entity;

use App\Repository\PsProductRepository;
use Doctrine\ORM\Mapping as ORM;
use DateTime;


#[ORM\Entity(repositoryClass: PsProductRepository::class)]
class PsProduct
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idProduct = null;

    #[ORM\Column(length: 10)]
    private ?int $idSupplier = null;

    #[ORM\Column(length: 10)]
    private ?int $idManufacturer = null;

    #[ORM\Column(length: 10)]
    private ?int $idCategoryDefault = null;

    #[ORM\Column(length: 10)]
    private ?int $idShopDefault = null;

    #[ORM\Column(length: 11)]
    private ?int $idTaxRulesGroup = null;

    #[ORM\Column]
    private ?bool $onSale = null;

    #[ORM\Column]
    private ?bool $onlineOnly = null;

    #[ORM\Column(length: 13)]
    private ?string $ean13 = null;

    #[ORM\Column(length: 32)]
    private ?string $isbn = null;

    #[ORM\Column(length: 12)]
    private ?string $upc = null;

    #[ORM\Column(length: 17.6)]
    private ?float $ecotax = null;

    #[ORM\Column(length: 10)]
    private ?int $quantity = null;

    #[ORM\Column(length: 10)]
    private ?int $minimalQuantity = null;

    #[ORM\Column(length: 10)]
    private ?int $lowStockThreshold = null;

    #[ORM\Column(length: 10)]
    private ?int $lowStockAlert = null;

    #[ORM\Column(length: 20.6)]
    private ?float $price = null;

    #[ORM\Column(length: 20.6)]
    private ?float $wholesalePrice = null;

    #[ORM\Column(length: 255)]
    private ?string $unity = null;

    #[ORM\Column(length: 20.6)]
    private ?float $unitPriceRatio = null;

    #[ORM\Column(length: 20.6)]
    private ?float $additionalShippingCost = null;

    #[ORM\Column(length: 64)]
    private ?string $reference = null;

    #[ORM\Column(length: 64)]
    private ?string $supplierReference = null;

    #[ORM\Column(length: 64)]
    private ?string $location = null;

    #[ORM\Column(length: 20.6)]
    private ?float $width = null;

    #[ORM\Column(length: 20.6)]
    private ?float $height = null;

    #[ORM\Column(length: 20.6)]
    private ?float $depth = null;

    #[ORM\Column(length: 20.6)]
    private ?float $weight = null;

    #[ORM\Column]
    private ?bool $additionalDeliveryTimes = null;

    #[ORM\Column]
    private ?bool $quantityDiscount = null;

    #[ORM\Column]
    private ?bool $customizable = null;

    #[ORM\Column]
    private ?bool $uploadableFiles = null;

    #[ORM\Column]
    private ?bool $active = null;

    #[ORM\Column]
    private ?bool $showPrice = null;

    #[ORM\Column]
    private ?bool $indexed = null;

    #[ORM\Column]
    private ?bool $cacheIsPack = null;

    #[ORM\Column]
    private ?bool $cacheHasAttachments = null;

    #[ORM\Column]
    private ?bool $isVirtual = null;

    #[ORM\Column(length: 10)]
    private ?int $cacheDefaultAttribute = null;

    #[ORM\Column(type: "datetime")]
    private $dateAdd = null;

    #[ORM\Column(type:"datetime")]
    private $dateUpd = null;

    // ID Product
    public function getIdProduct(): ?int
    {
        return $this->idProduct;
    }

    public function setIdProduct(?int $idProduct): self
    {
        $this->idProduct = $idProduct;
        return $this;
    }

    // ID Supplier
    public function getIdSupplier(): ?int
    {
        return $this->idSupplier;
    }

    public function setIdSupplier(?int $idSupplier): self
    {
        $this->idSupplier = $idSupplier;
        return $this;
    }

    // ID Manufacturer
    public function getIdManufacturer(): ?int
    {
        return $this->idManufacturer;
    }

    public function setIdManufacturer(?int $idManufacturer): self
    {
        $this->idManufacturer = $idManufacturer;
        return $this;
    }

    // ID Category Default
    public function getIdCategoryDefault(): ?int
    {
        return $this->idCategoryDefault;
    }

    public function setIdCategoryDefault(?int $idCategoryDefault): self
    {
        $this->idCategoryDefault = $idCategoryDefault;
        return $this;
    }

    // ID Shop Default
    public function getIdShopDefault(): ?int
    {
        return $this->idShopDefault;
    }

    public function setIdShopDefault(?int $idShopDefault): self
    {
        $this->idShopDefault = $idShopDefault;
        return $this;
    }

    // ID Tax Rules Group
    public function getIdTaxRulesGroup(): ?int
    {
        return $this->idTaxRulesGroup;
    }

    public function setIdTaxRulesGroup(?int $idTaxRulesGroup): self
    {
        $this->idTaxRulesGroup = $idTaxRulesGroup;
        return $this;
    }

    // On Sale
    public function getOnSale(): ?bool
    {
        return $this->onSale;
    }

    public function setOnSale(?bool $onSale): self
    {
        $this->onSale = $onSale;
        return $this;
    }

    // Online Only
    public function getOnlineOnly(): ?bool
    {
        return $this->onlineOnly;
    }

    public function setOnlineOnly(?bool $onlineOnly): self
    {
        $this->onlineOnly = $onlineOnly;
        return $this;
    }

    // EAN13
    public function getEan13(): ?string
    {
        return $this->ean13;
    }

    public function setEan13(?string $ean13): self
    {
        $this->ean13 = $ean13;
        return $this;
    }

    // ISBN
    public function getIsbn(): ?string
    {
        return $this->isbn;
    }

    public function setIsbn(?string $isbn): self
    {
        $this->isbn = $isbn;
        return $this;
    }

    // UPC
    public function getUpc(): ?string
    {
        return $this->upc;
    }

    public function setUpc(?string $upc): self
    {
        $this->upc = $upc;
        return $this;
    }

    // Ecotax
    public function getEcotax(): ?float
    {
        return $this->ecotax;
    }

    public function setEcotax(?float $ecotax): self
    {
        $this->ecotax = $ecotax;
        return $this;
    }

    // Quantity
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    // Minimal Quantity
    public function getMinimalQuantity(): ?int
    {
        return $this->minimalQuantity;
    }

    public function setMinimalQuantity(?int $minimalQuantity): self
    {
        $this->minimalQuantity = $minimalQuantity;
        return $this;
    }

    // Low Stock Threshold
    public function getLowStockThreshold(): ?int
    {
        return $this->lowStockThreshold;
    }

    public function setLowStockThreshold(?int $lowStockThreshold): self
    {
        $this->lowStockThreshold = $lowStockThreshold;
        return $this;
    }

    // Low Stock Alert
    public function getLowStockAlert(): ?int
    {
        return $this->lowStockAlert;
    }

    public function setLowStockAlert(?int $lowStockAlert): self
    {
        $this->lowStockAlert = $lowStockAlert;
        return $this;
    }

    // Price
    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }

    // Wholesale Price
    public function getWholesalePrice(): ?float
    {
        return $this->wholesalePrice;
    }

    public function setWholesalePrice(?float $wholesalePrice): self
    {
        $this->wholesalePrice = $wholesalePrice;
        return $this;
    }

    // Unity
    public function getUnity(): ?string
    {
        return $this->unity;
    }

    public function setUnity(?string $unity): self
    {
        $this->unity = $unity;
        return $this;
    }

    // Unit Price Ratio
    public function getUnitPriceRatio(): ?float
    {
        return $this->unitPriceRatio;
    }

    public function setUnitPriceRatio(?float $unitPriceRatio): self
    {
        $this->unitPriceRatio = $unitPriceRatio;
        return $this;
    }

    // Additional Shipping Cost
    public function getAdditionalShippingCost(): ?float
    {
        return $this->additionalShippingCost;
    }

    public function setAdditionalShippingCost(?float $additionalShippingCost): self
    {
        $this->additionalShippingCost = $additionalShippingCost;
        return $this;
    }

    // Reference
    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;
        return $this;
    }

    // Supplier Reference
    public function getSupplierReference(): ?string
    {
        return $this->supplierReference;
    }

    public function setSupplierReference(?string $supplierReference): self
    {
        $this->supplierReference = $supplierReference;
        return $this;
    }

    // Location
    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    // Width
    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(?float $width): self
    {
        $this->width = $width;
        return $this;
    }

    // Height
    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): self
    {
        $this->height = $height;
        return $this;
    }

    // Depth
    public function getDepth(): ?float
    {
        return $this->depth;
    }

    public function setDepth(?float $depth): self
    {
        $this->depth = $depth;
        return $this;
    }

    // Weight
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;
        return $this;
    }

    // Additional Delivery Times
    public function getAdditionalDeliveryTimes(): ?bool
    {
        return $this->additionalDeliveryTimes;
    }

    public function setAdditionalDeliveryTimes(?bool $additionalDeliveryTimes): self
    {
        $this->additionalDeliveryTimes = $additionalDeliveryTimes;
        return $this;
    }

    // Quantity Discount
    public function getQuantityDiscount(): ?bool
    {
        return $this->quantityDiscount;
    }

    public function setQuantityDiscount(?bool $quantityDiscount): self
    {
        $this->quantityDiscount = $quantityDiscount;
        return $this;
    }

    // Customizable
    public function getCustomizable(): ?bool
    {
        return $this->customizable;
    }

    public function setCustomizable(?bool $customizable): self
    {
        $this->customizable = $customizable;
        return $this;
    }

    // Uploadable Files
    public function getUploadableFiles(): ?bool
    {
        return $this->uploadableFiles;
    }

    public function setUploadableFiles(?bool $uploadableFiles): self
    {
        $this->uploadableFiles = $uploadableFiles;
        return $this;
    }

    // Active
    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;
        return $this;
    }

    // Show Price
    public function getShowPrice(): ?bool
    {
        return $this->showPrice;
    }

    public function setShowPrice(?bool $showPrice): self
    {
        $this->showPrice = $showPrice;
        return $this;
    }

    // Indexed
    public function getIndexed(): ?bool
    {
        return $this->indexed;
    }

    public function setIndexed(?bool $indexed): self
    {
        $this->indexed = $indexed;
        return $this;
    }

    // Cache Is Pack
    public function getCacheIsPack(): ?bool
    {
        return $this->cacheIsPack;
    }

    public function setCacheIsPack(?bool $cacheIsPack): self
    {
        $this->cacheIsPack = $cacheIsPack;
        return $this;
    }

    // Cache Has Attachments
    public function getCacheHasAttachments(): ?bool
    {
        return $this->cacheHasAttachments;
    }

    public function setCacheHasAttachments(?bool $cacheHasAttachments): self
    {
        $this->cacheHasAttachments = $cacheHasAttachments;
        return $this;
    }

    // Is Virtual
    public function getIsVirtual(): ?bool
    {
        return $this->isVirtual;
    }

    public function setIsVirtual(?bool $isVirtual): self
    {
        $this->isVirtual = $isVirtual;
        return $this;
    }

    // Cache Default Attribute
    public function getCacheDefaultAttribute(): ?int
    {
        return $this->cacheDefaultAttribute;
    }

    public function setCacheDefaultAttribute(?int $cacheDefaultAttribute): self
    {
        $this->cacheDefaultAttribute = $cacheDefaultAttribute;
        return $this;
    }

    // Date Add
    public function getDateAdd(): ?DateTime
    {
        return $this->dateAdd;
    }

    public function setDateAdd(?DateTime $dateAdd): self
    {
        $this->dateAdd = $dateAdd;
        return $this;
    }

    // Date Upd
    public function getDateUpd(): ?DateTime
    {
        return $this->dateUpd;
    }

    public function setDateUpd(?DateTime $dateUpd): self
    {
        $this->dateUpd = $dateUpd;
        return $this;
    }
}

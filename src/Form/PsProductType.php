<?php

namespace App\Form;

use App\Entity\PsProduct;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PsProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idSupplier')
            ->add('idManufacturer')
            ->add('idCategoryDefault')
            ->add('idShopDefault')
            ->add('idTaxRulesGroup')
            ->add('onSale')
            ->add('onlineOnly')
            ->add('ean13')
            ->add('isbn')
            ->add('upc')
            ->add('ecotax')
            ->add('quantity')
            ->add('minimalQuantity')
            ->add('lowStockThreshold')
            ->add('lowStockAlert')
            ->add('price')
            ->add('wholesalePrice')
            ->add('unity')
            ->add('unitPriceRatio')
            ->add('additionalShippingCost')
            ->add('reference')
            ->add('supplierReference')
            ->add('location')
            ->add('width')
            ->add('height')
            ->add('depth')
            ->add('weight')
            ->add('additionalDeliveryTimes')
            ->add('quantityDiscount')
            ->add('customizable')
            ->add('uploadableFiles')
            ->add('active')
            ->add('showPrice')
            ->add('indexed')
            ->add('cacheIsPack')
            ->add('cacheHasAttachments')
            ->add('isVirtual')
            ->add('cacheDefaultAttribute')
            ->add('dateAdd', null, [
                'widget' => 'single_text',
            ])
            ->add('dateUpd', null, [
                'widget' => 'single_text',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PsProduct::class,
        ]);
    }
}

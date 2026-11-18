<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The product's component information.
 */
class ShopifyProductBundleComponentQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductBundleComponent";

    /**
     * The product that's related as a component.
     */
    public function selectComponentProduct(?ShopifyProductBundleComponentComponentProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("componentProduct");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of products' variants that are components.
     */
    public function selectComponentVariants(?ShopifyProductBundleComponentComponentVariantsArgumentsObject $argsObject = null): ShopifyProductVariantConnectionQueryObject
    {
        $object = new ShopifyProductVariantConnectionQueryObject("componentVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of component variants for the product component.
     */
    public function selectComponentVariantsCount(?ShopifyProductBundleComponentComponentVariantsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("componentVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The options in the parent and the component options they're connected to, along with the chosen option values
     * that appear in the bundle.
     */
    public function selectOptionSelections(?ShopifyProductBundleComponentOptionSelectionsArgumentsObject $argsObject = null): ShopifyProductBundleComponentOptionSelectionQueryObject
    {
        $object = new ShopifyProductBundleComponentOptionSelectionQueryObject("optionSelections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity of the component product set for this bundle line.
     * It will be null if there's a quantityOption present.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The quantity as option of the component product. It will be null if there's a quantity set.
     */
    public function selectQuantityOption(?ShopifyProductBundleComponentQuantityOptionArgumentsObject $argsObject = null): ShopifyProductBundleComponentQuantityOptionQueryObject
    {
        $object = new ShopifyProductBundleComponentQuantityOptionQueryObject("quantityOption");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The product component information.
 */
class ShopifyProductComponentTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductComponentType";

    /**
     * The list of products' variants that are components.
     */
    public function selectComponentVariants(?ShopifyProductComponentTypeComponentVariantsArgumentsObject $argsObject = null): ShopifyProductVariantConnectionQueryObject
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
    public function selectComponentVariantsCount(?ShopifyProductComponentTypeComponentVariantsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("componentVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of products' variants that are not components.
     */
    public function selectNonComponentVariants(?ShopifyProductComponentTypeNonComponentVariantsArgumentsObject $argsObject = null): ShopifyProductVariantConnectionQueryObject
    {
        $object = new ShopifyProductVariantConnectionQueryObject("nonComponentVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of non_components variants for the product component.
     */
    public function selectNonComponentVariantsCount(?ShopifyProductComponentTypeNonComponentVariantsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("nonComponentVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The product that's a component.
     */
    public function selectProduct(?ShopifyProductComponentTypeProductArgumentsObject $argsObject = null): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

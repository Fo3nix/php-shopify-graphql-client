<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductComponentTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductComponentType";

    public function selectComponentVariants(ShopifyProductComponentTypeComponentVariantsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantConnectionQueryObject("componentVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectComponentVariantsCount(ShopifyProductComponentTypeComponentVariantsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("componentVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNonComponentVariants(ShopifyProductComponentTypeNonComponentVariantsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantConnectionQueryObject("nonComponentVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNonComponentVariantsCount(ShopifyProductComponentTypeNonComponentVariantsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("nonComponentVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProduct(ShopifyProductComponentTypeProductArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

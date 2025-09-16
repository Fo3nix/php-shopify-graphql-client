<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductComponentTypeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductComponentType";

    public function selectComponentVariants(ProductComponentTypeComponentVariantsArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantConnectionQueryObject("componentVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectComponentVariantsCount(ProductComponentTypeComponentVariantsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("componentVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNonComponentVariants(ProductComponentTypeNonComponentVariantsArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantConnectionQueryObject("nonComponentVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNonComponentVariantsCount(ProductComponentTypeNonComponentVariantsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("nonComponentVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProduct(ProductComponentTypeProductArgumentsObject $argsObject = null)
    {
        $object = new ProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

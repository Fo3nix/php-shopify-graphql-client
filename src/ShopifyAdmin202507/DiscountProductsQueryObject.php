<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountProductsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountProducts";

    public function selectProductVariants(DiscountProductsProductVariantsArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantConnectionQueryObject("productVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProducts(DiscountProductsProductsArgumentsObject $argsObject = null)
    {
        $object = new ProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

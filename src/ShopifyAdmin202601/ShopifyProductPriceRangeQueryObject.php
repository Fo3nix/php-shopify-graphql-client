<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductPriceRangeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductPriceRange";

    public function selectMaxVariantPrice(ShopifyProductPriceRangeMaxVariantPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("maxVariantPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMinVariantPrice(ShopifyProductPriceRangeMinVariantPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("minVariantPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

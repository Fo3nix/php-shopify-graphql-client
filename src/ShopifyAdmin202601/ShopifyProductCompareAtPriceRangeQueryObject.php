<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductCompareAtPriceRangeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductCompareAtPriceRange";

    public function selectMaxVariantCompareAtPrice(ShopifyProductCompareAtPriceRangeMaxVariantCompareAtPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("maxVariantCompareAtPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMinVariantCompareAtPrice(ShopifyProductCompareAtPriceRangeMinVariantCompareAtPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("minVariantCompareAtPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

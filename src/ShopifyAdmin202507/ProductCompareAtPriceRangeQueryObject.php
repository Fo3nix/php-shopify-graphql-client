<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductCompareAtPriceRangeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductCompareAtPriceRange";

    public function selectMaxVariantCompareAtPrice(ProductCompareAtPriceRangeMaxVariantCompareAtPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("maxVariantCompareAtPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMinVariantCompareAtPrice(ProductCompareAtPriceRangeMinVariantCompareAtPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("minVariantCompareAtPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

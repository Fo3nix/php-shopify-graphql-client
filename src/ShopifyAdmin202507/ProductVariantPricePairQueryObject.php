<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductVariantPricePairQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantPricePair";

    public function selectCompareAtPrice(ProductVariantPricePairCompareAtPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("compareAtPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrice(ProductVariantPricePairPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

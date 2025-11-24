<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductVariantPricePairQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantPricePair";

    public function selectCompareAtPrice(ShopifyProductVariantPricePairCompareAtPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("compareAtPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrice(ShopifyProductVariantPricePairPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

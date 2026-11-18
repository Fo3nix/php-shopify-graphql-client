<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The compare-at price and price of a variant sharing a currency.
 */
class ShopifyProductVariantPricePairQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantPricePair";

    /**
     * The compare-at price of the variant with associated currency.
     */
    public function selectCompareAtPrice(?ShopifyProductVariantPricePairCompareAtPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("compareAtPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price of the variant with associated currency.
     */
    public function selectPrice(?ShopifyProductVariantPricePairPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The compare-at price range of the product.
 */
class ShopifyProductCompareAtPriceRangeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductCompareAtPriceRange";

    /**
     * The highest variant's compare-at price.
     */
    public function selectMaxVariantCompareAtPrice(?ShopifyProductCompareAtPriceRangeMaxVariantCompareAtPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("maxVariantCompareAtPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The lowest variant's compare-at price.
     */
    public function selectMinVariantCompareAtPrice(?ShopifyProductCompareAtPriceRangeMinVariantCompareAtPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("minVariantCompareAtPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

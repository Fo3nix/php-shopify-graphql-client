<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The price range of the product.
 */
class ShopifyProductPriceRangeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductPriceRange";

    /**
     * The highest variant's price.
     */
    public function selectMaxVariantPrice(?ShopifyProductPriceRangeMaxVariantPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("maxVariantPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The lowest variant's price.
     */
    public function selectMinVariantPrice(?ShopifyProductPriceRangeMinVariantPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("minVariantPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

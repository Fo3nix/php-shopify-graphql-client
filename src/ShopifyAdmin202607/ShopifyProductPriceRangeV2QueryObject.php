<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The price range of the product.
 */
class ShopifyProductPriceRangeV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductPriceRangeV2";

    /**
     * The highest variant's price.
     */
    public function selectMaxVariantPrice(?ShopifyProductPriceRangeV2MaxVariantPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
    public function selectMinVariantPrice(?ShopifyProductPriceRangeV2MinVariantPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("minVariantPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

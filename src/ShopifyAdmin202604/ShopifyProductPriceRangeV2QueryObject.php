<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductPriceRangeV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductPriceRangeV2";

    public function selectMaxVariantPrice(ShopifyProductPriceRangeV2MaxVariantPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("maxVariantPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMinVariantPrice(ShopifyProductPriceRangeV2MinVariantPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("minVariantPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

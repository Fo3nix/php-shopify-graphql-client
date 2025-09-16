<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductPriceRangeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductPriceRange";

    public function selectMaxVariantPrice(ProductPriceRangeMaxVariantPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("maxVariantPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMinVariantPrice(ProductPriceRangeMinVariantPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("minVariantPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

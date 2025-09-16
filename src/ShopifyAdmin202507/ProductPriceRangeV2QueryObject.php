<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductPriceRangeV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductPriceRangeV2";

    public function selectMaxVariantPrice(ProductPriceRangeV2MaxVariantPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("maxVariantPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMinVariantPrice(ProductPriceRangeV2MinVariantPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("minVariantPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

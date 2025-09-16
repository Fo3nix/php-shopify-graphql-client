<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PriceListPriceQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListPrice";

    public function selectCompareAtPrice(PriceListPriceCompareAtPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("compareAtPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginType()
    {
        $this->selectField("originType");

        return $this;
    }

    public function selectPrice(PriceListPricePriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantityPriceBreaks(PriceListPriceQuantityPriceBreaksArgumentsObject $argsObject = null)
    {
        $object = new QuantityPriceBreakConnectionQueryObject("quantityPriceBreaks");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVariant(PriceListPriceVariantArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

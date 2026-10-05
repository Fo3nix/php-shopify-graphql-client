<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPriceListPriceQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceListPrice";

    public function selectCompareAtPrice(ShopifyPriceListPriceCompareAtPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("compareAtPrice");
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

    public function selectPrice(ShopifyPriceListPricePriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantityPriceBreaks(ShopifyPriceListPriceQuantityPriceBreaksArgumentsObject $argsObject = null)
    {
        $object = new ShopifyQuantityPriceBreakConnectionQueryObject("quantityPriceBreaks");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVariant(ShopifyPriceListPriceVariantArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

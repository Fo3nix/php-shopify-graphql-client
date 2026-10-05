<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyQuantityPriceBreakQueryObject extends QueryObject
{
    const OBJECT_NAME = "QuantityPriceBreak";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMinimumQuantity()
    {
        $this->selectField("minimumQuantity");

        return $this;
    }

    public function selectPrice(ShopifyQuantityPriceBreakPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPriceList(ShopifyQuantityPriceBreakPriceListArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPriceListQueryObject("priceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVariant(ShopifyQuantityPriceBreakVariantArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

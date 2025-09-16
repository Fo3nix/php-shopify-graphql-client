<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class QuantityPriceBreakQueryObject extends QueryObject
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

    public function selectPrice(QuantityPriceBreakPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPriceList(QuantityPriceBreakPriceListArgumentsObject $argsObject = null)
    {
        $object = new PriceListQueryObject("priceList");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVariant(QuantityPriceBreakVariantArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

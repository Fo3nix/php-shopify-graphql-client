<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PriceListQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceList";

    public function selectCurrency()
    {
        $this->selectField("currency");

        return $this;
    }

    public function selectFixedPricesCount()
    {
        $this->selectField("fixedPricesCount");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectParent(PriceListParentArgumentsObject $argsObject = null)
    {
        $object = new PriceListParentQueryObject("parent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrices(PriceListPricesArgumentsObject $argsObject = null)
    {
        $object = new PriceListPriceConnectionQueryObject("prices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantityRules(PriceListQuantityRulesArgumentsObject $argsObject = null)
    {
        $object = new QuantityRuleConnectionQueryObject("quantityRules");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

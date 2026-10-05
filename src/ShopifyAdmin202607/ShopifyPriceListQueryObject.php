<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPriceListQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceList";

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

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

    public function selectParent(ShopifyPriceListParentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPriceListParentQueryObject("parent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrices(ShopifyPriceListPricesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPriceListPriceConnectionQueryObject("prices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantityRules(ShopifyPriceListQuantityRulesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyQuantityRuleConnectionQueryObject("quantityRules");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

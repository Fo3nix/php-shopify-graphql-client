<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketLocalizationQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketLocalization";

    public function selectKey()
    {
        $this->selectField("key");

        return $this;
    }

    public function selectMarket(ShopifyMarketLocalizationMarketArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketQueryObject("market");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOutdated()
    {
        $this->selectField("outdated");

        return $this;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }

    public function selectValue()
    {
        $this->selectField("value");

        return $this;
    }
}

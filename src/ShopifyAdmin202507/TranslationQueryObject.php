<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class TranslationQueryObject extends QueryObject
{
    const OBJECT_NAME = "Translation";

    public function selectKey()
    {
        $this->selectField("key");

        return $this;
    }

    public function selectLocale()
    {
        $this->selectField("locale");

        return $this;
    }

    public function selectMarket(TranslationMarketArgumentsObject $argsObject = null)
    {
        $object = new MarketQueryObject("market");
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

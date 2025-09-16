<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopLocaleQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopLocale";

    public function selectLocale()
    {
        $this->selectField("locale");

        return $this;
    }

    public function selectMarketWebPresences(ShopLocaleMarketWebPresencesArgumentsObject $argsObject = null)
    {
        $object = new MarketWebPresenceQueryObject("marketWebPresences");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectPrimary()
    {
        $this->selectField("primary");

        return $this;
    }

    public function selectPublished()
    {
        $this->selectField("published");

        return $this;
    }
}

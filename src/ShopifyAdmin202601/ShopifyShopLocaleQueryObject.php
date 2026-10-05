<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopLocaleQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopLocale";

    public function selectLocale()
    {
        $this->selectField("locale");

        return $this;
    }

    public function selectMarketWebPresences(ShopifyShopLocaleMarketWebPresencesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketWebPresenceQueryObject("marketWebPresences");
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

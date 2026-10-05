<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketLocalizableResourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketLocalizableResource";

    public function selectMarketLocalizableContent(ShopifyMarketLocalizableResourceMarketLocalizableContentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketLocalizableContentQueryObject("marketLocalizableContent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketLocalizations(ShopifyMarketLocalizableResourceMarketLocalizationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketLocalizationQueryObject("marketLocalizations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectResourceId()
    {
        $this->selectField("resourceId");

        return $this;
    }
}

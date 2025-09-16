<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketLocalizableResourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketLocalizableResource";

    public function selectMarketLocalizableContent(MarketLocalizableResourceMarketLocalizableContentArgumentsObject $argsObject = null)
    {
        $object = new MarketLocalizableContentQueryObject("marketLocalizableContent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketLocalizations(MarketLocalizableResourceMarketLocalizationsArgumentsObject $argsObject = null)
    {
        $object = new MarketLocalizationQueryObject("marketLocalizations");
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

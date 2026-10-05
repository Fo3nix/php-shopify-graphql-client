<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketRelationshipQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketRelationship";

    public function selectChildMarket(ShopifyMarketRelationshipChildMarketArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketQueryObject("childMarket");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectParentMarket(ShopifyMarketRelationshipParentMarketArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketQueryObject("parentMarket");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

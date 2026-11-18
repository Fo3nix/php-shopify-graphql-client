<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a parent/child relationship between two markets.
 */
class ShopifyMarketRelationshipQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketRelationship";

    /**
     * The child market in the relationship.
     */
    public function selectChildMarket(?ShopifyMarketRelationshipChildMarketArgumentsObject $argsObject = null): ShopifyMarketQueryObject
    {
        $object = new ShopifyMarketQueryObject("childMarket");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unique identifier for the market relationship.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The parent market in the relationship.
     */
    public function selectParentMarket(?ShopifyMarketRelationshipParentMarketArgumentsObject $argsObject = null): ShopifyMarketQueryObject
    {
        $object = new ShopifyMarketQueryObject("parentMarket");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

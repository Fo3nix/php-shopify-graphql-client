<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The state of the shop's market relationships, which are the parent and child relationships between the shop's markets. The relationships are rebuilt asynchronously after a market, market condition, or market region changes.
 */
class ShopifyMarketRelationshipsStatusQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketRelationshipsStatus";

    /**
     * An opaque UUID identifying the build of the market relationships that the API returns at the moment this field is read. The value changes when a rebuild advances the materialized graph version and is stable at all other times, so a client can compare it against a previously read value to tell whether the relationships have changed.
     */
    public function selectVersion(): static
    {
        $this->selectField("version");

        return $this;
    }
}

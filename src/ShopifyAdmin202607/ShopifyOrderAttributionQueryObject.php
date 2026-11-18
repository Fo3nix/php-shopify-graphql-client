<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The attribution details for an order.
 */
class ShopifyOrderAttributionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderAttribution";

    /**
     * The display name of the attribution source.
     */
    public function selectDisplayName(): static
    {
        $this->selectField("displayName");

        return $this;
    }

    /**
     * An identifier for the attribution source.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * Sanitized SVG content used as the attribution source icon.
     */
    public function selectIcon(): static
    {
        $this->selectField("icon");

        return $this;
    }
}

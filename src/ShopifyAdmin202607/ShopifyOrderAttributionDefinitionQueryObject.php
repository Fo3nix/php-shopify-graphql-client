<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An attribution definition that an app can use to label orders it routes to a shop.
 * Definitions can be supplied declaratively via the `order_attribution_config` extension or created
 * dynamically per-shop via the Admin API.
 * Learn more in the [order attribution guide](https://shopify.dev/docs/apps/build/sales-channels/order-attribution).
 */
class ShopifyOrderAttributionDefinitionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderAttributionDefinition";

    /**
     * A human-readable name for the definition, displayed in Shopify Admin and on order details.
     */
    public function selectDisplayName(): static
    {
        $this->selectField("displayName");

        return $this;
    }

    /**
     * A unique identifier for the definition, scoped to the calling app on a single shop. Used as the `attribution_handle` value when an app attributes an order to this definition.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * Sanitized SVG content used as the icon for orders attributed to this definition. May be null when no icon is provided.
     */
    public function selectIcon(): static
    {
        $this->selectField("icon");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }
}

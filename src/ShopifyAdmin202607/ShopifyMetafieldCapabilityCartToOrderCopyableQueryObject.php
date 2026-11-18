<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Information about the cart to order copyable capability on a metafield definition.
 * Only order metafield definitions are eligible to have this capability enabled.
 *
 * When enabled, the value from a cart metafield is automatically copied to the corresponding
 * order metafield when an order is created. The namespace and key must match between the cart and order metafields.
 */
class ShopifyMetafieldCapabilityCartToOrderCopyableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldCapabilityCartToOrderCopyable";

    /**
     * Indicates if the definition is eligible to have the capability.
     */
    public function selectEligible(): static
    {
        $this->selectField("eligible");

        return $this;
    }

    /**
     * Indicates if the capability is enabled.
     */
    public function selectEnabled(): static
    {
        $this->selectField("enabled");

        return $this;
    }
}

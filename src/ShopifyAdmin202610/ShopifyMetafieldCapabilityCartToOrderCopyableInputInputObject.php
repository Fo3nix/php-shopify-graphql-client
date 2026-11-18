<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for enabling or disabling the "Cart to order copyable" capability.
 * This capability is only available for order metafield definitions.
 *
 * When enabled, the value from a cart metafield is automatically copied to the corresponding
 * order metafield when an order is created. The namespace and key must match between the cart and order metafields.
 */
class ShopifyMetafieldCapabilityCartToOrderCopyableInputInputObject extends InputObject
{
    const REQUIRED = ["enabled"];

    protected $enabled;

    /**
     * Indicates whether the capability should be enabled or disabled.
     */
    public function setEnabled($enabled): static
    {
        $this->enabled = $enabled;

        return $this;
    }
}

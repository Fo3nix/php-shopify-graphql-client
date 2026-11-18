<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for the analytics queryable capability.
 */
class ShopifyMetafieldCapabilityAnalyticsQueryableInputInputObject extends InputObject
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

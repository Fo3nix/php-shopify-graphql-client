<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for enabling and disabling the smart collection condition capability.
 */
class ShopifyMetafieldCapabilitySmartCollectionConditionInputInputObject extends InputObject
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

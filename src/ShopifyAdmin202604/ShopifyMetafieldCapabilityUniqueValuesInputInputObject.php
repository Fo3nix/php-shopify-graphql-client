<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for enabling and disabling the unique values capability.
 */
class ShopifyMetafieldCapabilityUniqueValuesInputInputObject extends InputObject
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

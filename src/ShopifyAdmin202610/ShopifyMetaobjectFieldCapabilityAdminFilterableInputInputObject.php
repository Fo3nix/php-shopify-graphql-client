<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for enabling and disabling the admin filterable capability.
 */
class ShopifyMetaobjectFieldCapabilityAdminFilterableInputInputObject extends InputObject
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

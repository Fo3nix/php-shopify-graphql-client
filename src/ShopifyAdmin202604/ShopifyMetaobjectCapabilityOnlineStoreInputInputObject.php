<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for enabling and disabling the Online Store capability.
 */
class ShopifyMetaobjectCapabilityOnlineStoreInputInputObject extends InputObject
{
    const REQUIRED = ["enabled"];

    protected $enabled;
    protected $data;

    /**
     * Indicates whether the capability should be enabled or disabled.
     */
    public function setEnabled($enabled): static
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * The data associated with the Online Store capability.
     */
    public function setData(ShopifyMetaobjectCapabilityDefinitionDataOnlineStoreInputInputObject $shopifyMetaobjectCapabilityDefinitionDataOnlineStoreInputInputObject): static
    {
        $this->data = $shopifyMetaobjectCapabilityDefinitionDataOnlineStoreInputInputObject;

        return $this;
    }
}

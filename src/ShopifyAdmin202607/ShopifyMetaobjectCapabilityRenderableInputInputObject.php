<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for enabling and disabling the renderable capability.
 */
class ShopifyMetaobjectCapabilityRenderableInputInputObject extends InputObject
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
     * The data associated with the renderable capability.
     */
    public function setData(ShopifyMetaobjectCapabilityDefinitionDataRenderableInputInputObject $shopifyMetaobjectCapabilityDefinitionDataRenderableInputInputObject): static
    {
        $this->data = $shopifyMetaobjectCapabilityDefinitionDataRenderableInputInputObject;

        return $this;
    }
}

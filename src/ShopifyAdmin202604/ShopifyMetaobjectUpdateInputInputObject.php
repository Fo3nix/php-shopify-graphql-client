<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a metaobject.
 */
class ShopifyMetaobjectUpdateInputInputObject extends InputObject
{
    protected $handle;
    protected $fields;
    protected $capabilities;
    protected $redirectNewHandle;

    /**
     * A unique handle for the metaobject.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * Values for fields. These are mapped by key to fields of the metaobject definition.
     */
    public function setFields(array $fields): static
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * Capabilities for the metaobject.
     */
    public function setCapabilities(ShopifyMetaobjectCapabilityDataInputInputObject $shopifyMetaobjectCapabilityDataInputInputObject): static
    {
        $this->capabilities = $shopifyMetaobjectCapabilityDataInputInputObject;

        return $this;
    }

    /**
     * Whether to create a redirect for the metaobject.
     */
    public function setRedirectNewHandle($redirectNewHandle): static
    {
        $this->redirectNewHandle = $redirectNewHandle;

        return $this;
    }
}

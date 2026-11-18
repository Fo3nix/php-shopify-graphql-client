<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for upserting a metaobject.
 */
class ShopifyMetaobjectUpsertInputInputObject extends InputObject
{
    protected $handle;
    protected $fields;
    protected $capabilities;

    /**
     * The handle of the metaobject.
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
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a metaobject.
 */
class ShopifyMetaobjectCreateInputInputObject extends InputObject
{
    const REQUIRED = ["type"];

    protected $type;
    protected $handle;
    protected $fields;
    protected $capabilities;
    protected $values;

    /**
     * The type of the metaobject. Must match an existing metaobject definition type.
     */
    public function setType($type): static
    {
        $this->type = $type;

        return $this;
    }

    /**
     * A unique handle for the metaobject. This value is auto-generated when omitted.
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
     * The field values for the metaobject as a JSON object, keyed by field definition key. Cannot be used in conjunction with `fields`.
     */
    public function setValues($values): static
    {
        $this->values = $values;

        return $this;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a metaobject definition.
 */
class ShopifyMetaobjectDefinitionCreateInputInputObject extends InputObject
{
    const REQUIRED = ["type", "fieldDefinitions"];

    protected $name;
    protected $description;
    protected $type;
    protected $fieldDefinitions;
    protected $access;
    protected $displayNameKey;
    protected $capabilities;

    /**
     * A human-readable name for the definition. This can be changed at any time.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * An administrative description of the definition.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * The type of the metaobject definition. This can't be changed.
     *
     * Must be 3-255 characters long and only contain alphanumeric, hyphen, and underscore characters.
     */
    public function setType($type): static
    {
        $this->type = $type;

        return $this;
    }

    /**
     * A set of field definitions to create on this metaobject definition.
     */
    public function setFieldDefinitions(array $fieldDefinitions): static
    {
        $this->fieldDefinitions = $fieldDefinitions;

        return $this;
    }

    /**
     * Access configuration for the metaobjects created with this definition.
     */
    public function setAccess(ShopifyMetaobjectAccessInputInputObject $shopifyMetaobjectAccessInputInputObject): static
    {
        $this->access = $shopifyMetaobjectAccessInputInputObject;

        return $this;
    }

    /**
     * The key of a field to reference as the display name for metaobjects of this type.
     */
    public function setDisplayNameKey($displayNameKey): static
    {
        $this->displayNameKey = $displayNameKey;

        return $this;
    }

    /**
     * The capabilities of the metaobject definition.
     */
    public function setCapabilities(ShopifyMetaobjectCapabilityCreateInputInputObject $shopifyMetaobjectCapabilityCreateInputInputObject): static
    {
        $this->capabilities = $shopifyMetaobjectCapabilityCreateInputInputObject;

        return $this;
    }
}

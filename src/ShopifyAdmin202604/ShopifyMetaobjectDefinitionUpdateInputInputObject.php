<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a metaobject definition.
 */
class ShopifyMetaobjectDefinitionUpdateInputInputObject extends InputObject
{
    protected $name;
    protected $description;
    protected $fieldDefinitions;
    protected $access;
    protected $displayNameKey;
    protected $resetFieldOrder;
    protected $capabilities;

    /**
     * A human-readable name for the definition.
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
     * A set of operations for modifying field definitions.
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
     * The key of a metafield to reference as the display name for objects of this type.
     */
    public function setDisplayNameKey($displayNameKey): static
    {
        $this->displayNameKey = $displayNameKey;

        return $this;
    }

    /**
     * Whether the field order should be reset while updating.
     * If `true`, then the order is assigned based on submitted fields followed by alphabetized field omissions.
     * If `false`, then no changes are made to the existing field order and new fields are appended at the end.
     */
    public function setResetFieldOrder($resetFieldOrder): static
    {
        $this->resetFieldOrder = $resetFieldOrder;

        return $this;
    }

    /**
     * The capabilities of the metaobject definition.
     */
    public function setCapabilities(ShopifyMetaobjectCapabilityUpdateInputInputObject $shopifyMetaobjectCapabilityUpdateInputInputObject): static
    {
        $this->capabilities = $shopifyMetaobjectCapabilityUpdateInputInputObject;

        return $this;
    }
}

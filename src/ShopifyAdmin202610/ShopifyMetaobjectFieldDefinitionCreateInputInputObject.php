<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a metaobject field definition.
 */
class ShopifyMetaobjectFieldDefinitionCreateInputInputObject extends InputObject
{
    const REQUIRED = ["key", "type"];

    protected $key;
    protected $type;
    protected $name;
    protected $description;
    protected $required;
    protected $validations;
    protected $capabilities;

    /**
     * The key of the new field definition. This can't be changed.
     *
     * Must be 2-64 characters long and only contain alphanumeric, hyphen, and underscore characters.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * The metafield type applied to values of the field.
     */
    public function setType($type): static
    {
        $this->type = $type;

        return $this;
    }

    /**
     * A human-readable name for the field. This can be changed at any time.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * An administrative description of the field.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Whether metaobjects require a saved value for the field.
     */
    public function setRequired($required): static
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Custom validations that apply to values assigned to the field.
     */
    public function setValidations(array $validations): static
    {
        $this->validations = $validations;

        return $this;
    }

    /**
     * Capabilities configuration for this field.
     */
    public function setCapabilities(ShopifyMetaobjectFieldDefinitionCapabilityCreateInputInputObject $shopifyMetaobjectFieldDefinitionCapabilityCreateInputInputObject): static
    {
        $this->capabilities = $shopifyMetaobjectFieldDefinitionCapabilityCreateInputInputObject;

        return $this;
    }
}

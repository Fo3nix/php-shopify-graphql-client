<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a metaobject field definition.
 */
class ShopifyMetaobjectFieldDefinitionUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["key"];

    protected $key;
    protected $name;
    protected $description;
    protected $required;
    protected $validations;
    protected $capabilities;

    /**
     * The key of the field definition to update.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * A human-readable name for the field.
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

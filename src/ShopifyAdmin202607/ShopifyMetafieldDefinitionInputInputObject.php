<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create a metafield definition.
 */
class ShopifyMetafieldDefinitionInputInputObject extends InputObject
{
    const REQUIRED = ["key", "name", "ownerType", "type"];

    protected $namespace;
    protected $key;
    protected $name;
    protected $description;
    protected $ownerType;
    protected $type;
    protected $validations;
    protected $pin;
    protected $access;
    protected $constraints;
    protected $capabilities;

    /**
     * The container for a group of metafields that the metafield definition will be associated with. If omitted, the
     * app-reserved namespace will be used.
     *
     * Must be 3-255 characters long and only contain alphanumeric, hyphen, and underscore characters.
     */
    public function setNamespace($namespace): static
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * The unique identifier for the metafield definition within its namespace.
     *
     * Must be 2-64 characters long and only contain alphanumeric, hyphen, and underscore characters.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * The human-readable name for the metafield definition.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The description for the metafield definition.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * The resource type that the metafield definition is attached to.
     */
    public function setOwnerType($shopifyMetafieldOwnerType): static
    {
        $this->ownerType = new RawObject($shopifyMetafieldOwnerType);

        return $this;
    }

    /**
     * The type of data that each of the metafields that belong to the metafield definition will store.
     * Refer to the list of [supported types](https://shopify.dev/apps/metafields/types).
     */
    public function setType($type): static
    {
        $this->type = $type;

        return $this;
    }

    /**
     * A list of [validation options](https://shopify.dev/apps/metafields/definitions/validation) for
     * the metafields that belong to the metafield definition. For example, for a metafield definition with the
     * type `date`, you can set a minimum date validation so that each of the metafields that belong to it can only
     * store dates after the specified minimum.
     */
    public function setValidations(array $validations): static
    {
        $this->validations = $validations;

        return $this;
    }

    /**
     * Whether to [pin](https://help.shopify.com/manual/custom-data/metafields/pinning-metafield-definitions)
     * the metafield definition.
     */
    public function setPin($pin): static
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * The access settings that apply to each of the metafields that belong to the metafield definition.
     */
    public function setAccess(ShopifyMetafieldAccessInputInputObject $shopifyMetafieldAccessInputInputObject): static
    {
        $this->access = $shopifyMetafieldAccessInputInputObject;

        return $this;
    }

    /**
     * The [constraints](https://shopify.dev/apps/build/custom-data/metafields/conditional-metafield-definitions)
     * that determine what resources a metafield definition applies to.
     */
    public function setConstraints(ShopifyMetafieldDefinitionConstraintsInputInputObject $shopifyMetafieldDefinitionConstraintsInputInputObject): static
    {
        $this->constraints = $shopifyMetafieldDefinitionConstraintsInputInputObject;

        return $this;
    }

    /**
     * The capabilities of the metafield definition.
     */
    public function setCapabilities(ShopifyMetafieldCapabilityCreateInputInputObject $shopifyMetafieldCapabilityCreateInputInputObject): static
    {
        $this->capabilities = $shopifyMetafieldCapabilityCreateInputInputObject;

        return $this;
    }
}

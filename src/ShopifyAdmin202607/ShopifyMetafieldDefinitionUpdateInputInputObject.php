<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to update a metafield definition.
 */
class ShopifyMetafieldDefinitionUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["key", "ownerType"];

    protected $namespace;
    protected $key;
    protected $name;
    protected $description;
    protected $ownerType;
    protected $validations;
    protected $pin;
    protected $access;
    protected $constraintsUpdates;
    protected $capabilities;

    /**
     * The container for a group of metafields that the metafield definition is associated with. Used to help identify
     * the metafield definition, but can't be updated itself. If omitted, the app-reserved namespace will be used.
     */
    public function setNamespace($namespace): static
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * The unique identifier for the metafield definition within its namespace. Used to help identify the metafield
     * definition, but can't be updated itself.
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
     * The resource type that the metafield definition is attached to. Used to help identify the metafield definition,
     * but can't be updated itself.
     */
    public function setOwnerType($shopifyMetafieldOwnerType): static
    {
        $this->ownerType = new RawObject($shopifyMetafieldOwnerType);

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
     * Whether to pin the metafield definition.
     */
    public function setPin($pin): static
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * The access settings that apply to each of the metafields that belong to the metafield definition.
     */
    public function setAccess(ShopifyMetafieldAccessUpdateInputInputObject $shopifyMetafieldAccessUpdateInputInputObject): static
    {
        $this->access = $shopifyMetafieldAccessUpdateInputInputObject;

        return $this;
    }

    /**
     * The [constraints](https://shopify.dev/apps/build/custom-data/metafields/conditional-metafield-definitions)
     * that determine what resources a metafield definition applies to.
     */
    public function setConstraintsUpdates(ShopifyMetafieldDefinitionConstraintsUpdatesInputInputObject $shopifyMetafieldDefinitionConstraintsUpdatesInputInputObject): static
    {
        $this->constraintsUpdates = $shopifyMetafieldDefinitionConstraintsUpdatesInputInputObject;

        return $this;
    }

    /**
     * The capabilities of the metafield definition.
     */
    public function setCapabilities(ShopifyMetafieldCapabilityUpdateInputInputObject $shopifyMetafieldCapabilityUpdateInputInputObject): static
    {
        $this->capabilities = $shopifyMetafieldCapabilityUpdateInputInputObject;

        return $this;
    }
}

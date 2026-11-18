<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMutationStandardMetafieldDefinitionEnableArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["ownerType"];

    protected $ownerType;
    protected $id;
    protected $namespace;
    protected $key;
    protected $pin;
    protected $capabilities;
    protected $access;

    /**
     * The resource type that the metafield definition is scoped to.
     */
    public function setOwnerType($shopifyMetafieldOwnerType): static
    {
        $this->ownerType = new RawObject($shopifyMetafieldOwnerType);

        return $this;
    }

    /**
     * The ID of the standard metafield definition template to enable.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The namespace of the standard metafield to enable. Used in combination with `key`.
     */
    public function setNamespace($namespace): static
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * The key of the standard metafield to enable. Used in combination with `namespace`.
     */
    public function setKey($key): static
    {
        $this->key = $key;

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
     * The capabilities of the metafield definition.
     */
    public function setCapabilities(ShopifyMetafieldCapabilityCreateInputInputObject $shopifyMetafieldCapabilityCreateInputInputObject): static
    {
        $this->capabilities = $shopifyMetafieldCapabilityCreateInputInputObject;

        return $this;
    }

    /**
     * The access settings that apply to each of the metafields that belong to the metafield definition.
     */
    public function setAccess(ShopifyStandardMetafieldDefinitionAccessInputInputObject $shopifyStandardMetafieldDefinitionAccessInputInputObject): static
    {
        $this->access = $shopifyStandardMetafieldDefinitionAccessInputInputObject;

        return $this;
    }
}

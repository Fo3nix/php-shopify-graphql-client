<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a metafield value to set.
 */
class ShopifyMetafieldsSetInputInputObject extends InputObject
{
    const REQUIRED = ["ownerId", "key", "value"];

    protected $ownerId;
    protected $namespace;
    protected $key;
    protected $value;
    protected $compareDigest;
    protected $type;

    /**
     * The unique ID of the resource that the metafield is attached to.
     */
    public function setOwnerId($ownerId): static
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * The container for a group of metafields that the metafield is or will be associated with. Used in tandem
     * with `key` to lookup a metafield on a resource, preventing conflicts with other metafields with the
     * same `key`. If omitted the app-reserved namespace will be used.
     *
     * Must be 3-255 characters long and can contain alphanumeric, hyphen, and underscore characters.
     */
    public function setNamespace($namespace): static
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * The unique identifier for a metafield within its namespace.
     *
     * Must be 2-64 characters long and can contain alphanumeric, hyphen, and underscore characters.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }

    /**
     * The data stored in the metafield. Always stored as a string, regardless of the metafield's type.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }

    /**
     * The `compareDigest` value obtained from a previous query. Provide this with updates to ensure the metafield is modified safely.
     */
    public function setCompareDigest($compareDigest): static
    {
        $this->compareDigest = $compareDigest;

        return $this;
    }

    /**
     * The type of data that's stored in the metafield.
     * The type must be one of the [supported types](https://shopify.dev/apps/metafields/types).
     *
     * Required when there's no corresponding definition for the given `namespace`, `key`, and
     * owner resource type (derived from `ownerId`).
     */
    public function setType($type): static
    {
        $this->type = $type;

        return $this;
    }
}

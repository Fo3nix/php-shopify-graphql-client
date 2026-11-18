<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields to use to create or update a metafield through a mutation on the owning resource.
 * An alternative way to create or update a metafield is by using the
 * [metafieldsSet](https://shopify.dev/api/admin-graphql/latest/mutations/metafieldsSet) mutation.
 */
class ShopifyMetafieldInputInputObject extends InputObject
{
    protected $id;
    protected $namespace;
    protected $key;
    protected $value;
    protected $type;

    /**
     * The unique ID of the metafield. Using `namespace` and `key` is preferred for creating and updating.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The container for a group of metafields that the metafield is or will be associated with. Used in tandem with
     * `key` to lookup a metafield on a resource, preventing conflicts with other metafields with the same `key`.
     *
     * Required when creating a metafield, but optional when updating. Used to help identify the metafield when
     * updating, but can't be updated itself.
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
     * Required when creating a metafield, but optional when updating. Used to help identify the metafield when
     * updating, but can't be updated itself.
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
     * The type of data that's stored in the metafield.
     * Refer to the list of [supported types](https://shopify.dev/apps/metafields/types).
     *
     * Required when creating or updating a metafield without a definition.
     */
    public function setType($type): static
    {
        $this->type = $type;

        return $this;
    }
}

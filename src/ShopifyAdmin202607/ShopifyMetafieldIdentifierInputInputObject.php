<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields that identify metafields.
 */
class ShopifyMetafieldIdentifierInputInputObject extends InputObject
{
    const REQUIRED = ["ownerId", "namespace", "key"];

    protected $ownerId;
    protected $namespace;
    protected $key;

    /**
     * The unique ID of the resource that the metafield is attached to.
     */
    public function setOwnerId($ownerId): static
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * The namespace of the metafield.
     */
    public function setNamespace($namespace): static
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * The key of the metafield.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }
}

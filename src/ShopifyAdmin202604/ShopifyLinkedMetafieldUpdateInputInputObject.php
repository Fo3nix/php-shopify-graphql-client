<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to link a product option to a metafield.
 *
 * This API is currently in early access. See [Metafield-linked product options](https://shopify.dev/docs/api/admin/migrate/new-product-model/metafield-linked) for more details.
 */
class ShopifyLinkedMetafieldUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["namespace", "key"];

    protected $namespace;
    protected $key;

    /**
     * The namespace of the metafield this option is linked to.
     */
    public function setNamespace($namespace): static
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * The key of the metafield this option is linked to.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The identifier for the metafield linked to this option.
 *
 * This API is currently in early access. See [Metafield-linked product options](https://shopify.dev/docs/api/admin/migrate/new-product-model/metafield-linked) for more details.
 */
class ShopifyLinkedMetafieldQueryObject extends QueryObject
{
    const OBJECT_NAME = "LinkedMetafield";

    /**
     * Key of the metafield the option is linked to.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * Namespace of the metafield the option is linked to.
     */
    public function selectNamespace(): static
    {
        $this->selectField("namespace");

        return $this;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a [Shopify product taxonomy](https://shopify.github.io/product-taxonomy/releases/unstable/?categoryId=sg-4-17-2-17) node.
 */
class ShopifyProductTaxonomyNodeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductTaxonomyNode";

    /**
     * The full name of the product taxonomy node. For example,  Animals & Pet Supplies > Pet Supplies > Dog Supplies > Dog Beds.
     */
    public function selectFullName(): static
    {
        $this->selectField("fullName");

        return $this;
    }

    /**
     * The ID of the product taxonomy node.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Whether the node is a leaf node.
     */
    public function selectIsLeaf(): static
    {
        $this->selectField("isLeaf");

        return $this;
    }

    /**
     * Whether the node is a root node.
     */
    public function selectIsRoot(): static
    {
        $this->selectField("isRoot");

        return $this;
    }

    /**
     * The name of the product taxonomy node. For example, Dog Beds.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}

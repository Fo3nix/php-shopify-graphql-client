<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a product category value in a collection condition.
 */
class ShopifyCollectionSourceInclusionConditionProductCategoryValueInputInputObject extends InputObject
{
    const REQUIRED = ["categoryId", "includeDescendants"];

    protected $categoryId;
    protected $includeDescendants;

    /**
     * The ID of the product category.
     */
    public function setCategoryId($categoryId): static
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Whether to include descendants of the product category.
     */
    public function setIncludeDescendants($includeDescendants): static
    {
        $this->includeDescendants = $includeDescendants;

        return $this;
    }
}

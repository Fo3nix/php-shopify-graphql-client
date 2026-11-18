<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a product category value in an exclusion condition.
 */
class ShopifyCollectionSourceExclusionConditionProductCategoryValueInputInputObject extends InputObject
{
    const REQUIRED = ["categoryId"];

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

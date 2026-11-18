<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a condition that determines which products are excluded from a collection. Exactly one condition type must be provided.
 */
class ShopifyCollectionSourceExclusionConditionUpdateInputInputObject extends InputObject
{
    protected $productTag;
    protected $productType;
    protected $productVendor;
    protected $productCategory;
    protected $collection;

    /**
     * An update to an exclusion condition based on product tags.
     */
    public function setProductTag(ShopifyCollectionSourceExclusionConditionUpdateProductTagInputInputObject $shopifyCollectionSourceExclusionConditionUpdateProductTagInputInputObject): static
    {
        $this->productTag = $shopifyCollectionSourceExclusionConditionUpdateProductTagInputInputObject;

        return $this;
    }

    /**
     * An update to an exclusion condition based on product types.
     */
    public function setProductType(ShopifyCollectionSourceExclusionConditionUpdateProductTypeInputInputObject $shopifyCollectionSourceExclusionConditionUpdateProductTypeInputInputObject): static
    {
        $this->productType = $shopifyCollectionSourceExclusionConditionUpdateProductTypeInputInputObject;

        return $this;
    }

    /**
     * An update to an exclusion condition based on product vendors.
     */
    public function setProductVendor(ShopifyCollectionSourceExclusionConditionUpdateProductVendorInputInputObject $shopifyCollectionSourceExclusionConditionUpdateProductVendorInputInputObject): static
    {
        $this->productVendor = $shopifyCollectionSourceExclusionConditionUpdateProductVendorInputInputObject;

        return $this;
    }

    /**
     * An update to an exclusion condition based on product categories.
     */
    public function setProductCategory(ShopifyCollectionSourceExclusionConditionUpdateProductCategoryInputInputObject $shopifyCollectionSourceExclusionConditionUpdateProductCategoryInputInputObject): static
    {
        $this->productCategory = $shopifyCollectionSourceExclusionConditionUpdateProductCategoryInputInputObject;

        return $this;
    }

    /**
     * An update to an exclusion condition based on collections.
     */
    public function setCollection(ShopifyCollectionSourceExclusionConditionUpdateCollectionInputInputObject $shopifyCollectionSourceExclusionConditionUpdateCollectionInputInputObject): static
    {
        $this->collection = $shopifyCollectionSourceExclusionConditionUpdateCollectionInputInputObject;

        return $this;
    }
}

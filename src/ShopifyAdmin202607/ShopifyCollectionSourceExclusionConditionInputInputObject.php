<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a condition that determines which products are excluded from a collection. Exactly one condition type must be provided.
 */
class ShopifyCollectionSourceExclusionConditionInputInputObject extends InputObject
{
    protected $productTag;
    protected $productType;
    protected $productVendor;
    protected $productCategory;
    protected $collection;

    /**
     * A condition based on product tags.
     */
    public function setProductTag(ShopifyCollectionSourceExclusionConditionProductTagInputInputObject $shopifyCollectionSourceExclusionConditionProductTagInputInputObject): static
    {
        $this->productTag = $shopifyCollectionSourceExclusionConditionProductTagInputInputObject;

        return $this;
    }

    /**
     * A condition based on product types.
     */
    public function setProductType(ShopifyCollectionSourceExclusionConditionProductTypeInputInputObject $shopifyCollectionSourceExclusionConditionProductTypeInputInputObject): static
    {
        $this->productType = $shopifyCollectionSourceExclusionConditionProductTypeInputInputObject;

        return $this;
    }

    /**
     * A condition based on product vendors.
     */
    public function setProductVendor(ShopifyCollectionSourceExclusionConditionProductVendorInputInputObject $shopifyCollectionSourceExclusionConditionProductVendorInputInputObject): static
    {
        $this->productVendor = $shopifyCollectionSourceExclusionConditionProductVendorInputInputObject;

        return $this;
    }

    /**
     * A condition based on product categories.
     */
    public function setProductCategory(ShopifyCollectionSourceExclusionConditionProductCategoryInputInputObject $shopifyCollectionSourceExclusionConditionProductCategoryInputInputObject): static
    {
        $this->productCategory = $shopifyCollectionSourceExclusionConditionProductCategoryInputInputObject;

        return $this;
    }

    /**
     * A condition based on collections.
     */
    public function setCollection(ShopifyCollectionSourceExclusionConditionCollectionInputInputObject $shopifyCollectionSourceExclusionConditionCollectionInputInputObject): static
    {
        $this->collection = $shopifyCollectionSourceExclusionConditionCollectionInputInputObject;

        return $this;
    }
}

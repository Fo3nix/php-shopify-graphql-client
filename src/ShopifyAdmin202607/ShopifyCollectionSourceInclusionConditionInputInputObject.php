<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * A condition that determines which products are included in a collection.
 *
 * Available condition types, grouped by what they filter on:
 *
 * - **Product attributes**: `productTag`, `productTitle`, `productType`, `productVendor`, `productStatus`,
 * `productCategory`.
 * - **Variant attributes**: `variantTitle`, `variantPrice`, `variantCompareAtPrice`, `variantInventory`,
 * `variantWeight`.
 * - **Pricing**: `isPriceReduced`.
 * - **Metafields**: `metafieldBoolean`, `metafieldDecimal`, `metafieldString`, `metafieldStringList`,
 * `metafieldMetaobject`, `metafieldMetaobjectList`, and either `metafieldInteger` or `metafieldInt` for
 * integer metafields. Use `metafieldInteger` before API version 2026-10 and `metafieldInt` from 2026-10
 * onward. `metafieldInteger` is deprecated as of 2026-10 and removed as of 2027-01.
 *
 * Each condition type specifies its own `relation` (for example, `EQUALS`, `CONTAINS`, `TAGGED_WITH`) and
 * value shape. Combine multiple conditions in a single source's `inclusion.conditions` list and use the
 * source's `matchType` to require that products match `ANY` or `ALL` of them.
 */
class ShopifyCollectionSourceInclusionConditionInputInputObject extends InputObject
{
    protected $productTag;
    protected $productTitle;
    protected $productCategory;
    protected $productType;
    protected $productVendor;
    protected $productStatus;
    protected $variantTitle;
    protected $variantPrice;
    protected $variantCompareAtPrice;
    protected $variantInventory;
    protected $variantWeight;
    protected $metafieldBoolean;
    protected $metafieldInteger;
    protected $metafieldDecimal;
    protected $metafieldString;
    protected $metafieldStringList;
    protected $metafieldMetaobject;
    protected $metafieldMetaobjectList;

    /**
     * A condition based on product tags.
     */
    public function setProductTag(ShopifyCollectionSourceInclusionConditionProductTagInputInputObject $shopifyCollectionSourceInclusionConditionProductTagInputInputObject): static
    {
        $this->productTag = $shopifyCollectionSourceInclusionConditionProductTagInputInputObject;

        return $this;
    }

    /**
     * A condition based on product titles.
     */
    public function setProductTitle(ShopifyCollectionSourceInclusionConditionProductTitleInputInputObject $shopifyCollectionSourceInclusionConditionProductTitleInputInputObject): static
    {
        $this->productTitle = $shopifyCollectionSourceInclusionConditionProductTitleInputInputObject;

        return $this;
    }

    /**
     * A condition based on product categories.
     */
    public function setProductCategory(ShopifyCollectionSourceInclusionConditionProductCategoryInputInputObject $shopifyCollectionSourceInclusionConditionProductCategoryInputInputObject): static
    {
        $this->productCategory = $shopifyCollectionSourceInclusionConditionProductCategoryInputInputObject;

        return $this;
    }

    /**
     * A condition based on product types.
     */
    public function setProductType(ShopifyCollectionSourceInclusionConditionProductTypeInputInputObject $shopifyCollectionSourceInclusionConditionProductTypeInputInputObject): static
    {
        $this->productType = $shopifyCollectionSourceInclusionConditionProductTypeInputInputObject;

        return $this;
    }

    /**
     * A condition based on product vendors.
     */
    public function setProductVendor(ShopifyCollectionSourceInclusionConditionProductVendorInputInputObject $shopifyCollectionSourceInclusionConditionProductVendorInputInputObject): static
    {
        $this->productVendor = $shopifyCollectionSourceInclusionConditionProductVendorInputInputObject;

        return $this;
    }

    /**
     * A condition based on product status.
     */
    public function setProductStatus(ShopifyCollectionSourceInclusionConditionProductStatusInputInputObject $shopifyCollectionSourceInclusionConditionProductStatusInputInputObject): static
    {
        $this->productStatus = $shopifyCollectionSourceInclusionConditionProductStatusInputInputObject;

        return $this;
    }

    /**
     * A condition based on variant titles.
     */
    public function setVariantTitle(ShopifyCollectionSourceInclusionConditionVariantTitleInputInputObject $shopifyCollectionSourceInclusionConditionVariantTitleInputInputObject): static
    {
        $this->variantTitle = $shopifyCollectionSourceInclusionConditionVariantTitleInputInputObject;

        return $this;
    }

    /**
     * A condition based on variant prices.
     */
    public function setVariantPrice(ShopifyCollectionSourceInclusionConditionVariantPriceInputInputObject $shopifyCollectionSourceInclusionConditionVariantPriceInputInputObject): static
    {
        $this->variantPrice = $shopifyCollectionSourceInclusionConditionVariantPriceInputInputObject;

        return $this;
    }

    /**
     * A condition based on variant compare at prices.
     */
    public function setVariantCompareAtPrice(ShopifyCollectionSourceInclusionConditionVariantCompareAtPriceInputInputObject $shopifyCollectionSourceInclusionConditionVariantCompareAtPriceInputInputObject): static
    {
        $this->variantCompareAtPrice = $shopifyCollectionSourceInclusionConditionVariantCompareAtPriceInputInputObject;

        return $this;
    }

    /**
     * A condition based on variant inventory quantities.
     */
    public function setVariantInventory(ShopifyCollectionSourceInclusionConditionVariantInventoryInputInputObject $shopifyCollectionSourceInclusionConditionVariantInventoryInputInputObject): static
    {
        $this->variantInventory = $shopifyCollectionSourceInclusionConditionVariantInventoryInputInputObject;

        return $this;
    }

    /**
     * A condition based on variant weights.
     */
    public function setVariantWeight(ShopifyCollectionSourceInclusionConditionVariantWeightInputInputObject $shopifyCollectionSourceInclusionConditionVariantWeightInputInputObject): static
    {
        $this->variantWeight = $shopifyCollectionSourceInclusionConditionVariantWeightInputInputObject;

        return $this;
    }

    /**
     * A condition based on boolean metafield values.
     */
    public function setMetafieldBoolean(ShopifyCollectionSourceInclusionConditionMetafieldBooleanInputInputObject $shopifyCollectionSourceInclusionConditionMetafieldBooleanInputInputObject): static
    {
        $this->metafieldBoolean = $shopifyCollectionSourceInclusionConditionMetafieldBooleanInputInputObject;

        return $this;
    }

    /**
     * A condition based on integer metafield values.
     */
    public function setMetafieldInteger(ShopifyCollectionSourceInclusionConditionMetafieldIntegerInputInputObject $shopifyCollectionSourceInclusionConditionMetafieldIntegerInputInputObject): static
    {
        $this->metafieldInteger = $shopifyCollectionSourceInclusionConditionMetafieldIntegerInputInputObject;

        return $this;
    }

    /**
     * A condition based on decimal metafield values.
     */
    public function setMetafieldDecimal(ShopifyCollectionSourceInclusionConditionMetafieldDecimalInputInputObject $shopifyCollectionSourceInclusionConditionMetafieldDecimalInputInputObject): static
    {
        $this->metafieldDecimal = $shopifyCollectionSourceInclusionConditionMetafieldDecimalInputInputObject;

        return $this;
    }

    /**
     * A condition based on string metafield values.
     */
    public function setMetafieldString(ShopifyCollectionSourceInclusionConditionMetafieldStringInputInputObject $shopifyCollectionSourceInclusionConditionMetafieldStringInputInputObject): static
    {
        $this->metafieldString = $shopifyCollectionSourceInclusionConditionMetafieldStringInputInputObject;

        return $this;
    }

    /**
     * A condition based on string list metafield values.
     */
    public function setMetafieldStringList(ShopifyCollectionSourceInclusionConditionMetafieldStringListInputInputObject $shopifyCollectionSourceInclusionConditionMetafieldStringListInputInputObject): static
    {
        $this->metafieldStringList = $shopifyCollectionSourceInclusionConditionMetafieldStringListInputInputObject;

        return $this;
    }

    /**
     * A condition based on single metaobject reference metafield values.
     */
    public function setMetafieldMetaobject(ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectInputInputObject $shopifyCollectionSourceInclusionConditionMetafieldMetaobjectInputInputObject): static
    {
        $this->metafieldMetaobject = $shopifyCollectionSourceInclusionConditionMetafieldMetaobjectInputInputObject;

        return $this;
    }

    /**
     * A condition based on metaobject list reference metafield values.
     */
    public function setMetafieldMetaobjectList(ShopifyCollectionSourceInclusionConditionMetafieldMetaobjectListInputInputObject $shopifyCollectionSourceInclusionConditionMetafieldMetaobjectListInputInputObject): static
    {
        $this->metafieldMetaobjectList = $shopifyCollectionSourceInclusionConditionMetafieldMetaobjectListInputInputObject;

        return $this;
    }
}

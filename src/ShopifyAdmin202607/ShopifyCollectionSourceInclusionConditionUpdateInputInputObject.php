<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a condition that determines which products are included in a collection. Exactly one condition type must be provided.
 */
class ShopifyCollectionSourceInclusionConditionUpdateInputInputObject extends InputObject
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
     * An update to a condition based on product tags.
     */
    public function setProductTag(ShopifyCollectionSourceInclusionConditionUpdateProductTagInputInputObject $shopifyCollectionSourceInclusionConditionUpdateProductTagInputInputObject): static
    {
        $this->productTag = $shopifyCollectionSourceInclusionConditionUpdateProductTagInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on product titles.
     */
    public function setProductTitle(ShopifyCollectionSourceInclusionConditionUpdateProductTitleInputInputObject $shopifyCollectionSourceInclusionConditionUpdateProductTitleInputInputObject): static
    {
        $this->productTitle = $shopifyCollectionSourceInclusionConditionUpdateProductTitleInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on product categories.
     */
    public function setProductCategory(ShopifyCollectionSourceInclusionConditionUpdateProductCategoryInputInputObject $shopifyCollectionSourceInclusionConditionUpdateProductCategoryInputInputObject): static
    {
        $this->productCategory = $shopifyCollectionSourceInclusionConditionUpdateProductCategoryInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on product types.
     */
    public function setProductType(ShopifyCollectionSourceInclusionConditionUpdateProductTypeInputInputObject $shopifyCollectionSourceInclusionConditionUpdateProductTypeInputInputObject): static
    {
        $this->productType = $shopifyCollectionSourceInclusionConditionUpdateProductTypeInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on product vendors.
     */
    public function setProductVendor(ShopifyCollectionSourceInclusionConditionUpdateProductVendorInputInputObject $shopifyCollectionSourceInclusionConditionUpdateProductVendorInputInputObject): static
    {
        $this->productVendor = $shopifyCollectionSourceInclusionConditionUpdateProductVendorInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on product status.
     */
    public function setProductStatus(ShopifyCollectionSourceInclusionConditionUpdateProductStatusInputInputObject $shopifyCollectionSourceInclusionConditionUpdateProductStatusInputInputObject): static
    {
        $this->productStatus = $shopifyCollectionSourceInclusionConditionUpdateProductStatusInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on variant titles.
     */
    public function setVariantTitle(ShopifyCollectionSourceInclusionConditionUpdateVariantTitleInputInputObject $shopifyCollectionSourceInclusionConditionUpdateVariantTitleInputInputObject): static
    {
        $this->variantTitle = $shopifyCollectionSourceInclusionConditionUpdateVariantTitleInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on variant prices.
     */
    public function setVariantPrice(ShopifyCollectionSourceInclusionConditionUpdateVariantPriceInputInputObject $shopifyCollectionSourceInclusionConditionUpdateVariantPriceInputInputObject): static
    {
        $this->variantPrice = $shopifyCollectionSourceInclusionConditionUpdateVariantPriceInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on variant compare at prices.
     */
    public function setVariantCompareAtPrice(ShopifyCollectionSourceInclusionConditionUpdateVariantCompareAtPriceInputInputObject $shopifyCollectionSourceInclusionConditionUpdateVariantCompareAtPriceInputInputObject): static
    {
        $this->variantCompareAtPrice = $shopifyCollectionSourceInclusionConditionUpdateVariantCompareAtPriceInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on variant inventory quantities.
     */
    public function setVariantInventory(ShopifyCollectionSourceInclusionConditionUpdateVariantInventoryInputInputObject $shopifyCollectionSourceInclusionConditionUpdateVariantInventoryInputInputObject): static
    {
        $this->variantInventory = $shopifyCollectionSourceInclusionConditionUpdateVariantInventoryInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on variant weights.
     */
    public function setVariantWeight(ShopifyCollectionSourceInclusionConditionUpdateVariantWeightInputInputObject $shopifyCollectionSourceInclusionConditionUpdateVariantWeightInputInputObject): static
    {
        $this->variantWeight = $shopifyCollectionSourceInclusionConditionUpdateVariantWeightInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on boolean metafield values.
     */
    public function setMetafieldBoolean(ShopifyCollectionSourceInclusionConditionUpdateMetafieldBooleanInputInputObject $shopifyCollectionSourceInclusionConditionUpdateMetafieldBooleanInputInputObject): static
    {
        $this->metafieldBoolean = $shopifyCollectionSourceInclusionConditionUpdateMetafieldBooleanInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on integer metafield values.
     */
    public function setMetafieldInteger(ShopifyCollectionSourceInclusionConditionUpdateMetafieldIntegerInputInputObject $shopifyCollectionSourceInclusionConditionUpdateMetafieldIntegerInputInputObject): static
    {
        $this->metafieldInteger = $shopifyCollectionSourceInclusionConditionUpdateMetafieldIntegerInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on decimal metafield values.
     */
    public function setMetafieldDecimal(ShopifyCollectionSourceInclusionConditionUpdateMetafieldDecimalInputInputObject $shopifyCollectionSourceInclusionConditionUpdateMetafieldDecimalInputInputObject): static
    {
        $this->metafieldDecimal = $shopifyCollectionSourceInclusionConditionUpdateMetafieldDecimalInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on string metafield values.
     */
    public function setMetafieldString(ShopifyCollectionSourceInclusionConditionUpdateMetafieldStringInputInputObject $shopifyCollectionSourceInclusionConditionUpdateMetafieldStringInputInputObject): static
    {
        $this->metafieldString = $shopifyCollectionSourceInclusionConditionUpdateMetafieldStringInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on string list metafield values.
     */
    public function setMetafieldStringList(ShopifyCollectionSourceInclusionConditionUpdateMetafieldStringListInputInputObject $shopifyCollectionSourceInclusionConditionUpdateMetafieldStringListInputInputObject): static
    {
        $this->metafieldStringList = $shopifyCollectionSourceInclusionConditionUpdateMetafieldStringListInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on single metaobject reference metafield values.
     */
    public function setMetafieldMetaobject(ShopifyCollectionSourceInclusionConditionUpdateMetafieldMetaobjectInputInputObject $shopifyCollectionSourceInclusionConditionUpdateMetafieldMetaobjectInputInputObject): static
    {
        $this->metafieldMetaobject = $shopifyCollectionSourceInclusionConditionUpdateMetafieldMetaobjectInputInputObject;

        return $this;
    }

    /**
     * An update to a condition based on metaobject list reference metafield values.
     */
    public function setMetafieldMetaobjectList(ShopifyCollectionSourceInclusionConditionUpdateMetafieldMetaobjectListInputInputObject $shopifyCollectionSourceInclusionConditionUpdateMetafieldMetaobjectListInputInputObject): static
    {
        $this->metafieldMetaobjectList = $shopifyCollectionSourceInclusionConditionUpdateMetafieldMetaobjectListInputInputObject;

        return $this;
    }
}

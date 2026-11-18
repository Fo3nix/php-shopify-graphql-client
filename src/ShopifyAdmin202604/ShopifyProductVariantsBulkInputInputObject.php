<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for specifying a product variant to create as part of a variant bulk mutation.
 */
class ShopifyProductVariantsBulkInputInputObject extends InputObject
{
    protected $barcode;
    protected $compareAtPrice;
    protected $id;
    protected $mediaSrc;
    protected $inventoryPolicy;
    protected $inventoryQuantities;
    protected $quantityAdjustments;
    protected $inventoryItem;
    protected $mediaId;
    protected $metafields;
    protected $optionValues;
    protected $price;
    protected $taxable;
    protected $taxCode;
    protected $unitPriceMeasurement;
    protected $showUnitPrice;
    protected $requiresComponents;

    /**
     * The value of the barcode associated with the product variant.
     */
    public function setBarcode($barcode): static
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * The compare-at price of the variant.
     */
    public function setCompareAtPrice($compareAtPrice): static
    {
        $this->compareAtPrice = $compareAtPrice;

        return $this;
    }

    /**
     * Specifies the product variant to update or delete.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The URL of the media to associate with the variant.
     */
    public function setMediaSrc(array $mediaSrc): static
    {
        $this->mediaSrc = $mediaSrc;

        return $this;
    }

    /**
     * Whether customers are allowed to place an order for the variant when it's out of stock. Defaults to `DENY`.
     */
    public function setInventoryPolicy($shopifyProductVariantInventoryPolicy): static
    {
        $this->inventoryPolicy = new RawObject($shopifyProductVariantInventoryPolicy);

        return $this;
    }

    /**
     * The inventory quantities at each location where the variant is stocked. The number of elements
     * in the array of inventory quantities can't exceed the amount specified for the plan.
     * Supported as input with the `productVariantsBulkCreate` mutation only.
     */
    public function setInventoryQuantities(array $inventoryQuantities): static
    {
        $this->inventoryQuantities = $inventoryQuantities;

        return $this;
    }

    /**
     * Adjust inventory quantities with deltas.
     */
    public function setQuantityAdjustments(array $quantityAdjustments): static
    {
        $this->quantityAdjustments = $quantityAdjustments;

        return $this;
    }

    /**
     * The inventory item associated with the variant, used for unit cost.
     */
    public function setInventoryItem(ShopifyInventoryItemInputInputObject $shopifyInventoryItemInputInputObject): static
    {
        $this->inventoryItem = $shopifyInventoryItemInputInputObject;

        return $this;
    }

    /**
     * The ID of the media that's associated with the variant.
     */
    public function setMediaId($mediaId): static
    {
        $this->mediaId = $mediaId;

        return $this;
    }

    /**
     * The additional customizable information about the product variant.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }

    /**
     * The custom properties that a shop owner uses to define product variants.
     */
    public function setOptionValues(array $optionValues): static
    {
        $this->optionValues = $optionValues;

        return $this;
    }

    /**
     * The price of the variant.
     */
    public function setPrice($price): static
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Whether the variant is taxable.
     */
    public function setTaxable($taxable): static
    {
        $this->taxable = $taxable;

        return $this;
    }

    /**
     * The tax code associated with the variant.
     */
    public function setTaxCode($taxCode): static
    {
        $this->taxCode = $taxCode;

        return $this;
    }

    /**
     * The unit price measurement for the product variant.
     */
    public function setUnitPriceMeasurement(ShopifyUnitPriceMeasurementInputInputObject $shopifyUnitPriceMeasurementInputInputObject): static
    {
        $this->unitPriceMeasurement = $shopifyUnitPriceMeasurementInputInputObject;

        return $this;
    }

    /**
     * Whether the unit price should be shown for this product variant.
     */
    public function setShowUnitPrice($showUnitPrice): static
    {
        $this->showUnitPrice = $showUnitPrice;

        return $this;
    }

    /**
     * Whether a product variant requires components. The default value is `false`.
     * If `true`, then the product variant can only be purchased as a parent bundle with components and it will be
     * omitted from channels that don't support bundles.
     */
    public function setRequiresComponents($requiresComponents): static
    {
        $this->requiresComponents = $requiresComponents;

        return $this;
    }
}

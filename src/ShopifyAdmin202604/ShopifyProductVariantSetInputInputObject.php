<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for specifying a product variant to create or update.
 */
class ShopifyProductVariantSetInputInputObject extends InputObject
{
    const REQUIRED = ["optionValues"];

    protected $id;
    protected $optionValues;
    protected $price;
    protected $sku;
    protected $barcode;
    protected $position;
    protected $file;
    protected $metafields;
    protected $compareAtPrice;
    protected $requiresComponents;
    protected $inventoryPolicy;
    protected $inventoryQuantities;
    protected $inventoryItem;
    protected $taxable;
    protected $taxCode;
    protected $unitPriceMeasurement;
    protected $showUnitPrice;

    /**
     * Specifies the product variant to update or create a new variant if absent.
     */
    public function setId($id): static
    {
        $this->id = $id;

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
     * The SKU for the variant. Case-sensitive string.
     */
    public function setSku($sku): static
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * The value of the barcode associated with the product.
     */
    public function setBarcode($barcode): static
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * The order of the product variant in the list of product variants. The first position in the list is 1.
     */
    public function setPosition($position): static
    {
        $this->position = $position;

        return $this;
    }

    /**
     * The file to associate with the variant.
     *
     * Complexity cost: 0.6 per variant file.
     *
     * Any file specified here must also be specified in the `files` input for the product.
     */
    public function setFile(ShopifyFileSetInputInputObject $shopifyFileSetInputInputObject): static
    {
        $this->file = $shopifyFileSetInputInputObject;

        return $this;
    }

    /**
     * Additional customizable information about the product variant.
     *
     * Complexity cost: 0.4 per variant metafield.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

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
     * Whether a product variant requires components. The default value is `false`.
     * If `true`, then the product variant can only be purchased as a parent bundle with components and it will be omitted
     * from channels that don't support bundles.
     */
    public function setRequiresComponents($requiresComponents): static
    {
        $this->requiresComponents = $requiresComponents;

        return $this;
    }

    /**
     * Whether customers are allowed to place an order for the product variant when it's out of stock. Defaults to `DENY`.
     */
    public function setInventoryPolicy($shopifyProductVariantInventoryPolicy): static
    {
        $this->inventoryPolicy = new RawObject($shopifyProductVariantInventoryPolicy);

        return $this;
    }

    /**
     * The inventory quantities at each location where the variant is stocked.
     * If you're updating an existing variant, then you can only update the
     * quantities at locations where the variant is already stocked.
     *
     * The total number of inventory quantities across all variants in the mutation can't exceed 50000.
     */
    public function setInventoryQuantities(array $inventoryQuantities): static
    {
        $this->inventoryQuantities = $inventoryQuantities;

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
     * Whether or not unit price should be shown for this product variant.
     */
    public function setShowUnitPrice($showUnitPrice): static
    {
        $this->showUnitPrice = $showUnitPrice;

        return $this;
    }
}

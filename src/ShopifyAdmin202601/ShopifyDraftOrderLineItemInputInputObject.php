<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a line item included in a draft order.
 */
class ShopifyDraftOrderLineItemInputInputObject extends InputObject
{
    const REQUIRED = ["quantity"];

    protected $appliedDiscount;
    protected $customAttributes;
    protected $originalUnitPriceWithCurrency;
    protected $quantity;
    protected $requiresShipping;
    protected $sku;
    protected $taxable;
    protected $title;
    protected $variantId;
    protected $weight;
    protected $uuid;
    protected $components;
    protected $generatePriceOverride;
    protected $priceOverride;

    /**
     * The custom discount to be applied.
     */
    public function setAppliedDiscount(ShopifyDraftOrderAppliedDiscountInputInputObject $shopifyDraftOrderAppliedDiscountInputInputObject): static
    {
        $this->appliedDiscount = $shopifyDraftOrderAppliedDiscountInputInputObject;

        return $this;
    }

    /**
     * A generic custom attribute using a key value pair.
     */
    public function setCustomAttributes(array $customAttributes): static
    {
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * The price in presentment currency, without any discounts applied, for a custom line item.
     * If this value is provided, `original_unit_price` will be ignored. This field is ignored when `variantId` is provided.
     * Note: All presentment currencies for a single draft should be the same and match the
     * presentment currency of the draft order.
     */
    public function setOriginalUnitPriceWithCurrency(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->originalUnitPriceWithCurrency = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The line item quantity.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Whether physical shipping is required for a custom line item. This field is ignored when `variantId` is provided.
     */
    public function setRequiresShipping($requiresShipping): static
    {
        $this->requiresShipping = $requiresShipping;

        return $this;
    }

    /**
     * The SKU number for custom line items only. This field is ignored when `variantId` is provided.
     */
    public function setSku($sku): static
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Whether the custom line item is taxable. This field is ignored when `variantId` is provided.
     */
    public function setTaxable($taxable): static
    {
        $this->taxable = $taxable;

        return $this;
    }

    /**
     * Title of the line item. This field is ignored when `variantId` is provided.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The ID of the product variant corresponding to the line item.
     * Must be null for custom line items, otherwise required.
     */
    public function setVariantId($variantId): static
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * The weight unit and value inputs for custom line items only.
     * This field is ignored when `variantId` is provided.
     */
    public function setWeight(ShopifyWeightInputInputObject $shopifyWeightInputInputObject): static
    {
        $this->weight = $shopifyWeightInputInputObject;

        return $this;
    }

    /**
     * The UUID of the draft order line item. Must be unique and consistent across requests.
     * This field is mandatory in order to manipulate drafts with bundles.
     */
    public function setUuid($uuid): static
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * The components of the draft order line item.
     */
    public function setComponents(array $components): static
    {
        $this->components = $components;

        return $this;
    }

    /**
     * If the line item doesn't already have a price override input, setting `generatePriceOverride` to `true` will
     * create a price override from the current price.
     */
    public function setGeneratePriceOverride($generatePriceOverride): static
    {
        $this->generatePriceOverride = $generatePriceOverride;

        return $this;
    }

    /**
     * The price override for the line item. Should be set in presentment currency.
     *
     * This price will be used in place of the product variant's catalog price in this draft order.
     *
     * If the override's presentment currency doesn't match the draft order's presentment currency, it will be
     * converted over to match the draft order's presentment currency. This will occur if the input is defined in a
     * differing currency, or if some other event causes the draft order's currency to change.
     *
     * Price overrides can't be applied to bundle components. If this line item becomes part of a bundle the price
     * override will be removed. In the case of a cart transform, this may mean that a price override is applied to
     * this line item earlier in its lifecycle, and is removed later when the transform occurs.
     */
    public function setPriceOverride(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->priceOverride = $shopifyMoneyInputInputObject;

        return $this;
    }
}

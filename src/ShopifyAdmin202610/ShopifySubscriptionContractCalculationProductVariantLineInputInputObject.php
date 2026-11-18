<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for product variant subscription lines in the calculate API.
 */
class ShopifySubscriptionContractCalculationProductVariantLineInputInputObject extends InputObject
{
    const REQUIRED = ["productVariantId", "quantity", "discounts"];

    protected $id;
    protected $productVariantId;
    protected $quantity;
    protected $priceOverride;
    protected $customAttributes;
    protected $appManagedPricingPolicy;
    protected $originSellingPlanId;
    protected $sellingPlanName;
    protected $discounts;

    /**
     * The ID of an existing line to update. Omit for new lines. The ID keeps the line's identity
     * but doesn't carry over any stored values, so restate every field of the line.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The ID of the product variant for this line.
     */
    public function setProductVariantId($productVariantId): static
    {
        $this->productVariantId = $productVariantId;

        return $this;
    }

    /**
     * The quantity of the product variant. Must be at least 1.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The price per unit for this line, the calculate API equivalent of `currentPrice` on
     * `SubscriptionLineInput`. The amount must be greater than or equal to 0. When omitted, the line
     * is priced at the product variant's current price.
     */
    public function setPriceOverride(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->priceOverride = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The custom attributes for this subscription line. Defaults to an empty list when omitted,
     * which clears the line's stored attributes.
     */
    public function setCustomAttributes(array $customAttributes): static
    {
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * The app-managed pricing policy for this line, the calculate API equivalent of `pricingPolicy`
     * on `SubscriptionLineInput`. It's stored as metadata and doesn't affect the calculated price.
     * When omitted, the stored policy is cleared.
     */
    public function setAppManagedPricingPolicy(ShopifySubscriptionContractCalculationAppManagedPricingPolicyInputInputObject $shopifySubscriptionContractCalculationAppManagedPricingPolicyInputInputObject): static
    {
        $this->appManagedPricingPolicy = $shopifySubscriptionContractCalculationAppManagedPricingPolicyInputInputObject;

        return $this;
    }

    /**
     * The ID of the selling plan this line was originally created with. It's used to find the
     * associated delivery profile, and isn't applied as a selling plan during calculation.
     */
    public function setOriginSellingPlanId($originSellingPlanId): static
    {
        $this->originSellingPlanId = $originSellingPlanId;

        return $this;
    }

    /**
     * The selling plan name for this line, describing the order line items it creates. Defaults
     * to the origin selling plan's current name when not specified. When `originSellingPlanId` is
     * also omitted, the line stores no name and order line items use a name built from the
     * contract's billing and delivery policies.
     */
    public function setSellingPlanName($sellingPlanName): static
    {
        $this->sellingPlanName = $sellingPlanName;

        return $this;
    }

    /**
     * The line-scoped manual discounts for this line. Each applies only to this line. You must state this list whenever you provide the line; pass an empty list to clear its discounts.
     */
    public function setDiscounts(array $discounts): static
    {
        $this->discounts = $discounts;

        return $this;
    }
}

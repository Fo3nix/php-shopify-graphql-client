<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for custom subscription lines in the calculate API.
 */
class ShopifySubscriptionContractCalculationCustomLineInputInputObject extends InputObject
{
    const REQUIRED = ["title", "quantity", "price", "requiresShipping", "taxable", "discounts"];

    protected $id;
    protected $title;
    protected $variantTitle;
    protected $quantity;
    protected $price;
    protected $requiresShipping;
    protected $taxable;
    protected $sku;
    protected $customAttributes;
    protected $weight;
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
     * The title of the custom line item.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The title of the variant.
     */
    public function setVariantTitle($variantTitle): static
    {
        $this->variantTitle = $variantTitle;

        return $this;
    }

    /**
     * The quantity of the custom line item. Must be at least 1.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The price of the custom line item. The amount must be greater than or equal to 0.
     */
    public function setPrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->price = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * Whether this custom line requires shipping.
     */
    public function setRequiresShipping($requiresShipping): static
    {
        $this->requiresShipping = $requiresShipping;

        return $this;
    }

    /**
     * Whether this custom line is taxable.
     */
    public function setTaxable($taxable): static
    {
        $this->taxable = $taxable;

        return $this;
    }

    /**
     * The SKU of the custom line item.
     */
    public function setSku($sku): static
    {
        $this->sku = $sku;

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
     * The weight of the custom line item.
     */
    public function setWeight(ShopifyWeightInputInputObject $shopifyWeightInputInputObject): static
    {
        $this->weight = $shopifyWeightInputInputObject;

        return $this;
    }

    /**
     * The app-managed pricing policy for this line. It's stored as metadata and doesn't affect the
     * calculated price. When omitted, the stored policy is cleared.
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

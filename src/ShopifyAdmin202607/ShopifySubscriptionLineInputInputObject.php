<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to add a new subscription line to a contract.
 */
class ShopifySubscriptionLineInputInputObject extends InputObject
{
    const REQUIRED = ["productVariantId", "quantity", "currentPrice"];

    protected $productVariantId;
    protected $quantity;
    protected $currentPrice;
    protected $customAttributes;
    protected $sellingPlanId;
    protected $sellingPlanName;
    protected $pricingPolicy;

    /**
     * The ID of the product variant the subscription line refers to.
     */
    public function setProductVariantId($productVariantId): static
    {
        $this->productVariantId = $productVariantId;

        return $this;
    }

    /**
     * The quantity of the product.
     */
    public function setQuantity($quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The price of the product.
     */
    public function setCurrentPrice($currentPrice): static
    {
        $this->currentPrice = $currentPrice;

        return $this;
    }

    /**
     * The custom attributes for this subscription line.
     */
    public function setCustomAttributes(array $customAttributes): static
    {
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * The selling plan for the subscription line.
     */
    public function setSellingPlanId($sellingPlanId): static
    {
        $this->sellingPlanId = $sellingPlanId;

        return $this;
    }

    /**
     * The selling plan name for the subscription line.
     *
     * Defaults to using the selling plan's current name when not specified.
     */
    public function setSellingPlanName($sellingPlanName): static
    {
        $this->sellingPlanName = $sellingPlanName;

        return $this;
    }

    /**
     * Describes expected price changes of the subscription line over time.
     */
    public function setPricingPolicy(ShopifySubscriptionPricingPolicyInputInputObject $shopifySubscriptionPricingPolicyInputInputObject): static
    {
        $this->pricingPolicy = $shopifySubscriptionPricingPolicyInputInputObject;

        return $this;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields to create or update a selling plan.
 */
class ShopifySellingPlanInputInputObject extends InputObject
{
    protected $id;
    protected $name;
    protected $description;
    protected $billingPolicy;
    protected $deliveryPolicy;
    protected $inventoryPolicy;
    protected $metafields;
    protected $pricingPolicies;
    protected $options;
    protected $position;
    protected $category;

    /**
     * ID of the selling plan.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Buyer facing string which describes the selling plan content.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Buyer facing string which describes the selling plan commitment.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Selling plan policy which describes the billing details.
     */
    public function setBillingPolicy(ShopifySellingPlanBillingPolicyInputInputObject $shopifySellingPlanBillingPolicyInputInputObject): static
    {
        $this->billingPolicy = $shopifySellingPlanBillingPolicyInputInputObject;

        return $this;
    }

    /**
     * A selling plan policy which describes the delivery details.
     */
    public function setDeliveryPolicy(ShopifySellingPlanDeliveryPolicyInputInputObject $shopifySellingPlanDeliveryPolicyInputInputObject): static
    {
        $this->deliveryPolicy = $shopifySellingPlanDeliveryPolicyInputInputObject;

        return $this;
    }

    /**
     * A selling plan policy which describes the inventory details.
     */
    public function setInventoryPolicy(ShopifySellingPlanInventoryPolicyInputInputObject $shopifySellingPlanInventoryPolicyInputInputObject): static
    {
        $this->inventoryPolicy = $shopifySellingPlanInventoryPolicyInputInputObject;

        return $this;
    }

    /**
     * Additional customizable information to associate with the SellingPlan.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }

    /**
     * The pricing policies which describe the pricing details. Each selling plan
     * can only contain a maximum of 2 pricing policies.
     */
    public function setPricingPolicies(array $pricingPolicies): static
    {
        $this->pricingPolicies = $pricingPolicies;

        return $this;
    }

    /**
     * The values of all options available on the selling plan. Selling plans are grouped together in Liquid when they're created by the same app, and have the same `selling_plan_group.name` and `selling_plan_group.options` values.
     */
    public function setOptions(array $options): static
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Relative value for display purposes of this plan. A lower position will be displayed before a higher one.
     */
    public function setPosition($position): static
    {
        $this->position = $position;

        return $this;
    }

    /**
     * The category used to classify this selling plan for reporting purposes.
     */
    public function setCategory($shopifySellingPlanCategory): static
    {
        $this->category = new RawObject($shopifySellingPlanCategory);

        return $this;
    }
}

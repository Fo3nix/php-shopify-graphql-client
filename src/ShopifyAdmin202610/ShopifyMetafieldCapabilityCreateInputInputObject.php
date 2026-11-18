<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a metafield capability.
 */
class ShopifyMetafieldCapabilityCreateInputInputObject extends InputObject
{
    protected $smartCollectionCondition;
    protected $adminFilterable;
    protected $uniqueValues;
    protected $analyticsQueryable;
    protected $cartToOrderCopyable;

    /**
     * The input for updating the smart collection condition capability.
     */
    public function setSmartCollectionCondition(ShopifyMetafieldCapabilitySmartCollectionConditionInputInputObject $shopifyMetafieldCapabilitySmartCollectionConditionInputInputObject): static
    {
        $this->smartCollectionCondition = $shopifyMetafieldCapabilitySmartCollectionConditionInputInputObject;

        return $this;
    }

    /**
     * The input for updating the admin filterable capability.
     */
    public function setAdminFilterable(ShopifyMetafieldCapabilityAdminFilterableInputInputObject $shopifyMetafieldCapabilityAdminFilterableInputInputObject): static
    {
        $this->adminFilterable = $shopifyMetafieldCapabilityAdminFilterableInputInputObject;

        return $this;
    }

    /**
     * The input for updating the unique values capability.
     */
    public function setUniqueValues(ShopifyMetafieldCapabilityUniqueValuesInputInputObject $shopifyMetafieldCapabilityUniqueValuesInputInputObject): static
    {
        $this->uniqueValues = $shopifyMetafieldCapabilityUniqueValuesInputInputObject;

        return $this;
    }

    /**
     * The input for the analytics queryable capability.
     */
    public function setAnalyticsQueryable(ShopifyMetafieldCapabilityAnalyticsQueryableInputInputObject $shopifyMetafieldCapabilityAnalyticsQueryableInputInputObject): static
    {
        $this->analyticsQueryable = $shopifyMetafieldCapabilityAnalyticsQueryableInputInputObject;

        return $this;
    }

    /**
     * The input for updating the cart to order copyable capability.
     */
    public function setCartToOrderCopyable(ShopifyMetafieldCapabilityCartToOrderCopyableInputInputObject $shopifyMetafieldCapabilityCartToOrderCopyableInputInputObject): static
    {
        $this->cartToOrderCopyable = $shopifyMetafieldCapabilityCartToOrderCopyableInputInputObject;

        return $this;
    }
}

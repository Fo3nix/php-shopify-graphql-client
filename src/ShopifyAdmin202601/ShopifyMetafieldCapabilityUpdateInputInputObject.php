<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a metafield capability.
 */
class ShopifyMetafieldCapabilityUpdateInputInputObject extends InputObject
{
    protected $smartCollectionCondition;
    protected $adminFilterable;
    protected $uniqueValues;

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
}

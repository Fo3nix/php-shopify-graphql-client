<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a shipping option. Provide exactly one option type.
 */
class ShopifyDeliveryOptionDefinitionUpdateInputInputObject extends InputObject
{
    protected $flatRate;
    protected $carrierCalculated;
    protected $valueBased;
    protected $weightBased;

    /**
     * A flat rate shipping option to update.
     */
    public function setFlatRate(ShopifyDeliveryFlatRateOptionDefinitionUpdateInputInputObject $shopifyDeliveryFlatRateOptionDefinitionUpdateInputInputObject): static
    {
        $this->flatRate = $shopifyDeliveryFlatRateOptionDefinitionUpdateInputInputObject;

        return $this;
    }

    /**
     * A carrier-calculated shipping option to update.
     */
    public function setCarrierCalculated(ShopifyDeliveryCarrierCalculatedOptionDefinitionUpdateInputInputObject $shopifyDeliveryCarrierCalculatedOptionDefinitionUpdateInputInputObject): static
    {
        $this->carrierCalculated = $shopifyDeliveryCarrierCalculatedOptionDefinitionUpdateInputInputObject;

        return $this;
    }

    /**
     * A value-based shipping option to update.
     */
    public function setValueBased(ShopifyDeliveryValueBasedOptionDefinitionUpdateInputInputObject $shopifyDeliveryValueBasedOptionDefinitionUpdateInputInputObject): static
    {
        $this->valueBased = $shopifyDeliveryValueBasedOptionDefinitionUpdateInputInputObject;

        return $this;
    }

    /**
     * A weight-based shipping option to update.
     */
    public function setWeightBased(ShopifyDeliveryWeightBasedOptionDefinitionUpdateInputInputObject $shopifyDeliveryWeightBasedOptionDefinitionUpdateInputInputObject): static
    {
        $this->weightBased = $shopifyDeliveryWeightBasedOptionDefinitionUpdateInputInputObject;

        return $this;
    }
}

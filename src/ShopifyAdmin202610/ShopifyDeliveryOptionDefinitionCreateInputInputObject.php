<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a shipping option. Provide exactly one option type.
 */
class ShopifyDeliveryOptionDefinitionCreateInputInputObject extends InputObject
{
    protected $flatRate;
    protected $carrierCalculated;
    protected $weightBased;
    protected $valueBased;

    /**
     * A flat rate shipping option.
     */
    public function setFlatRate(ShopifyDeliveryFlatRateOptionDefinitionCreateInputInputObject $shopifyDeliveryFlatRateOptionDefinitionCreateInputInputObject): static
    {
        $this->flatRate = $shopifyDeliveryFlatRateOptionDefinitionCreateInputInputObject;

        return $this;
    }

    /**
     * A carrier-calculated shipping option.
     */
    public function setCarrierCalculated(ShopifyDeliveryCarrierCalculatedOptionDefinitionCreateInputInputObject $shopifyDeliveryCarrierCalculatedOptionDefinitionCreateInputInputObject): static
    {
        $this->carrierCalculated = $shopifyDeliveryCarrierCalculatedOptionDefinitionCreateInputInputObject;

        return $this;
    }

    /**
     * A weight-based shipping option.
     */
    public function setWeightBased(ShopifyDeliveryWeightBasedOptionDefinitionCreateInputInputObject $shopifyDeliveryWeightBasedOptionDefinitionCreateInputInputObject): static
    {
        $this->weightBased = $shopifyDeliveryWeightBasedOptionDefinitionCreateInputInputObject;

        return $this;
    }

    /**
     * A value-based shipping option.
     */
    public function setValueBased(ShopifyDeliveryValueBasedOptionDefinitionCreateInputInputObject $shopifyDeliveryValueBasedOptionDefinitionCreateInputInputObject): static
    {
        $this->valueBased = $shopifyDeliveryValueBasedOptionDefinitionCreateInputInputObject;

        return $this;
    }
}

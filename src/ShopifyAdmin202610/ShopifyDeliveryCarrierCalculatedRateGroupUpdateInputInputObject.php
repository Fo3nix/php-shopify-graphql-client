<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a rate group for a carrier-calculated shipping option.
 */
class ShopifyDeliveryCarrierCalculatedRateGroupUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $carrierServiceId;
    protected $serviceConfiguration;
    protected $absoluteAdjustment;
    protected $percentageAdjustment;
    protected $conditions;
    protected $autoIncludeNewServices;

    /**
     * The ID of the rate group to update
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The ID of the carrier service that provides rates for this shipping option.
     */
    public function setCarrierServiceId($carrierServiceId): static
    {
        $this->carrierServiceId = $carrierServiceId;

        return $this;
    }

    /**
     * Carrier-provided services to include or exclude. Replaces the existing configuration.
     */
    public function setServiceConfiguration(array $serviceConfiguration): static
    {
        $this->serviceConfiguration = $serviceConfiguration;

        return $this;
    }

    /**
     * The flat amount added to or subtracted from carrier rates.
     */
    public function setAbsoluteAdjustment(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->absoluteAdjustment = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The percentage added to or subtracted from carrier rates.
     */
    public function setPercentageAdjustment($percentageAdjustment): static
    {
        $this->percentageAdjustment = $percentageAdjustment;

        return $this;
    }

    /**
     * Collection and origin location conditions for this rate group.
     */
    public function setConditions(ShopifyDeliveryRateConditionsUpdateInputInputObject $shopifyDeliveryRateConditionsUpdateInputInputObject): static
    {
        $this->conditions = $shopifyDeliveryRateConditionsUpdateInputInputObject;

        return $this;
    }

    /**
     * Whether new services from this carrier are automatically included at checkout.
     * When true, buyers see any service that isn't excluded.
     * When false, buyers see only included services.
     */
    public function setAutoIncludeNewServices($autoIncludeNewServices): static
    {
        $this->autoIncludeNewServices = $autoIncludeNewServices;

        return $this;
    }
}

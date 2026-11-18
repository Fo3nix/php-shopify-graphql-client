<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a rate group for a carrier-calculated shipping option.
 */
class ShopifyDeliveryCarrierCalculatedRateGroupCreateInputInputObject extends InputObject
{
    const REQUIRED = ["carrierServiceId"];

    protected $carrierServiceId;
    protected $serviceConfiguration;
    protected $absoluteAdjustment;
    protected $percentageAdjustment;
    protected $conditions;
    protected $autoIncludeNewServices;

    /**
     * The ID of the carrier service to use for this rate group.
     */
    public function setCarrierServiceId($carrierServiceId): static
    {
        $this->carrierServiceId = $carrierServiceId;

        return $this;
    }

    /**
     * Carrier-provided services to include or exclude.
     * Services not listed follow the default behavior based on `autoIncludeNewServices`.
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
    public function setConditions(ShopifyDeliveryRateConditionsCreateInputInputObject $shopifyDeliveryRateConditionsCreateInputInputObject): static
    {
        $this->conditions = $shopifyDeliveryRateConditionsCreateInputInputObject;

        return $this;
    }

    /**
     * Whether new services from this carrier are automatically included at checkout.
     * When omitted, defaults to true. Set to false to offer only explicitly
     * included services for carriers that support service discovery.
     */
    public function setAutoIncludeNewServices($autoIncludeNewServices): static
    {
        $this->autoIncludeNewServices = $autoIncludeNewServices;

        return $this;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a participant.
 */
class ShopifyDeliveryParticipantInputInputObject extends InputObject
{
    protected $id;
    protected $carrierServiceId;
    protected $fixedFee;
    protected $percentageOfRateFee;
    protected $participantServices;
    protected $adaptToNewServices;

    /**
     * The ID of the participant.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The ID of the carrier service for this participant.
     */
    public function setCarrierServiceId($carrierServiceId): static
    {
        $this->carrierServiceId = $carrierServiceId;

        return $this;
    }

    /**
     * The fixed feed that's defined by the merchant for this participant.
     */
    public function setFixedFee(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->fixedFee = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * The merchant-defined percentage-of-rate fee for this participant.
     */
    public function setPercentageOfRateFee($percentageOfRateFee): static
    {
        $this->percentageOfRateFee = $percentageOfRateFee;

        return $this;
    }

    /**
     * The list of shipping services offered by the participant.
     */
    public function setParticipantServices(array $participantServices): static
    {
        $this->participantServices = $participantServices;

        return $this;
    }

    /**
     * Whether to automatically display new shipping services to the customer when a service becomes available.
     */
    public function setAdaptToNewServices($adaptToNewServices): static
    {
        $this->adaptToNewServices = $adaptToNewServices;

        return $this;
    }
}

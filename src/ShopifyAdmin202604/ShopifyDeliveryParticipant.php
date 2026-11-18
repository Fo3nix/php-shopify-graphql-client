<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDeliveryCarrierService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDeliveryParticipantService;

/**
 * A participant defines carrier-calculated rates for shipping services
 * with a possible merchant-defined fixed fee or a percentage-of-rate fee.
 */
class ShopifyDeliveryParticipant implements ShopifyNode
{
    protected $adaptToNewServicesFlag;
    protected $carrierService;
    protected $fixedFee;
    protected $id;
    protected $participantServices;
    protected $percentageOfRateFee;

    
    /**
     * Whether to display new shipping services automatically to the customer when the service becomes available.
     *
     * @return bool
     */
    public function getAdaptToNewServicesFlag(): ?bool
    {
        return $this->adaptToNewServicesFlag;
    }

    
    /**
     * The carrier used for this participant.
     *
     * @return ShopifyDeliveryCarrierService
     */
    public function getCarrierService(): ?ShopifyDeliveryCarrierService
    {
        return $this->carrierService;
    }

    
    /**
     * The merchant-defined fixed fee for this participant.
     *
     * @return ShopifyMoneyV2
     */
    public function getFixedFee(): ?ShopifyMoneyV2
    {
        return $this->fixedFee;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The carrier-specific services offered by the participant, and whether each service is active.
     *
     * @return ShopifyDeliveryParticipantService[]
     */
    public function getParticipantServices(): ?array
    {
        return $this->participantServices;
    }

    
    /**
     * The merchant-defined percentage-of-rate fee for this participant.
     *
     * @return float
     */
    public function getPercentageOfRateFee(): ?float
    {
        return $this->percentageOfRateFee;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['adaptToNewServicesFlag']) && $data['adaptToNewServicesFlag'] !== null) {
                $instance->adaptToNewServicesFlag = $data['adaptToNewServicesFlag'];
            }
            if (isset($data['carrierService']) && $data['carrierService'] !== null) {
                $instance->carrierService = ShopifyDeliveryCarrierService::fromArray($data['carrierService']);
            }
            if (isset($data['fixedFee']) && $data['fixedFee'] !== null) {
                $instance->fixedFee = ShopifyMoneyV2::fromArray($data['fixedFee']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['participantServices']) && $data['participantServices'] !== null) {
                $instance->participantServices = array_map(function($item) { return ShopifyDeliveryParticipantService::fromArray($item); }, $data['participantServices']);
            }
            if (isset($data['percentageOfRateFee']) && $data['percentageOfRateFee'] !== null) {
                $instance->percentageOfRateFee = $data['percentageOfRateFee'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->adaptToNewServicesFlag !== null) {
                $data['adaptToNewServicesFlag'] = $this->adaptToNewServicesFlag;
            }
            if ($this->carrierService !== null) {
                $data['carrierService'] = $this->carrierService->asArray();
            }
            if ($this->fixedFee !== null) {
                $data['fixedFee'] = $this->fixedFee->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->participantServices !== null) {
                $data['participantServices'] = array_map(function($item) { return $item->asArray(); }, $this->participantServices);
            }
            if ($this->percentageOfRateFee !== null) {
                $data['percentageOfRateFee'] = $this->percentageOfRateFee;
            }
            return $data;
        }
}

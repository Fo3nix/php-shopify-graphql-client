<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDeliveryCarrierService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDeliveryParticipantService;

class ShopifyDeliveryParticipant
{
    protected $adaptToNewServicesFlag;
    protected $carrierService;
    protected $fixedFee;
    protected $id;
    protected $participantServices;
    protected $percentageOfRateFee;

    
    /**
     * @return bool
     */
    public function getAdaptToNewServicesFlag()
    {
        return $this->adaptToNewServicesFlag;
    }

    
    /**
     * @return ShopifyDeliveryCarrierService
     */
    public function getCarrierService()
    {
        return $this->carrierService;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getFixedFee()
    {
        return $this->fixedFee;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyDeliveryParticipantService[]
     */
    public function getParticipantServices()
    {
        return $this->participantServices;
    }

    
    /**
     * @return float
     */
    public function getPercentageOfRateFee()
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

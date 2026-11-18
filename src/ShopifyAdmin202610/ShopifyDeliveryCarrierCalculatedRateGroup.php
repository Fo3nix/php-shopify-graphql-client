<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDeliveryCarrierService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDeliveryRateGroupConditions;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDeliveryCarrierCalculatedRateGroupService;

/**
 * A rate group for a carrier-calculated shipping option.
 *
 * Sets the carrier service, rate adjustments,
 * and carrier-provided services offered at checkout.
 */
class ShopifyDeliveryCarrierCalculatedRateGroup implements ShopifyDeliveryOptionDefinitionRateGroup
{
    protected $absoluteAdjustment;
    protected $autoIncludeNewServices;
    protected $carrierService;
    protected $conditions;
    protected $id;
    protected $percentageAdjustment;
    protected $serviceConfiguration;

    
    /**
     * The flat amount added to or subtracted from carrier rates.
     *
     * @return ShopifyMoneyV2
     */
    public function getAbsoluteAdjustment(): ?ShopifyMoneyV2
    {
        return $this->absoluteAdjustment;
    }

    
    /**
     * Whether new services from this carrier are automatically included at checkout.
     * When true, buyers see any service that isn't excluded.
     * When false, buyers see only included services.
     *
     * @return bool
     */
    public function getAutoIncludeNewServices(): ?bool
    {
        return $this->autoIncludeNewServices;
    }

    
    /**
     * The carrier service that provides rates for this rate group.
     *
     * @return ShopifyDeliveryCarrierService
     */
    public function getCarrierService(): ?ShopifyDeliveryCarrierService
    {
        return $this->carrierService;
    }

    
    /**
     * Conditions that limit this rate group to specific collections or origin locations.
     *
     * @return ShopifyDeliveryRateGroupConditions
     */
    public function getConditions(): ?ShopifyDeliveryRateGroupConditions
    {
        return $this->conditions;
    }

    
    /**
     * A globally unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The percentage added to or subtracted from carrier rates.
     * Applied after `absoluteAdjustment`. A value of 10 means +10%.
     *
     * @return int
     */
    public function getPercentageAdjustment(): ?int
    {
        return $this->percentageAdjustment;
    }

    
    /**
     * Carrier-provided services included or excluded for this rate group.
     *
     * @return ShopifyDeliveryCarrierCalculatedRateGroupService[]
     */
    public function getServiceConfiguration(): ?array
    {
        return $this->serviceConfiguration;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['absoluteAdjustment']) && $data['absoluteAdjustment'] !== null) {
                $instance->absoluteAdjustment = ShopifyMoneyV2::fromArray($data['absoluteAdjustment']);
            }
            if (isset($data['autoIncludeNewServices']) && $data['autoIncludeNewServices'] !== null) {
                $instance->autoIncludeNewServices = $data['autoIncludeNewServices'];
            }
            if (isset($data['carrierService']) && $data['carrierService'] !== null) {
                $instance->carrierService = ShopifyDeliveryCarrierService::fromArray($data['carrierService']);
            }
            if (isset($data['conditions']) && $data['conditions'] !== null) {
                $instance->conditions = ShopifyDeliveryRateGroupConditions::fromArray($data['conditions']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['percentageAdjustment']) && $data['percentageAdjustment'] !== null) {
                $instance->percentageAdjustment = $data['percentageAdjustment'];
            }
            if (isset($data['serviceConfiguration']) && $data['serviceConfiguration'] !== null) {
                $instance->serviceConfiguration = array_map(function($item) { return ShopifyDeliveryCarrierCalculatedRateGroupService::fromArray($item); }, $data['serviceConfiguration']);
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
            if ($this->absoluteAdjustment !== null) {
                $data['absoluteAdjustment'] = $this->absoluteAdjustment->asArray();
            }
            if ($this->autoIncludeNewServices !== null) {
                $data['autoIncludeNewServices'] = $this->autoIncludeNewServices;
            }
            if ($this->carrierService !== null) {
                $data['carrierService'] = $this->carrierService->asArray();
            }
            if ($this->conditions !== null) {
                $data['conditions'] = $this->conditions->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->percentageAdjustment !== null) {
                $data['percentageAdjustment'] = $this->percentageAdjustment;
            }
            if ($this->serviceConfiguration !== null) {
                $data['serviceConfiguration'] = array_map(function($item) { return $item->asArray(); }, $this->serviceConfiguration);
            }
            return $data;
        }
}

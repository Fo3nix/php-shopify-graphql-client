<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionCalculatedContract;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionContractCalculationDeliveryOption;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionContractCalculationProjectedOrderTotals;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionContractCalculationDiagnostic;

class ShopifySubscriptionContractCalculationSuccess
{
    protected $calculatedContract;
    protected $deliveryOptions;
    protected $id;
    protected $projectedOrderTotals;
    protected $warnings;
    protected $withMerchandiseCustomizations;

    
    /**
     * @return ShopifySubscriptionCalculatedContract
     */
    public function getCalculatedContract()
    {
        return $this->calculatedContract;
    }

    
    /**
     * @return ShopifySubscriptionContractCalculationDeliveryOption[]
     */
    public function getDeliveryOptions()
    {
        return $this->deliveryOptions;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifySubscriptionContractCalculationProjectedOrderTotals
     */
    public function getProjectedOrderTotals()
    {
        return $this->projectedOrderTotals;
    }

    
    /**
     * @return ShopifySubscriptionContractCalculationDiagnostic[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    
    /**
     * @return bool
     */
    public function getWithMerchandiseCustomizations()
    {
        return $this->withMerchandiseCustomizations;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['calculatedContract']) && $data['calculatedContract'] !== null) {
                $instance->calculatedContract = ShopifySubscriptionCalculatedContract::fromArray($data['calculatedContract']);
            }
            if (isset($data['deliveryOptions']) && $data['deliveryOptions'] !== null) {
                $instance->deliveryOptions = array_map(function($item) { return ShopifySubscriptionContractCalculationDeliveryOption::fromArray($item); }, $data['deliveryOptions']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['projectedOrderTotals']) && $data['projectedOrderTotals'] !== null) {
                $instance->projectedOrderTotals = ShopifySubscriptionContractCalculationProjectedOrderTotals::fromArray($data['projectedOrderTotals']);
            }
            if (isset($data['warnings']) && $data['warnings'] !== null) {
                $instance->warnings = array_map(function($item) { return ShopifySubscriptionContractCalculationDiagnostic::fromArray($item); }, $data['warnings']);
            }
            if (isset($data['withMerchandiseCustomizations']) && $data['withMerchandiseCustomizations'] !== null) {
                $instance->withMerchandiseCustomizations = $data['withMerchandiseCustomizations'];
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
            if ($this->calculatedContract !== null) {
                $data['calculatedContract'] = $this->calculatedContract->asArray();
            }
            if ($this->deliveryOptions !== null) {
                $data['deliveryOptions'] = array_map(function($item) { return $item->asArray(); }, $this->deliveryOptions);
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->projectedOrderTotals !== null) {
                $data['projectedOrderTotals'] = $this->projectedOrderTotals->asArray();
            }
            if ($this->warnings !== null) {
                $data['warnings'] = array_map(function($item) { return $item->asArray(); }, $this->warnings);
            }
            if ($this->withMerchandiseCustomizations !== null) {
                $data['withMerchandiseCustomizations'] = $this->withMerchandiseCustomizations;
            }
            return $data;
        }
}

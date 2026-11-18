<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionCalculatedContract;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionContractCalculationDeliveryOptionHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionContractCalculationProjectedOrderTotals;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionContractCalculationDiagnostic;

/**
 * A subscription contract calculation that has completed successfully.
 */
class ShopifySubscriptionContractCalculationSuccess
{
    protected $calculatedContract;
    protected $deliveryOptions;
    protected $id;
    protected $projectedOrderTotals;
    protected $warnings;
    protected $withMerchandiseCustomizations;

    
    /**
     * The calculated subscription contract. This contract is uncommitted and can be previewed before committing.
     *
     * @return ShopifySubscriptionCalculatedContract
     */
    public function getCalculatedContract(): ?ShopifySubscriptionCalculatedContract
    {
        return $this->calculatedContract;
    }

    
    /**
     * The available delivery options computed during the calculation.
     *
     * @return (ShopifySubscriptionContractCalculationLocalDeliveryOption|ShopifySubscriptionContractCalculationPickupOption|ShopifySubscriptionContractCalculationShippingOption)[]
     */
    public function getDeliveryOptions(): ?array
    {
        return $this->deliveryOptions;
    }

    
    /**
     * The ID of the contract calculation.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Projected order totals (subtotal, delivery, estimated tax, discounts, and grand total) for the calculated contract. Null when the calculation only discovered delivery options for an address rather than calculating committed totals.
     *
     * @return ShopifySubscriptionContractCalculationProjectedOrderTotals
     */
    public function getProjectedOrderTotals(): ?ShopifySubscriptionContractCalculationProjectedOrderTotals
    {
        return $this->projectedOrderTotals;
    }

    
    /**
     * Non-fatal warnings produced during the calculation. The calculation still succeeded; warnings inform the merchant about issues that should be reviewed before committing the contract.
     *
     * @return ShopifySubscriptionContractCalculationDiagnostic[]
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    
    /**
     * Whether merchandise customizations were enabled for the calculation.
     *
     * @return bool
     */
    public function getWithMerchandiseCustomizations(): ?bool
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
                $instance->deliveryOptions = array_map(function($item) { return ShopifySubscriptionContractCalculationDeliveryOptionHydrator::fromArray($item); }, $data['deliveryOptions']);
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
                $data['deliveryOptions'] = array_map(function($item) { return ShopifySubscriptionContractCalculationDeliveryOptionHydrator::toArray($item); }, $this->deliveryOptions);
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

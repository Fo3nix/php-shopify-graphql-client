<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCollectionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDeliveryCarrierCalculatedRateGroupConnection;

/**
 * A shipping option with rates calculated by a carrier service.
 *
 * Carrier-calculated options fetch real-time rates from carriers(e.g., UPS, FedEx) at checkout
 * instead of using merchant-defined fixed prices.
 */
class ShopifyDeliveryCarrierCalculatedOptionDefinition implements ShopifyDeliveryOptionDefinition
{
    protected $currency;
    protected $description;
    protected $freeDeliveryMinimumValue;
    protected $id;
    protected $includedCollections;
    protected $includedLocations;
    protected $isActive;
    protected $rateGroups;

    
    /**
     * The currency used for all money values in this shipping option.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    
    /**
     * Optional description shown to buyers.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The cart subtotal required for free shipping. Null if no threshold is set.
     *
     * @return ShopifyMoneyV2
     */
    public function getFreeDeliveryMinimumValue(): ?ShopifyMoneyV2
    {
        return $this->freeDeliveryMinimumValue;
    }

    
    /**
     * A globally unique ID for this shipping option.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Collections that any rate group in this shipping option applies to.
     *
     * @return ShopifyCollectionConnection
     */
    public function getIncludedCollections(): ?ShopifyCollectionConnection
    {
        return $this->includedCollections;
    }

    
    /**
     * Origin locations that any rate group in this shipping option applies to.
     *
     * @return ShopifyLocationConnection
     */
    public function getIncludedLocations(): ?ShopifyLocationConnection
    {
        return $this->includedLocations;
    }

    
    /**
     * Whether this shipping option is active and shown to buyers.
     *
     * @return bool
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    
    /**
     * The rate groups for this carrier-calculated shipping option.
     *
     * @return ShopifyDeliveryCarrierCalculatedRateGroupConnection
     */
    public function getRateGroups(): ?ShopifyDeliveryCarrierCalculatedRateGroupConnection
    {
        return $this->rateGroups;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['currency']) && $data['currency'] !== null) {
                $instance->currency = $data['currency'];
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['freeDeliveryMinimumValue']) && $data['freeDeliveryMinimumValue'] !== null) {
                $instance->freeDeliveryMinimumValue = ShopifyMoneyV2::fromArray($data['freeDeliveryMinimumValue']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['includedCollections']) && $data['includedCollections'] !== null) {
                $instance->includedCollections = ShopifyCollectionConnection::fromArray($data['includedCollections']);
            }
            if (isset($data['includedLocations']) && $data['includedLocations'] !== null) {
                $instance->includedLocations = ShopifyLocationConnection::fromArray($data['includedLocations']);
            }
            if (isset($data['isActive']) && $data['isActive'] !== null) {
                $instance->isActive = $data['isActive'];
            }
            if (isset($data['rateGroups']) && $data['rateGroups'] !== null) {
                $instance->rateGroups = ShopifyDeliveryCarrierCalculatedRateGroupConnection::fromArray($data['rateGroups']);
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
            if ($this->currency !== null) {
                $data['currency'] = $this->currency;
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->freeDeliveryMinimumValue !== null) {
                $data['freeDeliveryMinimumValue'] = $this->freeDeliveryMinimumValue->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->includedCollections !== null) {
                $data['includedCollections'] = $this->includedCollections->asArray();
            }
            if ($this->includedLocations !== null) {
                $data['includedLocations'] = $this->includedLocations->asArray();
            }
            if ($this->isActive !== null) {
                $data['isActive'] = $this->isActive;
            }
            if ($this->rateGroups !== null) {
                $data['rateGroups'] = $this->rateGroups->asArray();
            }
            return $data;
        }
}

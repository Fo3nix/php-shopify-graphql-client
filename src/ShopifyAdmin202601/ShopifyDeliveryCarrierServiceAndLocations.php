<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDeliveryCarrierService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyLocation;

/**
 * Links a [`DeliveryCarrierService`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DeliveryCarrierService) with the associated shop [locations](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) where it can calculate shipping rates. Each pairing indicates the locations that can use a specific carrier service for real-time rate calculations during checkout.
 *
 * The carrier service provides the shipping rate calculation logic, while the locations represent physical or virtual fulfillment points that can ship orders using that service.
 */
class ShopifyDeliveryCarrierServiceAndLocations
{
    protected $carrierService;
    protected $locations;

    
    /**
     * The carrier service.
     *
     * @return ShopifyDeliveryCarrierService
     */
    public function getCarrierService(): ?ShopifyDeliveryCarrierService
    {
        return $this->carrierService;
    }

    
    /**
     * The list of locations that support this carrier service.
     *
     * @return ShopifyLocation[]
     */
    public function getLocations(): ?array
    {
        return $this->locations;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['carrierService']) && $data['carrierService'] !== null) {
                $instance->carrierService = ShopifyDeliveryCarrierService::fromArray($data['carrierService']);
            }
            if (isset($data['locations']) && $data['locations'] !== null) {
                $instance->locations = array_map(function($item) { return ShopifyLocation::fromArray($item); }, $data['locations']);
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
            if ($this->carrierService !== null) {
                $data['carrierService'] = $this->carrierService->asArray();
            }
            if ($this->locations !== null) {
                $data['locations'] = array_map(function($item) { return $item->asArray(); }, $this->locations);
            }
            return $data;
        }
}

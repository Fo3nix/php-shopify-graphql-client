<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryCarrierService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Location;

class DeliveryCarrierServiceAndLocations
{
    protected $carrierService;
    protected $locations;

    
    /**
     * @return DeliveryCarrierService
     */
    public function getCarrierService()
    {
        return $this->carrierService;
    }

    
    /**
     * @return Location[]
     */
    public function getLocations()
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
                $instance->carrierService = DeliveryCarrierService::fromArray($data['carrierService']);
            }
            if (isset($data['locations']) && $data['locations'] !== null) {
                $instance->locations = array_map(function($item) { return Location::fromArray($item); }, $data['locations']);
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

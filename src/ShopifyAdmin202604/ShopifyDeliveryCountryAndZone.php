<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDeliveryCountry;

class ShopifyDeliveryCountryAndZone
{
    protected $country;
    protected $zone;

    
    /**
     * @return ShopifyDeliveryCountry
     */
    public function getCountry()
    {
        return $this->country;
    }

    
    /**
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['country']) && $data['country'] !== null) {
                $instance->country = ShopifyDeliveryCountry::fromArray($data['country']);
            }
            if (isset($data['zone']) && $data['zone'] !== null) {
                $instance->zone = $data['zone'];
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
            if ($this->country !== null) {
                $data['country'] = $this->country->asArray();
            }
            if ($this->zone !== null) {
                $data['zone'] = $this->zone;
            }
            return $data;
        }
}

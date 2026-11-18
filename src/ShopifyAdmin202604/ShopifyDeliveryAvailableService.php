<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDeliveryCountryCodesOrRestOfWorld;

/**
 * A shipping service and a list of countries that the service is available for.
 */
class ShopifyDeliveryAvailableService
{
    protected $countries;
    protected $name;

    
    /**
     * The countries the service provider ships to.
     *
     * @return ShopifyDeliveryCountryCodesOrRestOfWorld
     */
    public function getCountries(): ?ShopifyDeliveryCountryCodesOrRestOfWorld
    {
        return $this->countries;
    }

    
    /**
     * The name of the service.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['countries']) && $data['countries'] !== null) {
                $instance->countries = ShopifyDeliveryCountryCodesOrRestOfWorld::fromArray($data['countries']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
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
            if ($this->countries !== null) {
                $data['countries'] = $this->countries->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            return $data;
        }
}

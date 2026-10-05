<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFont
{
    protected $sources;
    protected $weight;

    
    /**
     * @return string
     */
    public function getSources()
    {
        return $this->sources;
    }

    
    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['sources']) && $data['sources'] !== null) {
                $instance->sources = $data['sources'];
            }
            if (isset($data['weight']) && $data['weight'] !== null) {
                $instance->weight = $data['weight'];
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
            if ($this->sources !== null) {
                $data['sources'] = $this->sources;
            }
            if ($this->weight !== null) {
                $data['weight'] = $this->weight;
            }
            return $data;
        }
}

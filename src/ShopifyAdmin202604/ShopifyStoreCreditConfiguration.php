<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * The store credit configuration for a shop.
 */
class ShopifyStoreCreditConfiguration
{
    protected $storeCreditEnabled;

    
    /**
     * Whether store credit is enabled for customers on checkout.
     *
     * @return bool
     */
    public function getStoreCreditEnabled(): ?bool
    {
        return $this->storeCreditEnabled;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['storeCreditEnabled']) && $data['storeCreditEnabled'] !== null) {
                $instance->storeCreditEnabled = $data['storeCreditEnabled'];
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
            if ($this->storeCreditEnabled !== null) {
                $data['storeCreditEnabled'] = $this->storeCreditEnabled;
            }
            return $data;
        }
}

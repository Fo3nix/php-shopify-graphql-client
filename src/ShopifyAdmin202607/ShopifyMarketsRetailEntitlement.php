<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMarketsCatalogsEntitlement;

class ShopifyMarketsRetailEntitlement
{
    protected $catalogs;
    protected $enabled;

    
    /**
     * @return ShopifyMarketsCatalogsEntitlement
     */
    public function getCatalogs()
    {
        return $this->catalogs;
    }

    
    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['catalogs']) && $data['catalogs'] !== null) {
                $instance->catalogs = ShopifyMarketsCatalogsEntitlement::fromArray($data['catalogs']);
            }
            if (isset($data['enabled']) && $data['enabled'] !== null) {
                $instance->enabled = $data['enabled'];
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
            if ($this->catalogs !== null) {
                $data['catalogs'] = $this->catalogs->asArray();
            }
            if ($this->enabled !== null) {
                $data['enabled'] = $this->enabled;
            }
            return $data;
        }
}

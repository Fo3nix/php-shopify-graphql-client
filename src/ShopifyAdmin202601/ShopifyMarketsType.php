<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMarketsB2BEntitlement;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMarketsRegionsEntitlement;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMarketsRetailEntitlement;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMarketsThemesEntitlement;

class ShopifyMarketsType
{
    protected $b2b;
    protected $regions;
    protected $retail;
    protected $themes;

    
    /**
     * @return ShopifyMarketsB2BEntitlement
     */
    public function getB2b()
    {
        return $this->b2b;
    }

    
    /**
     * @return ShopifyMarketsRegionsEntitlement
     */
    public function getRegions()
    {
        return $this->regions;
    }

    
    /**
     * @return ShopifyMarketsRetailEntitlement
     */
    public function getRetail()
    {
        return $this->retail;
    }

    
    /**
     * @return ShopifyMarketsThemesEntitlement
     */
    public function getThemes()
    {
        return $this->themes;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['b2b']) && $data['b2b'] !== null) {
                $instance->b2b = ShopifyMarketsB2BEntitlement::fromArray($data['b2b']);
            }
            if (isset($data['regions']) && $data['regions'] !== null) {
                $instance->regions = ShopifyMarketsRegionsEntitlement::fromArray($data['regions']);
            }
            if (isset($data['retail']) && $data['retail'] !== null) {
                $instance->retail = ShopifyMarketsRetailEntitlement::fromArray($data['retail']);
            }
            if (isset($data['themes']) && $data['themes'] !== null) {
                $instance->themes = ShopifyMarketsThemesEntitlement::fromArray($data['themes']);
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
            if ($this->b2b !== null) {
                $data['b2b'] = $this->b2b->asArray();
            }
            if ($this->regions !== null) {
                $data['regions'] = $this->regions->asArray();
            }
            if ($this->retail !== null) {
                $data['retail'] = $this->retail->asArray();
            }
            if ($this->themes !== null) {
                $data['themes'] = $this->themes->asArray();
            }
            return $data;
        }
}

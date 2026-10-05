<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarketCatalogConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyResolvedPriceInclusivity;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarketWebPresenceConnection;

class ShopifyMarketsResolvedValues
{
    protected $catalogs;
    protected $currencyCode;
    protected $priceInclusivity;
    protected $webPresences;

    
    /**
     * @return ShopifyMarketCatalogConnection
     */
    public function getCatalogs()
    {
        return $this->catalogs;
    }

    
    /**
     * @return ShopifyCurrencyCodeEnumObject
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    
    /**
     * @return ShopifyResolvedPriceInclusivity
     */
    public function getPriceInclusivity()
    {
        return $this->priceInclusivity;
    }

    
    /**
     * @return ShopifyMarketWebPresenceConnection
     */
    public function getWebPresences()
    {
        return $this->webPresences;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['catalogs']) && $data['catalogs'] !== null) {
                $instance->catalogs = ShopifyMarketCatalogConnection::fromArray($data['catalogs']);
            }
            if (isset($data['currencyCode']) && $data['currencyCode'] !== null) {
                $instance->currencyCode = $data['currencyCode'];
            }
            if (isset($data['priceInclusivity']) && $data['priceInclusivity'] !== null) {
                $instance->priceInclusivity = ShopifyResolvedPriceInclusivity::fromArray($data['priceInclusivity']);
            }
            if (isset($data['webPresences']) && $data['webPresences'] !== null) {
                $instance->webPresences = ShopifyMarketWebPresenceConnection::fromArray($data['webPresences']);
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
            if ($this->currencyCode !== null) {
                $data['currencyCode'] = $this->currencyCode;
            }
            if ($this->priceInclusivity !== null) {
                $data['priceInclusivity'] = $this->priceInclusivity->asArray();
            }
            if ($this->webPresences !== null) {
                $data['webPresences'] = $this->webPresences->asArray();
            }
            return $data;
        }
}

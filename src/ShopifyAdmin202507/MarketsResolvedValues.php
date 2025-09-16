<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketCatalogConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ResolvedPriceInclusivity;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketWebPresenceConnection;

class MarketsResolvedValues
{
    protected $catalogs;
    protected $currencyCode;
    protected $priceInclusivity;
    protected $webPresences;

    
    /**
     * @return MarketCatalogConnection
     */
    public function getCatalogs()
    {
        return $this->catalogs;
    }

    
    /**
     * @return CurrencyCodeEnumObject
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    
    /**
     * @return ResolvedPriceInclusivity
     */
    public function getPriceInclusivity()
    {
        return $this->priceInclusivity;
    }

    
    /**
     * @return MarketWebPresenceConnection
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
                $instance->catalogs = MarketCatalogConnection::fromArray($data['catalogs']);
            }
            if (isset($data['currencyCode']) && $data['currencyCode'] !== null) {
                $instance->currencyCode = $data['currencyCode'];
            }
            if (isset($data['priceInclusivity']) && $data['priceInclusivity'] !== null) {
                $instance->priceInclusivity = ResolvedPriceInclusivity::fromArray($data['priceInclusivity']);
            }
            if (isset($data['webPresences']) && $data['webPresences'] !== null) {
                $instance->webPresences = MarketWebPresenceConnection::fromArray($data['webPresences']);
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

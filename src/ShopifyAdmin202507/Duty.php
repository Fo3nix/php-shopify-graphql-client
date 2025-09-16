<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\TaxLine;

class Duty
{
    protected $countryCodeOfOrigin;
    protected $harmonizedSystemCode;
    protected $id;
    protected $price;
    protected $taxLines;

    
    /**
     * @return CountryCodeEnumObject
     */
    public function getCountryCodeOfOrigin()
    {
        return $this->countryCodeOfOrigin;
    }

    
    /**
     * @return string
     */
    public function getHarmonizedSystemCode()
    {
        return $this->harmonizedSystemCode;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return MoneyBag
     */
    public function getPrice()
    {
        return $this->price;
    }

    
    /**
     * @return TaxLine[]
     */
    public function getTaxLines()
    {
        return $this->taxLines;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['countryCodeOfOrigin']) && $data['countryCodeOfOrigin'] !== null) {
                $instance->countryCodeOfOrigin = $data['countryCodeOfOrigin'];
            }
            if (isset($data['harmonizedSystemCode']) && $data['harmonizedSystemCode'] !== null) {
                $instance->harmonizedSystemCode = $data['harmonizedSystemCode'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = MoneyBag::fromArray($data['price']);
            }
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return TaxLine::fromArray($item); }, $data['taxLines']);
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
            if ($this->countryCodeOfOrigin !== null) {
                $data['countryCodeOfOrigin'] = $this->countryCodeOfOrigin;
            }
            if ($this->harmonizedSystemCode !== null) {
                $data['harmonizedSystemCode'] = $this->harmonizedSystemCode;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->price !== null) {
                $data['price'] = $this->price->asArray();
            }
            if ($this->taxLines !== null) {
                $data['taxLines'] = array_map(function($item) { return $item->asArray(); }, $this->taxLines);
            }
            return $data;
        }
}

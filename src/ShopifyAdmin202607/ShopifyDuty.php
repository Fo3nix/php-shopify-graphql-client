<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyTaxLine;

/**
 * The duty details for a line item.
 */
class ShopifyDuty implements ShopifyNode
{
    protected $countryCodeOfOrigin;
    protected $harmonizedSystemCode;
    protected $id;
    protected $price;
    protected $taxLines;

    
    /**
     * The ISO 3166-1 alpha-2 country code of the country of origin used in calculating the duty.
     *
     * @return string A ShopifyCountryCodeEnumObject value
     */
    public function getCountryCodeOfOrigin(): ?string
    {
        return $this->countryCodeOfOrigin;
    }

    
    /**
     * The harmonized system code of the item used in calculating the duty.
     *
     * @return string
     */
    public function getHarmonizedSystemCode(): ?string
    {
        return $this->harmonizedSystemCode;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The amount of the duty.
     *
     * @return ShopifyMoneyBag
     */
    public function getPrice(): ?ShopifyMoneyBag
    {
        return $this->price;
    }

    
    /**
     * A list of taxes charged on the duty.
     *
     * @return ShopifyTaxLine[]
     */
    public function getTaxLines(): ?array
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
                $instance->price = ShopifyMoneyBag::fromArray($data['price']);
            }
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return ShopifyTaxLine::fromArray($item); }, $data['taxLines']);
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

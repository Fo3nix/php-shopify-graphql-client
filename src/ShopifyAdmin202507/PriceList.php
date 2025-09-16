<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PriceListParent;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PriceListPriceConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\QuantityRuleConnection;

class PriceList
{
    protected $catalog;
    protected $currency;
    protected $fixedPricesCount;
    protected $id;
    protected $name;
    protected $parent;
    protected $prices;
    protected $quantityRules;

    
    /**
     * @return mixed
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    
    /**
     * @return CurrencyCodeEnumObject
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    
    /**
     * @return int
     */
    public function getFixedPricesCount()
    {
        return $this->fixedPricesCount;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return PriceListParent
     */
    public function getParent()
    {
        return $this->parent;
    }

    
    /**
     * @return PriceListPriceConnection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    
    /**
     * @return QuantityRuleConnection
     */
    public function getQuantityRules()
    {
        return $this->quantityRules;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['catalog']) && $data['catalog'] !== null) {
                $instance->catalog = $data['catalog'];
            }
            if (isset($data['currency']) && $data['currency'] !== null) {
                $instance->currency = $data['currency'];
            }
            if (isset($data['fixedPricesCount']) && $data['fixedPricesCount'] !== null) {
                $instance->fixedPricesCount = $data['fixedPricesCount'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['parent']) && $data['parent'] !== null) {
                $instance->parent = PriceListParent::fromArray($data['parent']);
            }
            if (isset($data['prices']) && $data['prices'] !== null) {
                $instance->prices = PriceListPriceConnection::fromArray($data['prices']);
            }
            if (isset($data['quantityRules']) && $data['quantityRules'] !== null) {
                $instance->quantityRules = QuantityRuleConnection::fromArray($data['quantityRules']);
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
            if ($this->catalog !== null) {
                $data['catalog'] = $this->catalog;
            }
            if ($this->currency !== null) {
                $data['currency'] = $this->currency;
            }
            if ($this->fixedPricesCount !== null) {
                $data['fixedPricesCount'] = $this->fixedPricesCount;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->parent !== null) {
                $data['parent'] = $this->parent->asArray();
            }
            if ($this->prices !== null) {
                $data['prices'] = $this->prices->asArray();
            }
            if ($this->quantityRules !== null) {
                $data['quantityRules'] = $this->quantityRules->asArray();
            }
            return $data;
        }
}

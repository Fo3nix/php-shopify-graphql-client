<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;

/**
 * A collection of monetary values in their respective currencies. Used throughout the API for multi-currency pricing and transactions, when an amount in the shop's currency is converted to the customer's currency of choice. The `presentmentMoney` field contains the amount in the customer's selected currency. The `shopMoney` field contains the equivalent in the shop's base currency.
 */
class ShopifyMoneyBag
{
    protected $presentmentMoney;
    protected $shopMoney;

    
    /**
     * Amount in presentment currency.
     *
     * @return ShopifyMoneyV2
     */
    public function getPresentmentMoney(): ?ShopifyMoneyV2
    {
        return $this->presentmentMoney;
    }

    
    /**
     * Amount in shop currency.
     *
     * @return ShopifyMoneyV2
     */
    public function getShopMoney(): ?ShopifyMoneyV2
    {
        return $this->shopMoney;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['presentmentMoney']) && $data['presentmentMoney'] !== null) {
                $instance->presentmentMoney = ShopifyMoneyV2::fromArray($data['presentmentMoney']);
            }
            if (isset($data['shopMoney']) && $data['shopMoney'] !== null) {
                $instance->shopMoney = ShopifyMoneyV2::fromArray($data['shopMoney']);
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
            if ($this->presentmentMoney !== null) {
                $data['presentmentMoney'] = $this->presentmentMoney->asArray();
            }
            if ($this->shopMoney !== null) {
                $data['shopMoney'] = $this->shopMoney->asArray();
            }
            return $data;
        }
}

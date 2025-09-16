<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;

class MoneyBag
{
    protected $presentmentMoney;
    protected $shopMoney;

    
    /**
     * @return MoneyV2
     */
    public function getPresentmentMoney()
    {
        return $this->presentmentMoney;
    }

    
    /**
     * @return MoneyV2
     */
    public function getShopMoney()
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
                $instance->presentmentMoney = MoneyV2::fromArray($data['presentmentMoney']);
            }
            if (isset($data['shopMoney']) && $data['shopMoney'] !== null) {
                $instance->shopMoney = MoneyV2::fromArray($data['shopMoney']);
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

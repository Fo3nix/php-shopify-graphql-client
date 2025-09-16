<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopPayPaymentRequestDiscount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;

class ShopPayPaymentRequestTotalShippingPrice
{
    protected $discounts;
    protected $finalTotal;
    protected $originalTotal;

    
    /**
     * @return ShopPayPaymentRequestDiscount[]
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    
    /**
     * @return MoneyV2
     */
    public function getFinalTotal()
    {
        return $this->finalTotal;
    }

    
    /**
     * @return MoneyV2
     */
    public function getOriginalTotal()
    {
        return $this->originalTotal;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['discounts']) && $data['discounts'] !== null) {
                $instance->discounts = array_map(function($item) { return ShopPayPaymentRequestDiscount::fromArray($item); }, $data['discounts']);
            }
            if (isset($data['finalTotal']) && $data['finalTotal'] !== null) {
                $instance->finalTotal = MoneyV2::fromArray($data['finalTotal']);
            }
            if (isset($data['originalTotal']) && $data['originalTotal'] !== null) {
                $instance->originalTotal = MoneyV2::fromArray($data['originalTotal']);
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
            if ($this->discounts !== null) {
                $data['discounts'] = array_map(function($item) { return $item->asArray(); }, $this->discounts);
            }
            if ($this->finalTotal !== null) {
                $data['finalTotal'] = $this->finalTotal->asArray();
            }
            if ($this->originalTotal !== null) {
                $data['originalTotal'] = $this->originalTotal->asArray();
            }
            return $data;
        }
}

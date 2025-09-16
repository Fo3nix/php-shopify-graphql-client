<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class DiscountCombinesWith
{
    protected $orderDiscounts;
    protected $productDiscounts;
    protected $shippingDiscounts;

    
    /**
     * @return bool
     */
    public function getOrderDiscounts()
    {
        return $this->orderDiscounts;
    }

    
    /**
     * @return bool
     */
    public function getProductDiscounts()
    {
        return $this->productDiscounts;
    }

    
    /**
     * @return bool
     */
    public function getShippingDiscounts()
    {
        return $this->shippingDiscounts;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['orderDiscounts']) && $data['orderDiscounts'] !== null) {
                $instance->orderDiscounts = $data['orderDiscounts'];
            }
            if (isset($data['productDiscounts']) && $data['productDiscounts'] !== null) {
                $instance->productDiscounts = $data['productDiscounts'];
            }
            if (isset($data['shippingDiscounts']) && $data['shippingDiscounts'] !== null) {
                $instance->shippingDiscounts = $data['shippingDiscounts'];
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
            if ($this->orderDiscounts !== null) {
                $data['orderDiscounts'] = $this->orderDiscounts;
            }
            if ($this->productDiscounts !== null) {
                $data['productDiscounts'] = $this->productDiscounts;
            }
            if ($this->shippingDiscounts !== null) {
                $data['shippingDiscounts'] = $this->shippingDiscounts;
            }
            return $data;
        }
}

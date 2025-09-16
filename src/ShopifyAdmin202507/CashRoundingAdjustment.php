<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;

class CashRoundingAdjustment
{
    protected $paymentSet;
    protected $refundSet;

    
    /**
     * @return MoneyBag
     */
    public function getPaymentSet()
    {
        return $this->paymentSet;
    }

    
    /**
     * @return MoneyBag
     */
    public function getRefundSet()
    {
        return $this->refundSet;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['paymentSet']) && $data['paymentSet'] !== null) {
                $instance->paymentSet = MoneyBag::fromArray($data['paymentSet']);
            }
            if (isset($data['refundSet']) && $data['refundSet'] !== null) {
                $instance->refundSet = MoneyBag::fromArray($data['refundSet']);
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
            if ($this->paymentSet !== null) {
                $data['paymentSet'] = $this->paymentSet->asArray();
            }
            if ($this->refundSet !== null) {
                $data['refundSet'] = $this->refundSet->asArray();
            }
            return $data;
        }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyBag;

/**
 * The rounding adjustment applied to total payment or refund received for an Order involving cash payments.
 */
class ShopifyCashRoundingAdjustment
{
    protected $paymentSet;
    protected $refundSet;

    
    /**
     * The rounding adjustment that can be applied to totalReceived for an Order involving cash payments in shop and presentment currencies. Could be a positive or negative value. Value is 0 if there's no rounding, or for non-cash payments.
     *
     * @return ShopifyMoneyBag
     */
    public function getPaymentSet(): ?ShopifyMoneyBag
    {
        return $this->paymentSet;
    }

    
    /**
     * The rounding adjustment that can be applied to totalRefunded for an Order involving cash payments in shop and presentment currencies. Could be a positive or negative value. Value is 0 if there's no rounding, or for non-cash refunds.
     *
     * @return ShopifyMoneyBag
     */
    public function getRefundSet(): ?ShopifyMoneyBag
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
                $instance->paymentSet = ShopifyMoneyBag::fromArray($data['paymentSet']);
            }
            if (isset($data['refundSet']) && $data['refundSet'] !== null) {
                $instance->refundSet = ShopifyMoneyBag::fromArray($data['refundSet']);
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

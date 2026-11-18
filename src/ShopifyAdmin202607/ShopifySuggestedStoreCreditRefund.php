<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;
use Carbon\Carbon;

/**
 * The suggested values for a refund to store credit.
 */
class ShopifySuggestedStoreCreditRefund implements ShopifySuggestedRefundMethod
{
    protected $amount;
    protected $expiresAt;
    protected $maximumRefundable;

    
    /**
     * The suggested amount to refund in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getAmount(): ?ShopifyMoneyBag
    {
        return $this->amount;
    }

    
    /**
     * The suggested expiration date for the store credit.
     *
     * @return Carbon
     */
    public function getExpiresAt(): ?Carbon
    {
        return $this->expiresAt;
    }

    
    /**
     * The maximum available amount to refund in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getMaximumRefundable(): ?ShopifyMoneyBag
    {
        return $this->maximumRefundable;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amount']) && $data['amount'] !== null) {
                $instance->amount = ShopifyMoneyBag::fromArray($data['amount']);
            }
            if (isset($data['expiresAt']) && $data['expiresAt'] !== null) {
                $instance->expiresAt = new Carbon($data['expiresAt']);
            }
            if (isset($data['maximumRefundable']) && $data['maximumRefundable'] !== null) {
                $instance->maximumRefundable = ShopifyMoneyBag::fromArray($data['maximumRefundable']);
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
            if ($this->amount !== null) {
                $data['amount'] = $this->amount->asArray();
            }
            if ($this->expiresAt !== null) {
                $data['expiresAt'] = $this->expiresAt->toIso8601String();
            }
            if ($this->maximumRefundable !== null) {
                $data['maximumRefundable'] = $this->maximumRefundable->asArray();
            }
            return $data;
        }
}

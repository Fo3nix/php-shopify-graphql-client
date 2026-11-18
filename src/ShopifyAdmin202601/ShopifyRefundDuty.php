<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDuty;

/**
 * Represents a refunded duty.
 */
class ShopifyRefundDuty
{
    protected $amountSet;
    protected $originalDuty;

    
    /**
     * The amount of a refunded duty in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getAmountSet(): ?ShopifyMoneyBag
    {
        return $this->amountSet;
    }

    
    /**
     * The duty associated with this refunded duty.
     *
     * @return ShopifyDuty
     */
    public function getOriginalDuty(): ?ShopifyDuty
    {
        return $this->originalDuty;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amountSet']) && $data['amountSet'] !== null) {
                $instance->amountSet = ShopifyMoneyBag::fromArray($data['amountSet']);
            }
            if (isset($data['originalDuty']) && $data['originalDuty'] !== null) {
                $instance->originalDuty = ShopifyDuty::fromArray($data['originalDuty']);
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
            if ($this->amountSet !== null) {
                $data['amountSet'] = $this->amountSet->asArray();
            }
            if ($this->originalDuty !== null) {
                $data['originalDuty'] = $this->originalDuty->asArray();
            }
            return $data;
        }
}

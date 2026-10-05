<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDuty;

class ShopifyRefundDuty
{
    protected $amountSet;
    protected $originalDuty;

    
    /**
     * @return ShopifyMoneyBag
     */
    public function getAmountSet()
    {
        return $this->amountSet;
    }

    
    /**
     * @return ShopifyDuty
     */
    public function getOriginalDuty()
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

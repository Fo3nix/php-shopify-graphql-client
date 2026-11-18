<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyBag;

/**
 * A return shipping fee is a fee captured as part of a return to cover the costs of shipping the return.
 */
class ShopifyReturnShippingFee implements ShopifyFee
{
    protected $amountSet;
    protected $finalizedTaxAmountSet;
    protected $id;

    
    /**
     * The amount of the return shipping fee, in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getAmountSet(): ?ShopifyMoneyBag
    {
        return $this->amountSet;
    }

    
    /**
     * The finalized tax amount on the return shipping fee, in shop and presentment currencies. Locked in when the return is processed, and can differ from the estimate in `CalculatedReturnShippingFee.taxAmountSet`. Returns `null` until the return is processed, and zero if no tax applied to the fee.
     *
     * @return ShopifyMoneyBag
     */
    public function getFinalizedTaxAmountSet(): ?ShopifyMoneyBag
    {
        return $this->finalizedTaxAmountSet;
    }

    
    /**
     * The unique ID for the Fee.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
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
            if (isset($data['finalizedTaxAmountSet']) && $data['finalizedTaxAmountSet'] !== null) {
                $instance->finalizedTaxAmountSet = ShopifyMoneyBag::fromArray($data['finalizedTaxAmountSet']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
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
            if ($this->finalizedTaxAmountSet !== null) {
                $data['finalizedTaxAmountSet'] = $this->finalizedTaxAmountSet->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            return $data;
        }
}

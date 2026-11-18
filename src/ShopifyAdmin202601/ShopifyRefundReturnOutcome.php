<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySuggestedRefundMethodHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySuggestedRefundMethod;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifySuggestedOrderTransaction;

/**
 * The financial transfer details for a return outcome that results in a refund.
 */
class ShopifyRefundReturnOutcome
{
    protected $amount;
    protected $suggestedRefundMethods;
    protected $suggestedTransactions;

    
    /**
     * The total monetary value to be refunded in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getAmount(): ?ShopifyMoneyBag
    {
        return $this->amount;
    }

    
    /**
     * A list of suggested refund methods.
     *
     * @return ShopifySuggestedRefundMethod[]
     */
    public function getSuggestedRefundMethods(): ?array
    {
        return $this->suggestedRefundMethods;
    }

    
    /**
     * A list of suggested order transactions.
     *
     * @return ShopifySuggestedOrderTransaction[]
     */
    public function getSuggestedTransactions(): ?array
    {
        return $this->suggestedTransactions;
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
            if (isset($data['suggestedRefundMethods']) && $data['suggestedRefundMethods'] !== null) {
                $instance->suggestedRefundMethods = array_map(function($item) { return ShopifySuggestedRefundMethodHydrator::fromArray($item); }, $data['suggestedRefundMethods']);
            }
            if (isset($data['suggestedTransactions']) && $data['suggestedTransactions'] !== null) {
                $instance->suggestedTransactions = array_map(function($item) { return ShopifySuggestedOrderTransaction::fromArray($item); }, $data['suggestedTransactions']);
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
            if ($this->suggestedRefundMethods !== null) {
                $data['suggestedRefundMethods'] = array_map(function($item) { return ShopifySuggestedRefundMethodHydrator::toArray($item); }, $this->suggestedRefundMethods);
            }
            if ($this->suggestedTransactions !== null) {
                $data['suggestedTransactions'] = array_map(function($item) { return $item->asArray(); }, $this->suggestedTransactions);
            }
            return $data;
        }
}

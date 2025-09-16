<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SuggestedOrderTransaction;

class RefundReturnOutcome
{
    protected $amount;
    protected $suggestedRefundMethods;
    protected $suggestedTransactions;

    
    /**
     * @return MoneyBag
     */
    public function getAmount()
    {
        return $this->amount;
    }

    
    /**
     * @return mixed[]
     */
    public function getSuggestedRefundMethods()
    {
        return $this->suggestedRefundMethods;
    }

    
    /**
     * @return SuggestedOrderTransaction[]
     */
    public function getSuggestedTransactions()
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
                $instance->amount = MoneyBag::fromArray($data['amount']);
            }
            if (isset($data['suggestedRefundMethods']) && $data['suggestedRefundMethods'] !== null) {
                $instance->suggestedRefundMethods = $data['suggestedRefundMethods'];
            }
            if (isset($data['suggestedTransactions']) && $data['suggestedTransactions'] !== null) {
                $instance->suggestedTransactions = array_map(function($item) { return SuggestedOrderTransaction::fromArray($item); }, $data['suggestedTransactions']);
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
                $data['suggestedRefundMethods'] = $this->suggestedRefundMethods;
            }
            if ($this->suggestedTransactions !== null) {
                $data['suggestedTransactions'] = array_map(function($item) { return $item->asArray(); }, $this->suggestedTransactions);
            }
            return $data;
        }
}

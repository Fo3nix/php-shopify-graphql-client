<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRequestedOrderEditFinancialSummary;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCalculatedRequestedOrderEditLineItems;

class ShopifyCalculatedRequestedOrderEdit
{
    protected $financialSummary;
    protected $lineItems;

    
    /**
     * @return ShopifyRequestedOrderEditFinancialSummary
     */
    public function getFinancialSummary()
    {
        return $this->financialSummary;
    }

    
    /**
     * @return ShopifyCalculatedRequestedOrderEditLineItems
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['financialSummary']) && $data['financialSummary'] !== null) {
                $instance->financialSummary = ShopifyRequestedOrderEditFinancialSummary::fromArray($data['financialSummary']);
            }
            if (isset($data['lineItems']) && $data['lineItems'] !== null) {
                $instance->lineItems = ShopifyCalculatedRequestedOrderEditLineItems::fromArray($data['lineItems']);
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
            if ($this->financialSummary !== null) {
                $data['financialSummary'] = $this->financialSummary->asArray();
            }
            if ($this->lineItems !== null) {
                $data['lineItems'] = $this->lineItems->asArray();
            }
            return $data;
        }
}

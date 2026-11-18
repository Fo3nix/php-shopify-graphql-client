<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRequestedOrderEditFinancialSummary;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCalculatedRequestedOrderEditLineItems;

/**
 * The calculated financial outcome of a requested order edit based on the line items requested for editing.
 */
class ShopifyCalculatedRequestedOrderEdit
{
    protected $financialSummary;
    protected $lineItems;

    
    /**
     * A breakdown of the monetary values for the calculated edit.
     *
     * @return ShopifyRequestedOrderEditFinancialSummary
     */
    public function getFinancialSummary(): ?ShopifyRequestedOrderEditFinancialSummary
    {
        return $this->financialSummary;
    }

    
    /**
     * The line item changes being processed for a requested order edit, grouped by the type of change.
     *
     * @return ShopifyCalculatedRequestedOrderEditLineItems
     */
    public function getLineItems(): ?ShopifyCalculatedRequestedOrderEditLineItems
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

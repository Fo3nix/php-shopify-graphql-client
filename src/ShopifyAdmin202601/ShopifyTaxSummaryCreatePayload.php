<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyOrder;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyTaxSummaryCreateUserError;

/**
 * Return type for `taxSummaryCreate` mutation.
 */
class ShopifyTaxSummaryCreatePayload
{
    protected $enqueuedOrders;
    protected $userErrors;

    
    /**
     * A list of orders that were successfully enqueued to create a tax summary.
     *
     * @return ShopifyOrder[]
     */
    public function getEnqueuedOrders(): ?array
    {
        return $this->enqueuedOrders;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyTaxSummaryCreateUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['enqueuedOrders']) && $data['enqueuedOrders'] !== null) {
                $instance->enqueuedOrders = array_map(function($item) { return ShopifyOrder::fromArray($item); }, $data['enqueuedOrders']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyTaxSummaryCreateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->enqueuedOrders !== null) {
                $data['enqueuedOrders'] = array_map(function($item) { return $item->asArray(); }, $this->enqueuedOrders);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShippingLabelPurchaseResult;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShippingLabelPurchaseUserError;

/**
 * Return type for `shippingLabelPurchase` mutation.
 */
class ShopifyShippingLabelPurchasePayload
{
    protected $shippingLabelPurchaseResult;
    protected $userErrors;

    
    /**
     * The asynchronous purchase result. Query this object to track purchase status, retrieve purchased shipping labels, or inspect purchase-processing errors.
     *
     * @return ShopifyShippingLabelPurchaseResult
     */
    public function getShippingLabelPurchaseResult(): ?ShopifyShippingLabelPurchaseResult
    {
        return $this->shippingLabelPurchaseResult;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyShippingLabelPurchaseUserError[]
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
            if (isset($data['shippingLabelPurchaseResult']) && $data['shippingLabelPurchaseResult'] !== null) {
                $instance->shippingLabelPurchaseResult = ShopifyShippingLabelPurchaseResult::fromArray($data['shippingLabelPurchaseResult']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyShippingLabelPurchaseUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->shippingLabelPurchaseResult !== null) {
                $data['shippingLabelPurchaseResult'] = $this->shippingLabelPurchaseResult->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}

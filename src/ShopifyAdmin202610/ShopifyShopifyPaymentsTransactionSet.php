<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShopifyPaymentsExtendedAuthorization;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShopifyPaymentsRefundSet;

/**
 * Presents all Shopify Payments specific information related to an order transaction.
 */
class ShopifyShopifyPaymentsTransactionSet
{
    protected $extendedAuthorizationSet;
    protected $refundSet;

    
    /**
     * Contains all fields related to an extended authorization.
     *
     * @return ShopifyShopifyPaymentsExtendedAuthorization
     */
    public function getExtendedAuthorizationSet(): ?ShopifyShopifyPaymentsExtendedAuthorization
    {
        return $this->extendedAuthorizationSet;
    }

    
    /**
     * Contains all fields related to a refund.
     *
     * @return ShopifyShopifyPaymentsRefundSet
     */
    public function getRefundSet(): ?ShopifyShopifyPaymentsRefundSet
    {
        return $this->refundSet;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['extendedAuthorizationSet']) && $data['extendedAuthorizationSet'] !== null) {
                $instance->extendedAuthorizationSet = ShopifyShopifyPaymentsExtendedAuthorization::fromArray($data['extendedAuthorizationSet']);
            }
            if (isset($data['refundSet']) && $data['refundSet'] !== null) {
                $instance->refundSet = ShopifyShopifyPaymentsRefundSet::fromArray($data['refundSet']);
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
            if ($this->extendedAuthorizationSet !== null) {
                $data['extendedAuthorizationSet'] = $this->extendedAuthorizationSet->asArray();
            }
            if ($this->refundSet !== null) {
                $data['refundSet'] = $this->refundSet->asArray();
            }
            return $data;
        }
}

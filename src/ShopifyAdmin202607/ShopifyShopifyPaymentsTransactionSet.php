<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyPaymentsExtendedAuthorization;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyPaymentsRefundSet;

class ShopifyShopifyPaymentsTransactionSet
{
    protected $extendedAuthorizationSet;
    protected $refundSet;

    
    /**
     * @return ShopifyShopifyPaymentsExtendedAuthorization
     */
    public function getExtendedAuthorizationSet()
    {
        return $this->extendedAuthorizationSet;
    }

    
    /**
     * @return ShopifyShopifyPaymentsRefundSet
     */
    public function getRefundSet()
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

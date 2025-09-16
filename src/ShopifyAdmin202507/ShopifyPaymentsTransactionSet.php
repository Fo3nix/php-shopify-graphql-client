<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsExtendedAuthorization;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsRefundSet;

class ShopifyPaymentsTransactionSet
{
    protected $extendedAuthorizationSet;
    protected $refundSet;

    
    /**
     * @return ShopifyPaymentsExtendedAuthorization
     */
    public function getExtendedAuthorizationSet()
    {
        return $this->extendedAuthorizationSet;
    }

    
    /**
     * @return ShopifyPaymentsRefundSet
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
                $instance->extendedAuthorizationSet = ShopifyPaymentsExtendedAuthorization::fromArray($data['extendedAuthorizationSet']);
            }
            if (isset($data['refundSet']) && $data['refundSet'] !== null) {
                $instance->refundSet = ShopifyPaymentsRefundSet::fromArray($data['refundSet']);
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

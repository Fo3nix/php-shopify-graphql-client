<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;

/**
 * Presents all Shopify Payments information related to an extended authorization.
 */
class ShopifyShopifyPaymentsExtendedAuthorization
{
    protected $extendedAuthorizationExpiresAt;
    protected $standardAuthorizationExpiresAt;

    
    /**
     * The time after which the extended authorization expires. After the expiry, the merchant is unable to capture the payment.
     *
     * @return Carbon
     */
    public function getExtendedAuthorizationExpiresAt(): ?Carbon
    {
        return $this->extendedAuthorizationExpiresAt;
    }

    
    /**
     * The time after which capture will incur an additional fee.
     *
     * @return Carbon
     */
    public function getStandardAuthorizationExpiresAt(): ?Carbon
    {
        return $this->standardAuthorizationExpiresAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['extendedAuthorizationExpiresAt']) && $data['extendedAuthorizationExpiresAt'] !== null) {
                $instance->extendedAuthorizationExpiresAt = new Carbon($data['extendedAuthorizationExpiresAt']);
            }
            if (isset($data['standardAuthorizationExpiresAt']) && $data['standardAuthorizationExpiresAt'] !== null) {
                $instance->standardAuthorizationExpiresAt = new Carbon($data['standardAuthorizationExpiresAt']);
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
            if ($this->extendedAuthorizationExpiresAt !== null) {
                $data['extendedAuthorizationExpiresAt'] = $this->extendedAuthorizationExpiresAt->toIso8601String();
            }
            if ($this->standardAuthorizationExpiresAt !== null) {
                $data['standardAuthorizationExpiresAt'] = $this->standardAuthorizationExpiresAt->toIso8601String();
            }
            return $data;
        }
}

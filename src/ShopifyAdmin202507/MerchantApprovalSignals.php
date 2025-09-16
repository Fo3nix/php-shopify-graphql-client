<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class MerchantApprovalSignals
{
    protected $identityVerified;
    protected $verifiedByShopify;
    protected $verifiedByShopifyTier;

    
    /**
     * @return bool
     */
    public function getIdentityVerified()
    {
        return $this->identityVerified;
    }

    
    /**
     * @return bool
     */
    public function getVerifiedByShopify()
    {
        return $this->verifiedByShopify;
    }

    
    /**
     * @return string
     */
    public function getVerifiedByShopifyTier()
    {
        return $this->verifiedByShopifyTier;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['identityVerified']) && $data['identityVerified'] !== null) {
                $instance->identityVerified = $data['identityVerified'];
            }
            if (isset($data['verifiedByShopify']) && $data['verifiedByShopify'] !== null) {
                $instance->verifiedByShopify = $data['verifiedByShopify'];
            }
            if (isset($data['verifiedByShopifyTier']) && $data['verifiedByShopifyTier'] !== null) {
                $instance->verifiedByShopifyTier = $data['verifiedByShopifyTier'];
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
            if ($this->identityVerified !== null) {
                $data['identityVerified'] = $this->identityVerified;
            }
            if ($this->verifiedByShopify !== null) {
                $data['verifiedByShopify'] = $this->verifiedByShopify;
            }
            if ($this->verifiedByShopifyTier !== null) {
                $data['verifiedByShopifyTier'] = $this->verifiedByShopifyTier;
            }
            return $data;
        }
}

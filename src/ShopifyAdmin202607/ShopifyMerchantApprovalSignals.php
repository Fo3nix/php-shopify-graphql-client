<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Merchant approval for accelerated onboarding to channel integration apps.
 */
class ShopifyMerchantApprovalSignals
{
    protected $identityVerified;
    protected $verifiedByShopify;
    protected $verifiedByShopifyTier;

    
    /**
     * Whether the shop's Shopify Payments account identity is verified. Returns `false` if the identity is unverified or if the shop doesn't have a Shopify Payments account.
     *
     * @return bool
     */
    public function getIdentityVerified(): ?bool
    {
        return $this->identityVerified;
    }

    
    /**
     * Whether Shopify has pre-verified the merchant's business for onboarding to channel integration apps. Returns `false` if the shop isn't marked for verification.
     *
     * @return bool
     */
    public function getVerifiedByShopify(): ?bool
    {
        return $this->verifiedByShopify;
    }

    
    /**
     * Which tier of the Shopify verification was determined for the merchant's business for onboarding to channel integration apps.
     *
     * @return string
     */
    public function getVerifiedByShopifyTier(): ?string
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

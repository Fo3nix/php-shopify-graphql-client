<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * The shop's billing plan and subscription details. Indicates the plan tier (such as Basic, Advanced, or Plus), whether the shop has a Shopify Plus subscription, and if it's a dev store for testing.
 */
class ShopifyShopPlan
{
    protected $displayName;
    protected $partnerDevelopment;
    protected $publicDisplayName;
    protected $shopifyPlus;

    
    /**
     * The name of the shop's billing plan.
     *
     * @return string
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    
    /**
     * Whether the shop is a partner development shop for testing purposes.
     *
     * @return bool
     */
    public function getPartnerDevelopment(): ?bool
    {
        return $this->partnerDevelopment;
    }

    
    /**
     * The public display name of the shop's billing plan. Possible values are: Advanced, Agentic, Agentic Enterprise, Basic, Development, Grow, Inactive, Lite, Other, Paused, Plus, Plus Trial, Retail, Shop Component, Shop Component Plus, Staff Business, Starter, and Trial.
     *
     * @return string
     */
    public function getPublicDisplayName(): ?string
    {
        return $this->publicDisplayName;
    }

    
    /**
     * Whether the shop has a Shopify Plus subscription.
     *
     * @return bool
     */
    public function getShopifyPlus(): ?bool
    {
        return $this->shopifyPlus;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['partnerDevelopment']) && $data['partnerDevelopment'] !== null) {
                $instance->partnerDevelopment = $data['partnerDevelopment'];
            }
            if (isset($data['publicDisplayName']) && $data['publicDisplayName'] !== null) {
                $instance->publicDisplayName = $data['publicDisplayName'];
            }
            if (isset($data['shopifyPlus']) && $data['shopifyPlus'] !== null) {
                $instance->shopifyPlus = $data['shopifyPlus'];
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
            if ($this->displayName !== null) {
                $data['displayName'] = $this->displayName;
            }
            if ($this->partnerDevelopment !== null) {
                $data['partnerDevelopment'] = $this->partnerDevelopment;
            }
            if ($this->publicDisplayName !== null) {
                $data['publicDisplayName'] = $this->publicDisplayName;
            }
            if ($this->shopifyPlus !== null) {
                $data['shopifyPlus'] = $this->shopifyPlus;
            }
            return $data;
        }
}

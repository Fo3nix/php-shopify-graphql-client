<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyGiftCardExpirationConfiguration;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;

/**
 * Represents information about the configuration of gift cards on the shop.
 */
class ShopifyGiftCardConfiguration
{
    protected $expirationConfiguration;
    protected $issueLimit;
    protected $purchaseLimit;

    
    /**
     * The default expiration configuration of gift cards on the shop. This field is null if the shop hasn't set a default expiration for gift cards.
     *
     * @return ShopifyGiftCardExpirationConfiguration
     */
    public function getExpirationConfiguration(): ?ShopifyGiftCardExpirationConfiguration
    {
        return $this->expirationConfiguration;
    }

    
    /**
     * The issue limit for gift cards in the default shop currency.
     *
     * @return ShopifyMoneyV2
     */
    public function getIssueLimit(): ?ShopifyMoneyV2
    {
        return $this->issueLimit;
    }

    
    /**
     * The purchase limit for gift cards in the default shop currency.
     *
     * @return ShopifyMoneyV2
     */
    public function getPurchaseLimit(): ?ShopifyMoneyV2
    {
        return $this->purchaseLimit;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['expirationConfiguration']) && $data['expirationConfiguration'] !== null) {
                $instance->expirationConfiguration = ShopifyGiftCardExpirationConfiguration::fromArray($data['expirationConfiguration']);
            }
            if (isset($data['issueLimit']) && $data['issueLimit'] !== null) {
                $instance->issueLimit = ShopifyMoneyV2::fromArray($data['issueLimit']);
            }
            if (isset($data['purchaseLimit']) && $data['purchaseLimit'] !== null) {
                $instance->purchaseLimit = ShopifyMoneyV2::fromArray($data['purchaseLimit']);
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
            if ($this->expirationConfiguration !== null) {
                $data['expirationConfiguration'] = $this->expirationConfiguration->asArray();
            }
            if ($this->issueLimit !== null) {
                $data['issueLimit'] = $this->issueLimit->asArray();
            }
            if ($this->purchaseLimit !== null) {
                $data['purchaseLimit'] = $this->purchaseLimit->asArray();
            }
            return $data;
        }
}

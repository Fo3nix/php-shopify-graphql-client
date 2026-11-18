<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDeliveryLegacyModeBlocked;

/**
 * The `DeliverySetting` object enables you to manage shop-wide shipping settings.
 */
class ShopifyDeliverySetting
{
    protected $legacyModeBlocked;
    protected $legacyModeProfiles;

    
    /**
     * Whether the shop is blocked from converting to full multi-location delivery profiles mode. If the shop is blocked, then the blocking reasons are also returned. Note: this field is effectively deprecated and will be removed in a future version of the API.
     *
     * @return ShopifyDeliveryLegacyModeBlocked
     */
    public function getLegacyModeBlocked(): ?ShopifyDeliveryLegacyModeBlocked
    {
        return $this->legacyModeBlocked;
    }

    
    /**
     * Enables legacy compatibility mode for the multi-location delivery profiles feature. Note: this field is effectively deprecated and will be removed in a future version of the API.
     *
     * @return bool
     */
    public function getLegacyModeProfiles(): ?bool
    {
        return $this->legacyModeProfiles;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['legacyModeBlocked']) && $data['legacyModeBlocked'] !== null) {
                $instance->legacyModeBlocked = ShopifyDeliveryLegacyModeBlocked::fromArray($data['legacyModeBlocked']);
            }
            if (isset($data['legacyModeProfiles']) && $data['legacyModeProfiles'] !== null) {
                $instance->legacyModeProfiles = $data['legacyModeProfiles'];
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
            if ($this->legacyModeBlocked !== null) {
                $data['legacyModeBlocked'] = $this->legacyModeBlocked->asArray();
            }
            if ($this->legacyModeProfiles !== null) {
                $data['legacyModeProfiles'] = $this->legacyModeProfiles;
            }
            return $data;
        }
}

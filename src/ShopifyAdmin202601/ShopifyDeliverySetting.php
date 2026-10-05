<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDeliveryLegacyModeBlocked;

class ShopifyDeliverySetting
{
    protected $legacyModeBlocked;
    protected $legacyModeProfiles;

    
    /**
     * @return ShopifyDeliveryLegacyModeBlocked
     */
    public function getLegacyModeBlocked()
    {
        return $this->legacyModeBlocked;
    }

    
    /**
     * @return bool
     */
    public function getLegacyModeProfiles()
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

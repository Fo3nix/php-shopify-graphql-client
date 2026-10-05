<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetaobjectCapabilityDataOnlineStore;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetaobjectCapabilityDataPublishable;

class ShopifyMetaobjectCapabilityData
{
    protected $onlineStore;
    protected $publishable;

    
    /**
     * @return ShopifyMetaobjectCapabilityDataOnlineStore
     */
    public function getOnlineStore()
    {
        return $this->onlineStore;
    }

    
    /**
     * @return ShopifyMetaobjectCapabilityDataPublishable
     */
    public function getPublishable()
    {
        return $this->publishable;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['onlineStore']) && $data['onlineStore'] !== null) {
                $instance->onlineStore = ShopifyMetaobjectCapabilityDataOnlineStore::fromArray($data['onlineStore']);
            }
            if (isset($data['publishable']) && $data['publishable'] !== null) {
                $instance->publishable = ShopifyMetaobjectCapabilityDataPublishable::fromArray($data['publishable']);
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
            if ($this->onlineStore !== null) {
                $data['onlineStore'] = $this->onlineStore->asArray();
            }
            if ($this->publishable !== null) {
                $data['publishable'] = $this->publishable->asArray();
            }
            return $data;
        }
}

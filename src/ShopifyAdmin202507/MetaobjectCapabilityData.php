<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetaobjectCapabilityDataOnlineStore;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetaobjectCapabilityDataPublishable;

class MetaobjectCapabilityData
{
    protected $onlineStore;
    protected $publishable;

    
    /**
     * @return MetaobjectCapabilityDataOnlineStore
     */
    public function getOnlineStore()
    {
        return $this->onlineStore;
    }

    
    /**
     * @return MetaobjectCapabilityDataPublishable
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
                $instance->onlineStore = MetaobjectCapabilityDataOnlineStore::fromArray($data['onlineStore']);
            }
            if (isset($data['publishable']) && $data['publishable'] !== null) {
                $instance->publishable = MetaobjectCapabilityDataPublishable::fromArray($data['publishable']);
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

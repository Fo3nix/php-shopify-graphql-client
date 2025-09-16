<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetaobjectCapabilitiesOnlineStore;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetaobjectCapabilitiesPublishable;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetaobjectCapabilitiesRenderable;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetaobjectCapabilitiesTranslatable;

class MetaobjectCapabilities
{
    protected $onlineStore;
    protected $publishable;
    protected $renderable;
    protected $translatable;

    
    /**
     * @return MetaobjectCapabilitiesOnlineStore
     */
    public function getOnlineStore()
    {
        return $this->onlineStore;
    }

    
    /**
     * @return MetaobjectCapabilitiesPublishable
     */
    public function getPublishable()
    {
        return $this->publishable;
    }

    
    /**
     * @return MetaobjectCapabilitiesRenderable
     */
    public function getRenderable()
    {
        return $this->renderable;
    }

    
    /**
     * @return MetaobjectCapabilitiesTranslatable
     */
    public function getTranslatable()
    {
        return $this->translatable;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['onlineStore']) && $data['onlineStore'] !== null) {
                $instance->onlineStore = MetaobjectCapabilitiesOnlineStore::fromArray($data['onlineStore']);
            }
            if (isset($data['publishable']) && $data['publishable'] !== null) {
                $instance->publishable = MetaobjectCapabilitiesPublishable::fromArray($data['publishable']);
            }
            if (isset($data['renderable']) && $data['renderable'] !== null) {
                $instance->renderable = MetaobjectCapabilitiesRenderable::fromArray($data['renderable']);
            }
            if (isset($data['translatable']) && $data['translatable'] !== null) {
                $instance->translatable = MetaobjectCapabilitiesTranslatable::fromArray($data['translatable']);
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
            if ($this->renderable !== null) {
                $data['renderable'] = $this->renderable->asArray();
            }
            if ($this->translatable !== null) {
                $data['translatable'] = $this->translatable->asArray();
            }
            return $data;
        }
}

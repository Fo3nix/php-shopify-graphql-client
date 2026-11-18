<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetaobjectCapabilitiesOnlineStore;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetaobjectCapabilitiesPublishable;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetaobjectCapabilitiesRenderable;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetaobjectCapabilitiesTranslatable;

/**
 * Provides the capabilities of a metaobject definition.
 */
class ShopifyMetaobjectCapabilities
{
    protected $onlineStore;
    protected $publishable;
    protected $renderable;
    protected $translatable;

    
    /**
     * Indicates whether a metaobject definition can be displayed as a page on the Online Store.
     *
     * @return ShopifyMetaobjectCapabilitiesOnlineStore
     */
    public function getOnlineStore(): ?ShopifyMetaobjectCapabilitiesOnlineStore
    {
        return $this->onlineStore;
    }

    
    /**
     * Indicate whether a metaobject definition is publishable.
     *
     * @return ShopifyMetaobjectCapabilitiesPublishable
     */
    public function getPublishable(): ?ShopifyMetaobjectCapabilitiesPublishable
    {
        return $this->publishable;
    }

    
    /**
     * Indicate whether a metaobject definition is renderable and exposes SEO data.
     *
     * @return ShopifyMetaobjectCapabilitiesRenderable
     */
    public function getRenderable(): ?ShopifyMetaobjectCapabilitiesRenderable
    {
        return $this->renderable;
    }

    
    /**
     * Indicate whether a metaobject definition is translatable.
     *
     * @return ShopifyMetaobjectCapabilitiesTranslatable
     */
    public function getTranslatable(): ?ShopifyMetaobjectCapabilitiesTranslatable
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
                $instance->onlineStore = ShopifyMetaobjectCapabilitiesOnlineStore::fromArray($data['onlineStore']);
            }
            if (isset($data['publishable']) && $data['publishable'] !== null) {
                $instance->publishable = ShopifyMetaobjectCapabilitiesPublishable::fromArray($data['publishable']);
            }
            if (isset($data['renderable']) && $data['renderable'] !== null) {
                $instance->renderable = ShopifyMetaobjectCapabilitiesRenderable::fromArray($data['renderable']);
            }
            if (isset($data['translatable']) && $data['translatable'] !== null) {
                $instance->translatable = ShopifyMetaobjectCapabilitiesTranslatable::fromArray($data['translatable']);
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

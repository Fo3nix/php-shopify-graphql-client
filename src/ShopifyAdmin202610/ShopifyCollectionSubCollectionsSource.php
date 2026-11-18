<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollection;

/**
 * A collection source whose membership comes from one or more referenced collections (sub-collections).
 *
 * Sub-collection sources are always non-shareable. Sharing a sub-collection source across owners is not
 * supported because the collection references are owner-bound.
 */
class ShopifyCollectionSubCollectionsSource implements ShopifyCollectionSource, ShopifyNode
{
    protected $app;
    protected $collections;
    protected $description;
    protected $id;
    protected $title;

    
    /**
     * The app that created this source, if applicable. In the case of shareable sources, this app manages this source's conditions and selections exclusively.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp
    {
        return $this->app;
    }

    
    /**
     * The referenced sub-collections that supply products to this source.
     *
     * @return ShopifyCollection[]
     */
    public function getCollections(): ?array
    {
        return $this->collections;
    }

    
    /**
     * An optional description of the source.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The unique identifier for this source.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The title of the source.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = ShopifyApp::fromArray($data['app']);
            }
            if (isset($data['collections']) && $data['collections'] !== null) {
                $instance->collections = array_map(function($item) { return ShopifyCollection::fromArray($item); }, $data['collections']);
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
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
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->collections !== null) {
                $data['collections'] = array_map(function($item) { return $item->asArray(); }, $this->collections);
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}

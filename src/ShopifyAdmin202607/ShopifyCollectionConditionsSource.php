<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCollectionSourceExclusion;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCollectionSourceInclusion;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductConnection;

/**
 * A collection source that uses conditions and selections to determine which products are included.
 */
class ShopifyCollectionConditionsSource implements ShopifyCollectionSource, ShopifyNode
{
    protected $app;
    protected $description;
    protected $exclusion;
    protected $id;
    protected $inclusion;
    protected $products;
    protected $shareable;
    protected $targetType;
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
     * An optional description of the source.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The rules and selections for excluding products from the collection.
     *
     * @return ShopifyCollectionSourceExclusion
     */
    public function getExclusion(): ?ShopifyCollectionSourceExclusion
    {
        return $this->exclusion;
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
     * The rules and selections for including products in the collection.
     *
     * @return ShopifyCollectionSourceInclusion
     */
    public function getInclusion(): ?ShopifyCollectionSourceInclusion
    {
        return $this->inclusion;
    }

    
    /**
     * The products that are members of this source: products matched by the source's inclusion
     * conditions and manual selections, with the source's exclusion conditions, excluded
     * collections, and manual exclusions removed.
     *
     * @return ShopifyProductConnection
     */
    public function getProducts(): ?ShopifyProductConnection
    {
        return $this->products;
    }

    
    /**
     * Whether this source can be shared across multiple collections.
     *
     * @return bool
     */
    public function getShareable(): ?bool
    {
        return $this->shareable;
    }

    
    /**
     * Whether conditions match products or individual variants.
     *
     * @return string A ShopifyCollectionSourceTargetTypeEnumObject value
     */
    public function getTargetType(): ?string
    {
        return $this->targetType;
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
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['exclusion']) && $data['exclusion'] !== null) {
                $instance->exclusion = ShopifyCollectionSourceExclusion::fromArray($data['exclusion']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inclusion']) && $data['inclusion'] !== null) {
                $instance->inclusion = ShopifyCollectionSourceInclusion::fromArray($data['inclusion']);
            }
            if (isset($data['products']) && $data['products'] !== null) {
                $instance->products = ShopifyProductConnection::fromArray($data['products']);
            }
            if (isset($data['shareable']) && $data['shareable'] !== null) {
                $instance->shareable = $data['shareable'];
            }
            if (isset($data['targetType']) && $data['targetType'] !== null) {
                $instance->targetType = $data['targetType'];
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
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->exclusion !== null) {
                $data['exclusion'] = $this->exclusion->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->inclusion !== null) {
                $data['inclusion'] = $this->inclusion->asArray();
            }
            if ($this->products !== null) {
                $data['products'] = $this->products->asArray();
            }
            if ($this->shareable !== null) {
                $data['shareable'] = $this->shareable;
            }
            if ($this->targetType !== null) {
                $data['targetType'] = $this->targetType;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollectionSourceExclusion;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollectionSourceInclusion;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductConnection;

class ShopifyCollectionConditionsSource
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
     * @return ShopifyApp
     */
    public function getApp()
    {
        return $this->app;
    }

    
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    
    /**
     * @return ShopifyCollectionSourceExclusion
     */
    public function getExclusion()
    {
        return $this->exclusion;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyCollectionSourceInclusion
     */
    public function getInclusion()
    {
        return $this->inclusion;
    }

    
    /**
     * @return ShopifyProductConnection
     */
    public function getProducts()
    {
        return $this->products;
    }

    
    /**
     * @return bool
     */
    public function getShareable()
    {
        return $this->shareable;
    }

    
    /**
     * @return ShopifyCollectionSourceTargetTypeEnumObject
     */
    public function getTargetType()
    {
        return $this->targetType;
    }

    
    /**
     * @return string
     */
    public function getTitle()
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

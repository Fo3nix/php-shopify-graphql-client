<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\App;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ResourcePublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CollectionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PublicationOperation;

class Publication
{
    protected $app;
    protected $autoPublish;
    protected $catalog;
    protected $collectionPublicationsV3;
    protected $collections;
    protected $hasCollection;
    protected $id;
    protected $includedProducts;
    protected $name;
    protected $operation;
    protected $productPublicationsV3;
    protected $products;
    protected $supportsFuturePublishing;

    
    /**
     * @return App
     */
    public function getApp()
    {
        return $this->app;
    }

    
    /**
     * @return bool
     */
    public function getAutoPublish()
    {
        return $this->autoPublish;
    }

    
    /**
     * @return mixed
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    
    /**
     * @return ResourcePublicationConnection
     */
    public function getCollectionPublicationsV3()
    {
        return $this->collectionPublicationsV3;
    }

    
    /**
     * @return CollectionConnection
     */
    public function getCollections()
    {
        return $this->collections;
    }

    
    /**
     * @return bool
     */
    public function getHasCollection()
    {
        return $this->hasCollection;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ProductConnection
     */
    public function getIncludedProducts()
    {
        return $this->includedProducts;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return PublicationOperation
     */
    public function getOperation()
    {
        return $this->operation;
    }

    
    /**
     * @return ResourcePublicationConnection
     */
    public function getProductPublicationsV3()
    {
        return $this->productPublicationsV3;
    }

    
    /**
     * @return ProductConnection
     */
    public function getProducts()
    {
        return $this->products;
    }

    
    /**
     * @return bool
     */
    public function getSupportsFuturePublishing()
    {
        return $this->supportsFuturePublishing;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = App::fromArray($data['app']);
            }
            if (isset($data['autoPublish']) && $data['autoPublish'] !== null) {
                $instance->autoPublish = $data['autoPublish'];
            }
            if (isset($data['catalog']) && $data['catalog'] !== null) {
                $instance->catalog = $data['catalog'];
            }
            if (isset($data['collectionPublicationsV3']) && $data['collectionPublicationsV3'] !== null) {
                $instance->collectionPublicationsV3 = ResourcePublicationConnection::fromArray($data['collectionPublicationsV3']);
            }
            if (isset($data['collections']) && $data['collections'] !== null) {
                $instance->collections = CollectionConnection::fromArray($data['collections']);
            }
            if (isset($data['hasCollection']) && $data['hasCollection'] !== null) {
                $instance->hasCollection = $data['hasCollection'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['includedProducts']) && $data['includedProducts'] !== null) {
                $instance->includedProducts = ProductConnection::fromArray($data['includedProducts']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['operation']) && $data['operation'] !== null) {
                $instance->operation = PublicationOperation::fromArray($data['operation']);
            }
            if (isset($data['productPublicationsV3']) && $data['productPublicationsV3'] !== null) {
                $instance->productPublicationsV3 = ResourcePublicationConnection::fromArray($data['productPublicationsV3']);
            }
            if (isset($data['products']) && $data['products'] !== null) {
                $instance->products = ProductConnection::fromArray($data['products']);
            }
            if (isset($data['supportsFuturePublishing']) && $data['supportsFuturePublishing'] !== null) {
                $instance->supportsFuturePublishing = $data['supportsFuturePublishing'];
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
            if ($this->autoPublish !== null) {
                $data['autoPublish'] = $this->autoPublish;
            }
            if ($this->catalog !== null) {
                $data['catalog'] = $this->catalog;
            }
            if ($this->collectionPublicationsV3 !== null) {
                $data['collectionPublicationsV3'] = $this->collectionPublicationsV3->asArray();
            }
            if ($this->collections !== null) {
                $data['collections'] = $this->collections->asArray();
            }
            if ($this->hasCollection !== null) {
                $data['hasCollection'] = $this->hasCollection;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->includedProducts !== null) {
                $data['includedProducts'] = $this->includedProducts->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->operation !== null) {
                $data['operation'] = $this->operation->asArray();
            }
            if ($this->productPublicationsV3 !== null) {
                $data['productPublicationsV3'] = $this->productPublicationsV3->asArray();
            }
            if ($this->products !== null) {
                $data['products'] = $this->products->asArray();
            }
            if ($this->supportsFuturePublishing !== null) {
                $data['supportsFuturePublishing'] = $this->supportsFuturePublishing;
            }
            return $data;
        }
}

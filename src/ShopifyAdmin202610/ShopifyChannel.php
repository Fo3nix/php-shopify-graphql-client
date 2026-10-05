<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyResourcePublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCollectionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarketConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyNavigationItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductPublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAppFeedback;

class ShopifyChannel
{
    protected $accountId;
    protected $accountName;
    protected $activeRegions;
    protected $app;
    protected $collectionPublicationsV3;
    protected $collections;
    protected $handle;
    protected $hasCollection;
    protected $id;
    protected $markets;
    protected $marketsCount;
    protected $name;
    protected $navigationItems;
    protected $overviewPath;
    protected $productPublications;
    protected $productPublicationsV3;
    protected $products;
    protected $productsCount;
    protected $resourceFeedback;
    protected $specificationHandle;
    protected $supportsFuturePublishing;

    
    /**
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    
    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    
    /**
     * @return ShopifyCountryCodeEnumObject[]
     */
    public function getActiveRegions()
    {
        return $this->activeRegions;
    }

    
    /**
     * @return ShopifyApp
     */
    public function getApp()
    {
        return $this->app;
    }

    
    /**
     * @return ShopifyResourcePublicationConnection
     */
    public function getCollectionPublicationsV3()
    {
        return $this->collectionPublicationsV3;
    }

    
    /**
     * @return ShopifyCollectionConnection
     */
    public function getCollections()
    {
        return $this->collections;
    }

    
    /**
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
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
     * @return ShopifyMarketConnection
     */
    public function getMarkets()
    {
        return $this->markets;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getMarketsCount()
    {
        return $this->marketsCount;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return ShopifyNavigationItem[]
     */
    public function getNavigationItems()
    {
        return $this->navigationItems;
    }

    
    /**
     * @return string
     */
    public function getOverviewPath()
    {
        return $this->overviewPath;
    }

    
    /**
     * @return ShopifyProductPublicationConnection
     */
    public function getProductPublications()
    {
        return $this->productPublications;
    }

    
    /**
     * @return ShopifyResourcePublicationConnection
     */
    public function getProductPublicationsV3()
    {
        return $this->productPublicationsV3;
    }

    
    /**
     * @return ShopifyProductConnection
     */
    public function getProducts()
    {
        return $this->products;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getProductsCount()
    {
        return $this->productsCount;
    }

    
    /**
     * @return ShopifyAppFeedback
     */
    public function getResourceFeedback()
    {
        return $this->resourceFeedback;
    }

    
    /**
     * @return string
     */
    public function getSpecificationHandle()
    {
        return $this->specificationHandle;
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
            if (isset($data['accountId']) && $data['accountId'] !== null) {
                $instance->accountId = $data['accountId'];
            }
            if (isset($data['accountName']) && $data['accountName'] !== null) {
                $instance->accountName = $data['accountName'];
            }
            if (isset($data['activeRegions']) && $data['activeRegions'] !== null) {
                $instance->activeRegions = $data['activeRegions'];
            }
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = ShopifyApp::fromArray($data['app']);
            }
            if (isset($data['collectionPublicationsV3']) && $data['collectionPublicationsV3'] !== null) {
                $instance->collectionPublicationsV3 = ShopifyResourcePublicationConnection::fromArray($data['collectionPublicationsV3']);
            }
            if (isset($data['collections']) && $data['collections'] !== null) {
                $instance->collections = ShopifyCollectionConnection::fromArray($data['collections']);
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['hasCollection']) && $data['hasCollection'] !== null) {
                $instance->hasCollection = $data['hasCollection'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['markets']) && $data['markets'] !== null) {
                $instance->markets = ShopifyMarketConnection::fromArray($data['markets']);
            }
            if (isset($data['marketsCount']) && $data['marketsCount'] !== null) {
                $instance->marketsCount = ShopifyCount::fromArray($data['marketsCount']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['navigationItems']) && $data['navigationItems'] !== null) {
                $instance->navigationItems = array_map(function($item) { return ShopifyNavigationItem::fromArray($item); }, $data['navigationItems']);
            }
            if (isset($data['overviewPath']) && $data['overviewPath'] !== null) {
                $instance->overviewPath = $data['overviewPath'];
            }
            if (isset($data['productPublications']) && $data['productPublications'] !== null) {
                $instance->productPublications = ShopifyProductPublicationConnection::fromArray($data['productPublications']);
            }
            if (isset($data['productPublicationsV3']) && $data['productPublicationsV3'] !== null) {
                $instance->productPublicationsV3 = ShopifyResourcePublicationConnection::fromArray($data['productPublicationsV3']);
            }
            if (isset($data['products']) && $data['products'] !== null) {
                $instance->products = ShopifyProductConnection::fromArray($data['products']);
            }
            if (isset($data['productsCount']) && $data['productsCount'] !== null) {
                $instance->productsCount = ShopifyCount::fromArray($data['productsCount']);
            }
            if (isset($data['resourceFeedback']) && $data['resourceFeedback'] !== null) {
                $instance->resourceFeedback = ShopifyAppFeedback::fromArray($data['resourceFeedback']);
            }
            if (isset($data['specificationHandle']) && $data['specificationHandle'] !== null) {
                $instance->specificationHandle = $data['specificationHandle'];
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
            if ($this->accountId !== null) {
                $data['accountId'] = $this->accountId;
            }
            if ($this->accountName !== null) {
                $data['accountName'] = $this->accountName;
            }
            if ($this->activeRegions !== null) {
                $data['activeRegions'] = $this->activeRegions;
            }
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->collectionPublicationsV3 !== null) {
                $data['collectionPublicationsV3'] = $this->collectionPublicationsV3->asArray();
            }
            if ($this->collections !== null) {
                $data['collections'] = $this->collections->asArray();
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->hasCollection !== null) {
                $data['hasCollection'] = $this->hasCollection;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->markets !== null) {
                $data['markets'] = $this->markets->asArray();
            }
            if ($this->marketsCount !== null) {
                $data['marketsCount'] = $this->marketsCount->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->navigationItems !== null) {
                $data['navigationItems'] = array_map(function($item) { return $item->asArray(); }, $this->navigationItems);
            }
            if ($this->overviewPath !== null) {
                $data['overviewPath'] = $this->overviewPath;
            }
            if ($this->productPublications !== null) {
                $data['productPublications'] = $this->productPublications->asArray();
            }
            if ($this->productPublicationsV3 !== null) {
                $data['productPublicationsV3'] = $this->productPublicationsV3->asArray();
            }
            if ($this->products !== null) {
                $data['products'] = $this->products->asArray();
            }
            if ($this->productsCount !== null) {
                $data['productsCount'] = $this->productsCount->asArray();
            }
            if ($this->resourceFeedback !== null) {
                $data['resourceFeedback'] = $this->resourceFeedback->asArray();
            }
            if ($this->specificationHandle !== null) {
                $data['specificationHandle'] = $this->specificationHandle;
            }
            if ($this->supportsFuturePublishing !== null) {
                $data['supportsFuturePublishing'] = $this->supportsFuturePublishing;
            }
            return $data;
        }
}

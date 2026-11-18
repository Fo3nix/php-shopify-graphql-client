<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyResourcePublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCollectionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMarketConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyNavigationItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductPublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyAppFeedback;

/**
 * A connection between a Shopify shop and an external selling platform that supports product syndication and optionally order ingestion. Each channel binds a merchant's account on a specific platform — such as Amazon, eBay, Google, or a point-of-sale system — to the shop, establishing the publishing destination for product feeds.
 *
 * Sales Channel applications use [`channelCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/channelCreate) to establish channels after merchant authentication, and can manage multiple channel connections per app. Each channel is bound to a channel specification that declares the platform's regional coverage, capabilities, and requirements.
 *
 * Use channels to manage where catalog items are syndicated, track publication status across platforms, and control [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) visibility for different selling destinations.
 */
class ShopifyChannel implements ShopifyNode
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
     * The unique account ID for the merchant on the external platform. This value is opaque to Shopify — its format is determined by the channel, such as an Amazon Seller ID or Google Merchant Center ID.
     *
     * @return string
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    
    /**
     * The merchant-facing name for the external account. Displayed in Shopify Admin wherever the channel connection is referenced, such as in Markets and order attribution.
     *
     * @return string
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    
    /**
     * The regions where the channel is currently active, derived from the channel's active product feeds. Empty when the channel has no active product feeds.
     *
     * @return string[] ShopifyCountryCodeEnumObject values
     */
    public function getActiveRegions(): ?array
    {
        return $this->activeRegions;
    }

    
    /**
     * The underlying app used by the channel.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp
    {
        return $this->app;
    }

    
    /**
     * The list of collection publications. Each record represents information about the publication of a collection.
     *
     * @return ShopifyResourcePublicationConnection
     */
    public function getCollectionPublicationsV3(): ?ShopifyResourcePublicationConnection
    {
        return $this->collectionPublicationsV3;
    }

    
    /**
     * The list of collections published to the channel.
     *
     * @return ShopifyCollectionConnection
     */
    public function getCollections(): ?ShopifyCollectionConnection
    {
        return $this->collections;
    }

    
    /**
     * A unique, human-readable identifier for the channel within the shop. Set during [`channelCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/channelCreate) or auto-generated from the specification handle and account ID. Use with [`channelByHandle`](https://shopify.dev/docs/api/admin-graphql/latest/queries/channelByHandle) for lookups.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    
    /**
     * Whether the collection is available to the channel.
     *
     * @return bool
     */
    public function getHasCollection(): ?bool
    {
        return $this->hasCollection;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The markets associated with this channel.
     *
     * @return ShopifyMarketConnection
     */
    public function getMarkets(): ?ShopifyMarketConnection
    {
        return $this->markets;
    }

    
    /**
     * The number of markets associated with this channel.
     *
     * @return ShopifyCount
     */
    public function getMarketsCount(): ?ShopifyCount
    {
        return $this->marketsCount;
    }

    
    /**
     * The name of the channel.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The menu items for the channel, which also appear as submenu items in the left navigation sidebar in the Shopify admin.
     *
     * @return ShopifyNavigationItem[]
     */
    public function getNavigationItems(): ?array
    {
        return $this->navigationItems;
    }

    
    /**
     * Home page for the channel.
     *
     * @return string
     */
    public function getOverviewPath(): mixed
    {
        return $this->overviewPath;
    }

    
    /**
     * The product publications for the products published to the channel.
     *
     * @return ShopifyProductPublicationConnection
     */
    public function getProductPublications(): ?ShopifyProductPublicationConnection
    {
        return $this->productPublications;
    }

    
    /**
     * The list of product publication records for products published to this channel.
     *
     * @return ShopifyResourcePublicationConnection
     */
    public function getProductPublicationsV3(): ?ShopifyResourcePublicationConnection
    {
        return $this->productPublicationsV3;
    }

    
    /**
     * The list of products published to the channel.
     *
     * @return ShopifyProductConnection
     */
    public function getProducts(): ?ShopifyProductConnection
    {
        return $this->products;
    }

    
    /**
     * Retrieves the total count of [`products`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) published to a specific sales channel. Limited to a maximum of 10000 by default.
     *
     * @return ShopifyCount
     */
    public function getProductsCount(): ?ShopifyCount
    {
        return $this->productsCount;
    }

    
    /**
     * The resource feedback for the channel. Returns `null` when no active feedback exists—for example, after `shopResourceFeedbackCreate` is called with `state: ACCEPTED`, which clears the feedback signal. A `null` result is expected and means the channel has no outstanding feedback.
     *
     * @return ShopifyAppFeedback
     */
    public function getResourceFeedback(): ?ShopifyAppFeedback
    {
        return $this->resourceFeedback;
    }

    
    /**
     * The handle of the [channel specification](https://shopify.dev/docs/apps/build/sales-channels/channel-config-extension) bound to this channel. The specification declares the channel's regional coverage, capabilities, and requirements, and is deployed by the Sales Channel application via `shopify app deploy`.
     *
     * @return string
     */
    public function getSpecificationHandle(): ?string
    {
        return $this->specificationHandle;
    }

    
    /**
     * Whether the channel supports future publishing.
     *
     * @return bool
     */
    public function getSupportsFuturePublishing(): ?bool
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

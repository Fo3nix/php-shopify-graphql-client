<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCatalogHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCatalog;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyResourcePublicationConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCollectionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyProductConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPublicationOperationHydrator;

/**
 * A group of [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) and [collections](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection) that are published to an app.
 *
 * Each publication manages which products and collections display on its associated [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel). Merchants can automatically publish products when they're created if [`autoPublish`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication#field-Publication.fields.autoPublish) is enabled, or manually control publication through publication records.
 *
 * Publications support scheduled publishing through future publish dates for online store channels, allowing merchants to coordinate product launches and promotional campaigns. The [`catalog`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication#field-Publication.fields.catalog) field links to pricing and availability rules specific to that publication's context.
 */
class ShopifyPublication implements ShopifyNode
{
    protected $app;
    protected $autoPublish;
    protected $catalog;
    protected $collectionPublicationsV3;
    protected $collections;
    protected $hasCollection;
    protected $id;
    protected $includedProducts;
    protected $includedProductsCount;
    protected $name;
    protected $operation;
    protected $productPublicationsV3;
    protected $products;
    protected $supportsFuturePublishing;

    
    /**
     * The app associated with the publication.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp
    {
        return $this->app;
    }

    
    /**
     * Whether new products are automatically published to this publication.
     *
     * @return bool
     */
    public function getAutoPublish(): ?bool
    {
        return $this->autoPublish;
    }

    
    /**
     * The catalog associated with the publication.
     *
     * @return ShopifyCatalog
     */
    public function getCatalog(): ?ShopifyCatalog
    {
        return $this->catalog;
    }

    
    /**
     * The list of collection publication records, each representing the publication status and details for a collection published to this publication (typically channel).
     *
     * @return ShopifyResourcePublicationConnection
     */
    public function getCollectionPublicationsV3(): ?ShopifyResourcePublicationConnection
    {
        return $this->collectionPublicationsV3;
    }

    
    /**
     * The list of collections published to the publication.
     *
     * @return ShopifyCollectionConnection
     */
    public function getCollections(): ?ShopifyCollectionConnection
    {
        return $this->collections;
    }

    
    /**
     * Whether the collection is available to the publication.
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
     * The list of products included, but not necessarily published, in the publication.
     *
     * @return ShopifyProductConnection
     */
    public function getIncludedProducts(): ?ShopifyProductConnection
    {
        return $this->includedProducts;
    }

    
    /**
     * The count of products included in the publication. Limited to a maximum of 10000 by default.
     *
     * @return ShopifyCount
     */
    public function getIncludedProductsCount(): ?ShopifyCount
    {
        return $this->includedProductsCount;
    }

    
    /**
     * Name of the publication.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * A background operation associated with this publication.
     *
     * @return ShopifyAddAllProductsOperation|ShopifyCatalogCsvOperation|ShopifyPublicationResourceOperation
     */
    public function getOperation(): ShopifyAddAllProductsOperation|ShopifyCatalogCsvOperation|ShopifyPublicationResourceOperation|null
    {
        return $this->operation;
    }

    
    /**
     * The product publications for the list of products published to the publication.
     *
     * @return ShopifyResourcePublicationConnection
     */
    public function getProductPublicationsV3(): ?ShopifyResourcePublicationConnection
    {
        return $this->productPublicationsV3;
    }

    
    /**
     * The list of products published to the publication.
     *
     * @return ShopifyProductConnection
     */
    public function getProducts(): ?ShopifyProductConnection
    {
        return $this->products;
    }

    
    /**
     * Whether the publication supports future publishing.
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
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = ShopifyApp::fromArray($data['app']);
            }
            if (isset($data['autoPublish']) && $data['autoPublish'] !== null) {
                $instance->autoPublish = $data['autoPublish'];
            }
            if (isset($data['catalog']) && $data['catalog'] !== null) {
                $instance->catalog = ShopifyCatalogHydrator::fromArray($data['catalog']);
            }
            if (isset($data['collectionPublicationsV3']) && $data['collectionPublicationsV3'] !== null) {
                $instance->collectionPublicationsV3 = ShopifyResourcePublicationConnection::fromArray($data['collectionPublicationsV3']);
            }
            if (isset($data['collections']) && $data['collections'] !== null) {
                $instance->collections = ShopifyCollectionConnection::fromArray($data['collections']);
            }
            if (isset($data['hasCollection']) && $data['hasCollection'] !== null) {
                $instance->hasCollection = $data['hasCollection'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['includedProducts']) && $data['includedProducts'] !== null) {
                $instance->includedProducts = ShopifyProductConnection::fromArray($data['includedProducts']);
            }
            if (isset($data['includedProductsCount']) && $data['includedProductsCount'] !== null) {
                $instance->includedProductsCount = ShopifyCount::fromArray($data['includedProductsCount']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['operation']) && $data['operation'] !== null) {
                $instance->operation = ShopifyPublicationOperationHydrator::fromArray($data['operation']);
            }
            if (isset($data['productPublicationsV3']) && $data['productPublicationsV3'] !== null) {
                $instance->productPublicationsV3 = ShopifyResourcePublicationConnection::fromArray($data['productPublicationsV3']);
            }
            if (isset($data['products']) && $data['products'] !== null) {
                $instance->products = ShopifyProductConnection::fromArray($data['products']);
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
                $data['catalog'] = ShopifyCatalogHydrator::toArray($this->catalog);
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
            if ($this->includedProductsCount !== null) {
                $data['includedProductsCount'] = $this->includedProductsCount->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->operation !== null) {
                $data['operation'] = ShopifyPublicationOperationHydrator::toArray($this->operation);
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

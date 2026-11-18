<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMarketConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyResourceOperationHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyResourceOperation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPriceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPublication;

/**
 * A catalog for managing product availability and pricing for specific [`Market`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Market) contexts. Each catalog links to one or more markets. The catalog can optionally include a [`Publication`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication) to control which [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) objects customers see, and a [`PriceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceList) for market-specific pricing adjustments. When a publication isn't associated with the catalog, product availability is determined by the sales channel.
 *
 * Use catalogs to create distinct shopping experiences for different geographic regions or customer segments.
 *
 * Learn more about [building a catalog](https://shopify.dev/docs/apps/build/markets/build-catalog) and [managing markets](https://shopify.dev/docs/apps/build/markets).
 */
class ShopifyMarketCatalog implements ShopifyCatalog, ShopifyNode
{
    protected $id;
    protected $markets;
    protected $marketsCount;
    protected $operations;
    protected $priceList;
    protected $publication;
    protected $status;
    protected $title;

    
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
     * The markets associated with the catalog.
     *
     * @return ShopifyMarketConnection
     */
    public function getMarkets(): ?ShopifyMarketConnection
    {
        return $this->markets;
    }

    
    /**
     * The number of markets associated with the catalog.
     *
     * @return ShopifyCount
     */
    public function getMarketsCount(): ?ShopifyCount
    {
        return $this->marketsCount;
    }

    
    /**
     * Most recent catalog operations.
     *
     * @return ShopifyResourceOperation[]
     */
    public function getOperations(): ?array
    {
        return $this->operations;
    }

    
    /**
     * The price list associated with the catalog.
     *
     * @return ShopifyPriceList
     */
    public function getPriceList(): ?ShopifyPriceList
    {
        return $this->priceList;
    }

    
    /**
     * A group of products and collections that's published to a catalog.
     *
     * @return ShopifyPublication
     */
    public function getPublication(): ?ShopifyPublication
    {
        return $this->publication;
    }

    
    /**
     * The status of the catalog.
     *
     * @return string A ShopifyCatalogStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The name of the catalog.
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
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['markets']) && $data['markets'] !== null) {
                $instance->markets = ShopifyMarketConnection::fromArray($data['markets']);
            }
            if (isset($data['marketsCount']) && $data['marketsCount'] !== null) {
                $instance->marketsCount = ShopifyCount::fromArray($data['marketsCount']);
            }
            if (isset($data['operations']) && $data['operations'] !== null) {
                $instance->operations = array_map(function($item) { return ShopifyResourceOperationHydrator::fromArray($item); }, $data['operations']);
            }
            if (isset($data['priceList']) && $data['priceList'] !== null) {
                $instance->priceList = ShopifyPriceList::fromArray($data['priceList']);
            }
            if (isset($data['publication']) && $data['publication'] !== null) {
                $instance->publication = ShopifyPublication::fromArray($data['publication']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->markets !== null) {
                $data['markets'] = $this->markets->asArray();
            }
            if ($this->marketsCount !== null) {
                $data['marketsCount'] = $this->marketsCount->asArray();
            }
            if ($this->operations !== null) {
                $data['operations'] = array_map(function($item) { return ShopifyResourceOperationHydrator::toArray($item); }, $this->operations);
            }
            if ($this->priceList !== null) {
                $data['priceList'] = $this->priceList->asArray();
            }
            if ($this->publication !== null) {
                $data['publication'] = $this->publication->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}

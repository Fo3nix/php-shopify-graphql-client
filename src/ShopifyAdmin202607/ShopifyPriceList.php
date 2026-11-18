<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCatalogHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCatalog;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPriceListParent;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPriceListPriceConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyQuantityRuleConnection;

/**
 * A list that defines pricing for [product variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant). Price lists override default product prices with either fixed prices or percentage-based adjustments.
 *
 * Each price list associates with a [`Catalog`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Catalog) to determine which customers see the pricing. The catalog's context rules control when the price list applies, such as for specific markets, company locations, or apps.
 *
 * Learn how to [support different pricing models](https://shopify.dev/docs/apps/build/markets/build-catalog).
 */
class ShopifyPriceList implements ShopifyNode
{
    protected $catalog;
    protected $createdAt;
    protected $currency;
    protected $fixedPricesCount;
    protected $id;
    protected $name;
    protected $parent;
    protected $prices;
    protected $quantityRules;

    
    /**
     * The catalog that the price list is associated with.
     *
     * @return ShopifyCatalog
     */
    public function getCatalog(): ?ShopifyCatalog
    {
        return $this->catalog;
    }

    
    /**
     * The date and time when the price list was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The currency for fixed prices associated with this price list.
     *
     * @return string A ShopifyCurrencyCodeEnumObject value
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    
    /**
     * The number of fixed prices on the price list.
     *
     * @return int
     */
    public function getFixedPricesCount(): ?int
    {
        return $this->fixedPricesCount;
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
     * The unique name of the price list, used as a human-readable identifier.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * Relative adjustments to other prices.
     *
     * @return ShopifyPriceListParent
     */
    public function getParent(): ?ShopifyPriceListParent
    {
        return $this->parent;
    }

    
    /**
     * A list of prices associated with the price list.
     *
     * @return ShopifyPriceListPriceConnection
     */
    public function getPrices(): ?ShopifyPriceListPriceConnection
    {
        return $this->prices;
    }

    
    /**
     * A list of quantity rules associated with the price list, ordered by product variants.
     *
     * @return ShopifyQuantityRuleConnection
     */
    public function getQuantityRules(): ?ShopifyQuantityRuleConnection
    {
        return $this->quantityRules;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['catalog']) && $data['catalog'] !== null) {
                $instance->catalog = ShopifyCatalogHydrator::fromArray($data['catalog']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currency']) && $data['currency'] !== null) {
                $instance->currency = $data['currency'];
            }
            if (isset($data['fixedPricesCount']) && $data['fixedPricesCount'] !== null) {
                $instance->fixedPricesCount = $data['fixedPricesCount'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['parent']) && $data['parent'] !== null) {
                $instance->parent = ShopifyPriceListParent::fromArray($data['parent']);
            }
            if (isset($data['prices']) && $data['prices'] !== null) {
                $instance->prices = ShopifyPriceListPriceConnection::fromArray($data['prices']);
            }
            if (isset($data['quantityRules']) && $data['quantityRules'] !== null) {
                $instance->quantityRules = ShopifyQuantityRuleConnection::fromArray($data['quantityRules']);
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
            if ($this->catalog !== null) {
                $data['catalog'] = ShopifyCatalogHydrator::toArray($this->catalog);
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->currency !== null) {
                $data['currency'] = $this->currency;
            }
            if ($this->fixedPricesCount !== null) {
                $data['fixedPricesCount'] = $this->fixedPricesCount;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->parent !== null) {
                $data['parent'] = $this->parent->asArray();
            }
            if ($this->prices !== null) {
                $data['prices'] = $this->prices->asArray();
            }
            if ($this->quantityRules !== null) {
                $data['quantityRules'] = $this->quantityRules->asArray();
            }
            return $data;
        }
}

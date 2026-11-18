<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDiscountHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyEventConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldConnection;

/**
 * The `DiscountNode` object enables you to manage [discounts](https://help.shopify.com/manual/discounts), which are applied at checkout or on a cart.
 *
 *
 * Discounts are a way for merchants to promote sales and special offers, or as customer loyalty rewards. Discounts can apply to [orders, products, or shipping](https://shopify.dev/docs/apps/build/discounts#discount-classes), and can be either automatic or code-based. For example, you can offer customers a buy X get Y discount that's automatically applied when purchases meet specific criteria. Or, you can offer discounts where customers have to enter a code to redeem an amount off discount on products, variants, or collections in a store.
 *
 * Learn more about working with [Shopify's discount model](https://shopify.dev/docs/apps/build/discounts),
 * including related mutations, limitations, and considerations.
 */
class ShopifyDiscountNode implements ShopifyHasEvents, ShopifyHasMetafieldDefinitions, ShopifyHasMetafields, ShopifyNode
{
    protected $discount;
    protected $events;
    protected $id;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;

    
    /**
     * A discount that's applied at checkout or on cart.
     *
     *
     * Discounts can be [automatic or code-based](https://shopify.dev/docs/apps/build/discounts#discount-methods).
     *
     * @return ShopifyDiscountAutomaticApp|ShopifyDiscountAutomaticBasic|ShopifyDiscountAutomaticBxgy|ShopifyDiscountAutomaticFreeShipping|ShopifyDiscountCodeApp|ShopifyDiscountCodeBasic|ShopifyDiscountCodeBxgy|ShopifyDiscountCodeFreeShipping
     */
    public function getDiscount(): ShopifyDiscountAutomaticApp|ShopifyDiscountAutomaticBasic|ShopifyDiscountAutomaticBxgy|ShopifyDiscountAutomaticFreeShipping|ShopifyDiscountCodeApp|ShopifyDiscountCodeBasic|ShopifyDiscountCodeBxgy|ShopifyDiscountCodeFreeShipping|null
    {
        return $this->discount;
    }

    
    /**
     * The paginated list of events associated with the host subject.
     *
     * @return ShopifyEventConnection
     */
    public function getEvents(): ?ShopifyEventConnection
    {
        return $this->events;
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
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     *
     * @return ShopifyMetafield
     */
    public function getMetafield(): ?ShopifyMetafield
    {
        return $this->metafield;
    }

    
    /**
     * List of metafield definitions.
     *
     * @return ShopifyMetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions(): ?ShopifyMetafieldDefinitionConnection
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     *
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields(): ?ShopifyMetafieldConnection
    {
        return $this->metafields;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['discount']) && $data['discount'] !== null) {
                $instance->discount = ShopifyDiscountHydrator::fromArray($data['discount']);
            }
            if (isset($data['events']) && $data['events'] !== null) {
                $instance->events = ShopifyEventConnection::fromArray($data['events']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = ShopifyMetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
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
            if ($this->discount !== null) {
                $data['discount'] = ShopifyDiscountHydrator::toArray($this->discount);
            }
            if ($this->events !== null) {
                $data['events'] = $this->events->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafieldDefinitions !== null) {
                $data['metafieldDefinitions'] = $this->metafieldDefinitions->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            return $data;
        }
}

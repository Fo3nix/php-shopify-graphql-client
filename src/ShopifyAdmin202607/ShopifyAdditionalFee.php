<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyTaxLine;

/**
 * Additional fees applied to an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) beyond the standard product and shipping costs. Additional fees typically include duties, import fees, or other special handling charges that need separate tracking from regular [`LineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) objects.
 *
 * Each fee includes its name, price in both shop and presentment currencies, and any applicable taxes broken down by [`TaxLine`](https://shopify.dev/docs/api/admin-graphql/latest/objects/TaxLine).
 */
class ShopifyAdditionalFee implements ShopifyNode
{
    protected $id;
    protected $name;
    protected $price;
    protected $taxLines;

    
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
     * The name of the additional fee.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The price of the additional fee.
     *
     * @return ShopifyMoneyBag
     */
    public function getPrice(): ?ShopifyMoneyBag
    {
        return $this->price;
    }

    
    /**
     * A list of taxes charged on the additional fee.
     *
     * @return ShopifyTaxLine[]
     */
    public function getTaxLines(): ?array
    {
        return $this->taxLines;
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
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = ShopifyMoneyBag::fromArray($data['price']);
            }
            if (isset($data['taxLines']) && $data['taxLines'] !== null) {
                $instance->taxLines = array_map(function($item) { return ShopifyTaxLine::fromArray($item); }, $data['taxLines']);
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
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->price !== null) {
                $data['price'] = $this->price->asArray();
            }
            if ($this->taxLines !== null) {
                $data['taxLines'] = array_map(function($item) { return $item->asArray(); }, $this->taxLines);
            }
            return $data;
        }
}

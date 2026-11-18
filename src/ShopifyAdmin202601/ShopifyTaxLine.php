<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyBag;

/**
 * A tax applied to a [`LineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) or [`ShippingLine`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShippingLine). Includes the tax amount, rate, title, and whether the channel that submitted the tax is liable for remitting it.
 *
 * The tax amount in both shop and presentment currencies after applying discounts. Includes information about the tax rate, whether the channel is liable for remitting the tax, and other tax-related details.
 */
class ShopifyTaxLine
{
    protected $channelLiable;
    protected $price;
    protected $priceSet;
    protected $rate;
    protected $ratePercentage;
    protected $source;
    protected $title;

    
    /**
     * Whether the channel that submitted the tax line is liable for remitting. A value of null indicates unknown liability for this tax line.
     *
     * @return bool
     */
    public function getChannelLiable(): ?bool
    {
        return $this->channelLiable;
    }

    
    /**
     * The amount of tax, in shop currency, after discounts and before returns.
     *
     * @return string
     */
    public function getPrice(): mixed
    {
        return $this->price;
    }

    
    /**
     * The amount of tax, in shop and presentment currencies, after discounts and before returns.
     *
     * @return ShopifyMoneyBag
     */
    public function getPriceSet(): ?ShopifyMoneyBag
    {
        return $this->priceSet;
    }

    
    /**
     * The proportion of the line item price that the tax represents as a decimal.
     *
     * @return float
     */
    public function getRate(): ?float
    {
        return $this->rate;
    }

    
    /**
     * The proportion of the line item price that the tax represents as a percentage.
     *
     * @return float
     */
    public function getRatePercentage(): ?float
    {
        return $this->ratePercentage;
    }

    
    /**
     * The source of the tax.
     *
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    
    /**
     * The name of the tax.
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
            if (isset($data['channelLiable']) && $data['channelLiable'] !== null) {
                $instance->channelLiable = $data['channelLiable'];
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = $data['price'];
            }
            if (isset($data['priceSet']) && $data['priceSet'] !== null) {
                $instance->priceSet = ShopifyMoneyBag::fromArray($data['priceSet']);
            }
            if (isset($data['rate']) && $data['rate'] !== null) {
                $instance->rate = $data['rate'];
            }
            if (isset($data['ratePercentage']) && $data['ratePercentage'] !== null) {
                $instance->ratePercentage = $data['ratePercentage'];
            }
            if (isset($data['source']) && $data['source'] !== null) {
                $instance->source = $data['source'];
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
            if ($this->channelLiable !== null) {
                $data['channelLiable'] = $this->channelLiable;
            }
            if ($this->price !== null) {
                $data['price'] = $this->price;
            }
            if ($this->priceSet !== null) {
                $data['priceSet'] = $this->priceSet->asArray();
            }
            if ($this->rate !== null) {
                $data['rate'] = $this->rate;
            }
            if ($this->ratePercentage !== null) {
                $data['ratePercentage'] = $this->ratePercentage;
            }
            if ($this->source !== null) {
                $data['source'] = $this->source;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}

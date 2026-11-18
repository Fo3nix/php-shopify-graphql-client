<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a tax line to create for an order.
 */
class ShopifyOrderCreateTaxLineInputInputObject extends InputObject
{
    const REQUIRED = ["rate", "title"];

    protected $channelLiable;
    protected $priceSet;
    protected $rate;
    protected $title;

    /**
     * Whether the channel that submitted the tax line is liable for remitting. A value of `null` indicates unknown liability for the tax line.
     */
    public function setChannelLiable($channelLiable): static
    {
        $this->channelLiable = $channelLiable;

        return $this;
    }

    /**
     * The amount added to the order for this tax in shop and presentment currencies after discounts are applied.
     */
    public function setPriceSet(ShopifyMoneyBagInputInputObject $shopifyMoneyBagInputInputObject): static
    {
        $this->priceSet = $shopifyMoneyBagInputInputObject;

        return $this;
    }

    /**
     * The proportion of the item price that the tax represents as a decimal.
     */
    public function setRate($rate): static
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * The name of the tax line to create.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }
}

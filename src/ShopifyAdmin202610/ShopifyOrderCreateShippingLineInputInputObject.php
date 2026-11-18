<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a shipping line to create for an order.
 */
class ShopifyOrderCreateShippingLineInputInputObject extends InputObject
{
    const REQUIRED = ["priceSet", "title"];

    protected $code;
    protected $priceSet;
    protected $source;
    protected $taxLines;
    protected $title;

    /**
     * A reference to the shipping method.
     */
    public function setCode($code): static
    {
        $this->code = $code;

        return $this;
    }

    /**
     * The price of this shipping method in the shop currency. Can't be negative.
     */
    public function setPriceSet(ShopifyMoneyBagInputInputObject $shopifyMoneyBagInputInputObject): static
    {
        $this->priceSet = $shopifyMoneyBagInputInputObject;

        return $this;
    }

    /**
     * The source of the shipping method.
     */
    public function setSource($source): static
    {
        $this->source = $source;

        return $this;
    }

    /**
     * A list of tax line objects, each of which details a tax applicable to this shipping line.
     */
    public function setTaxLines(array $taxLines): static
    {
        $this->taxLines = $taxLines;

        return $this;
    }

    /**
     * The title of the shipping method.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }
}

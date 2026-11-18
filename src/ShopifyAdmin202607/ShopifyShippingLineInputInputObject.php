<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for specifying the shipping details for the draft order.
 *
 * > Note:
 * > A custom shipping line includes a title and price with `shippingRateHandle` set to `nil`. A shipping line with a carrier-provided shipping rate (currently set via the Shopify admin) includes the shipping rate handle.
 */
class ShopifyShippingLineInputInputObject extends InputObject
{
    protected $priceWithCurrency;
    protected $shippingRateHandle;
    protected $title;

    /**
     * Price of the shipping rate with currency. If provided, `price` will be ignored.
     */
    public function setPriceWithCurrency(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->priceWithCurrency = $shopifyMoneyInputInputObject;

        return $this;
    }

    /**
     * A unique identifier for the shipping rate.
     */
    public function setShippingRateHandle($shippingRateHandle): static
    {
        $this->shippingRateHandle = $shippingRateHandle;

        return $this;
    }

    /**
     * Title of the shipping rate.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }
}

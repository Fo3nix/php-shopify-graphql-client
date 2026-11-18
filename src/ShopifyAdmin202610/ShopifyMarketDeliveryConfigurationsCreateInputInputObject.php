<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for configuring delivery for a new market.
 */
class ShopifyMarketDeliveryConfigurationsCreateInputInputObject extends InputObject
{
    protected $shipping;

    /**
     * The shipping configuration for the market.
     */
    public function setShipping(ShopifyShippingConfigurationCreateInputInputObject $shopifyShippingConfigurationCreateInputInputObject): static
    {
        $this->shipping = $shopifyShippingConfigurationCreateInputInputObject;

        return $this;
    }
}

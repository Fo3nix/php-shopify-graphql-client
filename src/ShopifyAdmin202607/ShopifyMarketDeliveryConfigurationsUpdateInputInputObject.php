<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for configuring delivery for an existing market.
 */
class ShopifyMarketDeliveryConfigurationsUpdateInputInputObject extends InputObject
{
    protected $shipping;
    protected $removeShipping;

    /**
     * Shipping configuration changes. When omitted, shipping is not changed.
     */
    public function setShipping(ShopifyShippingConfigurationUpdateInputInputObject $shopifyShippingConfigurationUpdateInputInputObject): static
    {
        $this->shipping = $shopifyShippingConfigurationUpdateInputInputObject;

        return $this;
    }

    /**
     * When true, removes the shipping configuration so the market inherits shipping from its parent.
     */
    public function setRemoveShipping($removeShipping): static
    {
        $this->removeShipping = $removeShipping;

        return $this;
    }
}

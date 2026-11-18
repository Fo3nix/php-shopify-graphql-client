<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for creating a market's shipping configuration.
 */
class ShopifyShippingConfigurationCreateInputInputObject extends InputObject
{
    const REQUIRED = ["isEnabled"];

    protected $isEnabled;
    protected $optionDefinitions;

    /**
     * Whether shipping is enabled for this market. When false, customers in this market won't see shipping options at checkout.
     */
    public function setIsEnabled($isEnabled): static
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Shipping options to create for the market.
     */
    public function setOptionDefinitions(array $optionDefinitions): static
    {
        $this->optionDefinitions = $optionDefinitions;

        return $this;
    }
}

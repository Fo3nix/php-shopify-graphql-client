<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketCurrencySettingsUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["marketId", "input"];

    protected $marketId;
    protected $input;

    /**
     * The ID of the market definition to target.
     */
    public function setMarketId($marketId): static
    {
        $this->marketId = $marketId;

        return $this;
    }

    /**
     * Properties to update for the market currency settings.
     */
    public function setInput(ShopifyMarketCurrencySettingsUpdateInputInputObject $shopifyMarketCurrencySettingsUpdateInputInputObject): static
    {
        $this->input = $shopifyMarketCurrencySettingsUpdateInputInputObject;

        return $this;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketWebPresenceCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["marketId", "webPresence"];

    protected $marketId;
    protected $webPresence;

    /**
     * The ID of the market for which to create a web presence.
     */
    public function setMarketId($marketId): static
    {
        $this->marketId = $marketId;

        return $this;
    }

    /**
     * The details of the web presence to be created.
     */
    public function setWebPresence(ShopifyMarketWebPresenceCreateInputInputObject $shopifyMarketWebPresenceCreateInputInputObject): static
    {
        $this->webPresence = $shopifyMarketWebPresenceCreateInputInputObject;

        return $this;
    }
}

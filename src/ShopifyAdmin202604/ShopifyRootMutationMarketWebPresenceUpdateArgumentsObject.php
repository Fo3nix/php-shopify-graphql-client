<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketWebPresenceUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["webPresenceId", "webPresence"];

    protected $webPresenceId;
    protected $webPresence;

    /**
     * The ID of the web presence to update.
     */
    public function setWebPresenceId($webPresenceId): static
    {
        $this->webPresenceId = $webPresenceId;

        return $this;
    }

    /**
     * The web_presence fields used to update the market's web presence.
     */
    public function setWebPresence(ShopifyMarketWebPresenceUpdateInputInputObject $shopifyMarketWebPresenceUpdateInputInputObject): static
    {
        $this->webPresence = $shopifyMarketWebPresenceUpdateInputInputObject;

        return $this;
    }
}

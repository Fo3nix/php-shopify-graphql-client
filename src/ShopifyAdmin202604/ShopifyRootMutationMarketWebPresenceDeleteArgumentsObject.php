<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketWebPresenceDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["webPresenceId"];

    protected $webPresenceId;

    /**
     * The ID of the web presence to delete.
     */
    public function setWebPresenceId($webPresenceId): static
    {
        $this->webPresenceId = $webPresenceId;

        return $this;
    }
}

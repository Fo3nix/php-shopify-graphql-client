<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketLocalizationsRegisterArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["resourceId", "marketLocalizations"];

    protected $resourceId;
    protected $marketLocalizations;

    /**
     * The ID of the resource that is being localized within the context of a market.
     */
    public function setResourceId($resourceId): static
    {
        $this->resourceId = $resourceId;

        return $this;
    }

    /**
     * The input fields for a market localization.
     */
    public function setMarketLocalizations(array $marketLocalizations): static
    {
        $this->marketLocalizations = $marketLocalizations;

        return $this;
    }
}

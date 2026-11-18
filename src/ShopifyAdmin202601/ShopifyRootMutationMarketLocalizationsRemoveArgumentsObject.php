<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMarketLocalizationsRemoveArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["resourceId", "marketLocalizationKeys", "marketIds"];

    protected $resourceId;
    protected $marketLocalizationKeys;
    protected $marketIds;

    /**
     * The ID of the resource for which market localizations are being deleted.
     */
    public function setResourceId($resourceId): static
    {
        $this->resourceId = $resourceId;

        return $this;
    }

    /**
     * The list of market localization keys.
     */
    public function setMarketLocalizationKeys(array $marketLocalizationKeys): static
    {
        $this->marketLocalizationKeys = $marketLocalizationKeys;

        return $this;
    }

    /**
     * The list of market IDs.
     */
    public function setMarketIds(array $marketIds): static
    {
        $this->marketIds = $marketIds;

        return $this;
    }
}

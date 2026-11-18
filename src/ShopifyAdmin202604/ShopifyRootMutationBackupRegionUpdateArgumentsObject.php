<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationBackupRegionUpdateArgumentsObject extends ArgumentsObject
{
    protected $region;

    /**
     * Optional input representing the region to be updated. If not provided, the existing regions remain unchanged.
     */
    public function setRegion(ShopifyBackupRegionUpdateInputInputObject $shopifyBackupRegionUpdateInputInputObject): static
    {
        $this->region = $shopifyBackupRegionUpdateInputInputObject;

        return $this;
    }
}

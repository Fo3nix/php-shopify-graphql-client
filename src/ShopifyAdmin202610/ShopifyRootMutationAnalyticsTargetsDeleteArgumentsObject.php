<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationAnalyticsTargetsDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["ids"];

    protected $ids;

    /**
     * The IDs of the analytics targets to delete.
     */
    public function setIds(array $ids): static
    {
        $this->ids = $ids;

        return $this;
    }
}

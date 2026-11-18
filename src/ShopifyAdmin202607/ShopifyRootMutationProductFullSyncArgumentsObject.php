<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductFullSyncArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id"];

    protected $beforeUpdatedAt;
    protected $id;
    protected $updatedAtSince;

    /**
     * Syncs only products that haven't changed since the specified timestamp.
     */
    public function setBeforeUpdatedAt($beforeUpdatedAt): static
    {
        $this->beforeUpdatedAt = $beforeUpdatedAt;

        return $this;
    }

    /**
     * The product feed which needs syncing.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Syncs only products that have changed since the specified timestamp.
     */
    public function setUpdatedAtSince($updatedAtSince): static
    {
        $this->updatedAtSince = $updatedAtSince;

        return $this;
    }
}

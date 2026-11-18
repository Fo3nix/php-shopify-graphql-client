<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a draft order tag.
 */
class ShopifyDraftOrderTagQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderTag";

    /**
     * Handle of draft order tag.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * ID of draft order tag.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Title of draft order tag.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}

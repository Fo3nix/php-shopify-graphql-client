<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * Specifies the condition by which metaobjects are deleted.
 * Exactly one field of input is required.
 */
class ShopifyMetaobjectBulkDeleteWhereConditionInputObject extends InputObject
{
    protected $type;
    protected $ids;

    /**
     * Deletes all metaobjects with the specified `type`.
     */
    public function setType($type): static
    {
        $this->type = $type;

        return $this;
    }

    /**
     * A list of metaobjects IDs to delete.
     */
    public function setIds(array $ids): static
    {
        $this->ids = $ids;

        return $this;
    }
}

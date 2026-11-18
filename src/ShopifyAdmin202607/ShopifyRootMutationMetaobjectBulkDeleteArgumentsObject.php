<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMetaobjectBulkDeleteArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["where"];

    protected $where;

    /**
     * Specifies the condition by which metaobjects are deleted.
     * Exactly one field of input is required.
     */
    public function setWhere(ShopifyMetaobjectBulkDeleteWhereConditionInputObject $shopifyMetaobjectBulkDeleteWhereConditionInputObject): static
    {
        $this->where = $shopifyMetaobjectBulkDeleteWhereConditionInputObject;

        return $this;
    }
}

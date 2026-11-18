<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationBulkOperationRunQueryArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["query"];

    protected $query;
    protected $groupObjects;

    /**
     * The query to be executed in bulk.
     */
    public function setQuery($query): static
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Enables grouping objects directly under their corresponding parent objects in the JSONL output. Enabling grouping slows down bulk operations and increases the likelihood of timeouts. Only enable grouping if you depend on the grouped format.
     */
    public function setGroupObjects($groupObjects): static
    {
        $this->groupObjects = $groupObjects;

        return $this;
    }
}

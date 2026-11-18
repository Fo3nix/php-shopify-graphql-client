<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Deletion events chronicle the destruction of resources (e.g. products and collections).
 * Once deleted, the deletion event is the only trace of the original's existence,
 * as the resource itself has been removed and can no longer be accessed.
 */
class ShopifyDeletionEventQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeletionEvent";

    /**
     * The date and time when the deletion event for the related resource was generated.
     */
    public function selectOccurredAt(): static
    {
        $this->selectField("occurredAt");

        return $this;
    }

    /**
     * The ID of the resource that was deleted.
     */
    public function selectSubjectId(): static
    {
        $this->selectField("subjectId");

        return $this;
    }

    /**
     * The type of resource that was deleted.
     */
    public function selectSubjectType(): static
    {
        $this->selectField("subjectType");

        return $this;
    }
}

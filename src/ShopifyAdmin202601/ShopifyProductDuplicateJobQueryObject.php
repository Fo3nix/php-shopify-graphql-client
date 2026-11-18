<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a product duplication job.
 */
class ShopifyProductDuplicateJobQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductDuplicateJob";

    /**
     * This indicates if the job is still queued or has been run.
     */
    public function selectDone(): static
    {
        $this->selectField("done");

        return $this;
    }

    /**
     * A globally-unique ID that's returned when running an asynchronous mutation.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }
}

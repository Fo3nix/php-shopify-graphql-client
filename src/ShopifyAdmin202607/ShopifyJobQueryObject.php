<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A job corresponds to some long running task that the client should poll for status.
 */
class ShopifyJobQueryObject extends QueryObject
{
    const OBJECT_NAME = "Job";

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

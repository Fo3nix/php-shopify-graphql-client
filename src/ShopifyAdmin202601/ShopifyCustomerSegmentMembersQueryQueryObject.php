<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A job to determine a list of members, such as customers, that are associated with an individual segment.
 */
class ShopifyCustomerSegmentMembersQueryQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSegmentMembersQuery";

    /**
     * The current total number of members in a given segment.
     */
    public function selectCurrentCount(): static
    {
        $this->selectField("currentCount");

        return $this;
    }

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

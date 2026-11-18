<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A job corresponds to some long running task that the client should poll for status.
 */
class ShopifyJobResultInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "JobResult";

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

    public function onCustomerSegmentMembersQuery(): ShopifyCustomerSegmentMembersQueryQueryObject
    {
        $object = new ShopifyCustomerSegmentMembersQueryQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}

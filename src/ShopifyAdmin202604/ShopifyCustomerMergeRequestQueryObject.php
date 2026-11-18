<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A merge request for merging two customers.
 */
class ShopifyCustomerMergeRequestQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergeRequest";

    /**
     * The merge errors that occurred during the customer merge request.
     */
    public function selectCustomerMergeErrors(?ShopifyCustomerMergeRequestCustomerMergeErrorsArgumentsObject $argsObject = null): ShopifyCustomerMergeErrorQueryObject
    {
        $object = new ShopifyCustomerMergeErrorQueryObject("customerMergeErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The UUID of the merge job.
     */
    public function selectJobId(): static
    {
        $this->selectField("jobId");

        return $this;
    }

    /**
     * The ID of the customer that was kept after the merge. Treat this ID as authoritative.
     */
    public function selectResultingCustomerId(): static
    {
        $this->selectField("resultingCustomerId");

        return $this;
    }

    /**
     * The status of the customer merge request.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCustomerMergeJobStatusArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["jobId"];

    protected $jobId;

    /**
     * The ID of the job performing the customer merge request.
     */
    public function setJobId($jobId): static
    {
        $this->jobId = $jobId;

        return $this;
    }
}

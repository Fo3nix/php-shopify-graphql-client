<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootCustomerMergeJobStatusArgumentsObject extends ArgumentsObject
{
    protected $jobId;

    public function setJobId($jobId)
    {
        $this->jobId = $jobId;

        return $this;
    }
}

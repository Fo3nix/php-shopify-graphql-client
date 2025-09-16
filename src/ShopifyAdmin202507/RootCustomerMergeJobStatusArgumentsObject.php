<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class RootCustomerMergeJobStatusArgumentsObject extends ArgumentsObject
{
    protected $jobId;

    public function setJobId($jobId)
    {
        $this->jobId = $jobId;

        return $this;
    }
}

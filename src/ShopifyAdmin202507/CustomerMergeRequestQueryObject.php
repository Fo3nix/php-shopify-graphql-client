<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerMergeRequestQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergeRequest";

    public function selectCustomerMergeErrors(CustomerMergeRequestCustomerMergeErrorsArgumentsObject $argsObject = null)
    {
        $object = new CustomerMergeErrorQueryObject("customerMergeErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectJobId()
    {
        $this->selectField("jobId");

        return $this;
    }

    public function selectResultingCustomerId()
    {
        $this->selectField("resultingCustomerId");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}

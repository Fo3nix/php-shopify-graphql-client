<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerMergeRequestQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergeRequest";

    public function selectCustomerMergeErrors(ShopifyCustomerMergeRequestCustomerMergeErrorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerMergeErrorQueryObject("customerMergeErrors");
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

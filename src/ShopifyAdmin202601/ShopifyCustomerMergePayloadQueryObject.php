<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerMerge` mutation.
 */
class ShopifyCustomerMergePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergePayload";

    /**
     * The asynchronous job for merging the customers.
     */
    public function selectJob(?ShopifyCustomerMergePayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the customer that's kept after the merge. Treat this ID as authoritative.
     */
    public function selectResultingCustomerId(): static
    {
        $this->selectField("resultingCustomerId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerMergePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCustomerMergeUserErrorQueryObject
    {
        $object = new ShopifyCustomerMergeUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

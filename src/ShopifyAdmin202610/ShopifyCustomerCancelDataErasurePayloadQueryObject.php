<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerCancelDataErasure` mutation.
 */
class ShopifyCustomerCancelDataErasurePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerCancelDataErasurePayload";

    /**
     * The ID of the customer whose pending data erasure has been cancelled.
     */
    public function selectCustomerId(): static
    {
        $this->selectField("customerId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerCancelDataErasurePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCustomerCancelDataErasureUserErrorQueryObject
    {
        $object = new ShopifyCustomerCancelDataErasureUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

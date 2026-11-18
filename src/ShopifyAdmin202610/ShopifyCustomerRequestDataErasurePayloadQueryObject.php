<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerRequestDataErasure` mutation.
 */
class ShopifyCustomerRequestDataErasurePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerRequestDataErasurePayload";

    /**
     * The ID of the customer that will be erased.
     */
    public function selectCustomerId(): static
    {
        $this->selectField("customerId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerRequestDataErasurePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCustomerRequestDataErasureUserErrorQueryObject
    {
        $object = new ShopifyCustomerRequestDataErasureUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

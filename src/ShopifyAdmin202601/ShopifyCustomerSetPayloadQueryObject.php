<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerSet` mutation.
 */
class ShopifyCustomerSetPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSetPayload";

    /**
     * The created or updated customer.
     */
    public function selectCustomer(?ShopifyCustomerSetPayloadCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerSetPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCustomerSetUserErrorQueryObject
    {
        $object = new ShopifyCustomerSetUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

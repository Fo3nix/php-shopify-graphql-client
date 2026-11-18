<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerAddressDelete` mutation.
 */
class ShopifyCustomerAddressDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerAddressDeletePayload";

    /**
     * The ID of the address deleted from the customer.
     */
    public function selectDeletedAddressId(): static
    {
        $this->selectField("deletedAddressId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerAddressDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerAddressUpdate` mutation.
 */
class ShopifyCustomerAddressUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerAddressUpdatePayload";

    /**
     * The updated address.
     */
    public function selectAddress(?ShopifyCustomerAddressUpdatePayloadAddressArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerAddressUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

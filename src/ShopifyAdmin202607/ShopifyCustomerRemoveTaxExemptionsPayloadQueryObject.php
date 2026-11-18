<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerRemoveTaxExemptions` mutation.
 */
class ShopifyCustomerRemoveTaxExemptionsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerRemoveTaxExemptionsPayload";

    /**
     * The updated customer.
     */
    public function selectCustomer(?ShopifyCustomerRemoveTaxExemptionsPayloadCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
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
    public function selectUserErrors(?ShopifyCustomerRemoveTaxExemptionsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

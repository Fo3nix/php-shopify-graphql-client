<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerAddTaxExemptions` mutation.
 */
class ShopifyCustomerAddTaxExemptionsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerAddTaxExemptionsPayload";

    /**
     * The updated customer.
     */
    public function selectCustomer(?ShopifyCustomerAddTaxExemptionsPayloadCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
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
    public function selectUserErrors(?ShopifyCustomerAddTaxExemptionsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

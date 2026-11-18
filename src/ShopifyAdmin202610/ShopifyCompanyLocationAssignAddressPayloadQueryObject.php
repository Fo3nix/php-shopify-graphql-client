<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyLocationAssignAddress` mutation.
 */
class ShopifyCompanyLocationAssignAddressPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationAssignAddressPayload";

    /**
     * The list of updated addresses on the company location.
     */
    public function selectAddresses(?ShopifyCompanyLocationAssignAddressPayloadAddressesArgumentsObject $argsObject = null): ShopifyCompanyAddressQueryObject
    {
        $object = new ShopifyCompanyAddressQueryObject("addresses");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyLocationAssignAddressPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

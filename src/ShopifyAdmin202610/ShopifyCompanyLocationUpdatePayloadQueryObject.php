<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyLocationUpdate` mutation.
 */
class ShopifyCompanyLocationUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationUpdatePayload";

    /**
     * The updated company location.
     */
    public function selectCompanyLocation(?ShopifyCompanyLocationUpdatePayloadCompanyLocationArgumentsObject $argsObject = null): ShopifyCompanyLocationQueryObject
    {
        $object = new ShopifyCompanyLocationQueryObject("companyLocation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyLocationUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

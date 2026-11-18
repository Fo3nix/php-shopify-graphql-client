<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyLocationRevokeTaxRegistration` mutation.
 */
class ShopifyCompanyLocationRevokeTaxRegistrationPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationRevokeTaxRegistrationPayload";

    /**
     * The updated company location.
     */
    public function selectCompanyLocation(?ShopifyCompanyLocationRevokeTaxRegistrationPayloadCompanyLocationArgumentsObject $argsObject = null): ShopifyCompanyLocationQueryObject
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
    public function selectUserErrors(?ShopifyCompanyLocationRevokeTaxRegistrationPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

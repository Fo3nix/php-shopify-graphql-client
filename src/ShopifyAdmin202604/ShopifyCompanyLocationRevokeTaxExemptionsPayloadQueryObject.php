<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyLocationRevokeTaxExemptions` mutation.
 */
class ShopifyCompanyLocationRevokeTaxExemptionsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationRevokeTaxExemptionsPayload";

    /**
     * The updated company location.
     */
    public function selectCompanyLocation(?ShopifyCompanyLocationRevokeTaxExemptionsPayloadCompanyLocationArgumentsObject $argsObject = null): ShopifyCompanyLocationQueryObject
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
    public function selectUserErrors(?ShopifyCompanyLocationRevokeTaxExemptionsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

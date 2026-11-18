<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyLocationAssignTaxExemptions` mutation.
 */
class ShopifyCompanyLocationAssignTaxExemptionsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationAssignTaxExemptionsPayload";

    /**
     * The updated company location.
     */
    public function selectCompanyLocation(?ShopifyCompanyLocationAssignTaxExemptionsPayloadCompanyLocationArgumentsObject $argsObject = null): ShopifyCompanyLocationQueryObject
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
    public function selectUserErrors(?ShopifyCompanyLocationAssignTaxExemptionsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

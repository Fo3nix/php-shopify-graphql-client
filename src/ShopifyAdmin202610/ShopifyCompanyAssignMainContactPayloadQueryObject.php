<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyAssignMainContact` mutation.
 */
class ShopifyCompanyAssignMainContactPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyAssignMainContactPayload";

    /**
     * The company for which the main contact is assigned.
     */
    public function selectCompany(?ShopifyCompanyAssignMainContactPayloadCompanyArgumentsObject $argsObject = null): ShopifyCompanyQueryObject
    {
        $object = new ShopifyCompanyQueryObject("company");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyAssignMainContactPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

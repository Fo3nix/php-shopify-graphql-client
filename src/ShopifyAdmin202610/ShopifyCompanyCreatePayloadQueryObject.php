<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyCreate` mutation.
 */
class ShopifyCompanyCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyCreatePayload";

    /**
     * The created company.
     */
    public function selectCompany(?ShopifyCompanyCreatePayloadCompanyArgumentsObject $argsObject = null): ShopifyCompanyQueryObject
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
    public function selectUserErrors(?ShopifyCompanyCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

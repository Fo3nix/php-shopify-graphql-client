<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyContactUpdate` mutation.
 */
class ShopifyCompanyContactUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactUpdatePayload";

    /**
     * The updated company contact.
     */
    public function selectCompanyContact(?ShopifyCompanyContactUpdatePayloadCompanyContactArgumentsObject $argsObject = null): ShopifyCompanyContactQueryObject
    {
        $object = new ShopifyCompanyContactQueryObject("companyContact");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCompanyContactUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

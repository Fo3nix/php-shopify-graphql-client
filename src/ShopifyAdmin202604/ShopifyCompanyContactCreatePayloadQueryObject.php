<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyContactCreate` mutation.
 */
class ShopifyCompanyContactCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactCreatePayload";

    /**
     * The created company contact.
     */
    public function selectCompanyContact(?ShopifyCompanyContactCreatePayloadCompanyContactArgumentsObject $argsObject = null): ShopifyCompanyContactQueryObject
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
    public function selectUserErrors(?ShopifyCompanyContactCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

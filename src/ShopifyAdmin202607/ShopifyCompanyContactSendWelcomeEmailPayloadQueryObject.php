<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyContactSendWelcomeEmail` mutation.
 */
class ShopifyCompanyContactSendWelcomeEmailPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyContactSendWelcomeEmailPayload";

    /**
     * The company contact to whom a welcome email was sent.
     */
    public function selectCompanyContact(?ShopifyCompanyContactSendWelcomeEmailPayloadCompanyContactArgumentsObject $argsObject = null): ShopifyCompanyContactQueryObject
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
    public function selectUserErrors(?ShopifyCompanyContactSendWelcomeEmailPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

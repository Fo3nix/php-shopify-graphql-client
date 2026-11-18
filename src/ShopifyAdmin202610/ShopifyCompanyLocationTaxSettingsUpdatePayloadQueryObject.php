<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `companyLocationTaxSettingsUpdate` mutation.
 */
class ShopifyCompanyLocationTaxSettingsUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CompanyLocationTaxSettingsUpdatePayload";

    /**
     * The company location with the updated tax settings.
     */
    public function selectCompanyLocation(?ShopifyCompanyLocationTaxSettingsUpdatePayloadCompanyLocationArgumentsObject $argsObject = null): ShopifyCompanyLocationQueryObject
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
    public function selectUserErrors(?ShopifyCompanyLocationTaxSettingsUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBusinessCustomerUserErrorQueryObject
    {
        $object = new ShopifyBusinessCustomerUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

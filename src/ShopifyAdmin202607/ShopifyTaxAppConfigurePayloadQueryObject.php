<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `taxAppConfigure` mutation.
 */
class ShopifyTaxAppConfigurePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "TaxAppConfigurePayload";

    /**
     * The updated tax app configuration.
     */
    public function selectTaxAppConfiguration(?ShopifyTaxAppConfigurePayloadTaxAppConfigurationArgumentsObject $argsObject = null): ShopifyTaxAppConfigurationQueryObject
    {
        $object = new ShopifyTaxAppConfigurationQueryObject("taxAppConfiguration");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyTaxAppConfigurePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyTaxAppConfigureUserErrorQueryObject
    {
        $object = new ShopifyTaxAppConfigureUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

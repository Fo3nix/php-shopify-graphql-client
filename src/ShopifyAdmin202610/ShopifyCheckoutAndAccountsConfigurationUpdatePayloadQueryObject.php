<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `checkoutAndAccountsConfigurationUpdate` mutation.
 */
class ShopifyCheckoutAndAccountsConfigurationUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationUpdatePayload";

    /**
     * The updated configuration.
     */
    public function selectConfiguration(?ShopifyCheckoutAndAccountsConfigurationUpdatePayloadConfigurationArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationQueryObject("configuration");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCheckoutAndAccountsConfigurationUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCheckoutAndAccountsConfigurationUserErrorQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

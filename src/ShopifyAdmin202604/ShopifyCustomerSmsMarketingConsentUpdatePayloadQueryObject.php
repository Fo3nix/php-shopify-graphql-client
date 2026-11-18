<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerSmsMarketingConsentUpdate` mutation.
 */
class ShopifyCustomerSmsMarketingConsentUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSmsMarketingConsentUpdatePayload";

    /**
     * The updated customer.
     */
    public function selectCustomer(?ShopifyCustomerSmsMarketingConsentUpdatePayloadCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerSmsMarketingConsentUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCustomerSmsMarketingConsentErrorQueryObject
    {
        $object = new ShopifyCustomerSmsMarketingConsentErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

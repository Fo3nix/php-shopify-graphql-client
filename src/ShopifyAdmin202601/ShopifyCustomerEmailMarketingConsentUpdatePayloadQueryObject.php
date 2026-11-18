<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerEmailMarketingConsentUpdate` mutation.
 */
class ShopifyCustomerEmailMarketingConsentUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerEmailMarketingConsentUpdatePayload";

    /**
     * The updated customer.
     */
    public function selectCustomer(?ShopifyCustomerEmailMarketingConsentUpdatePayloadCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
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
    public function selectUserErrors(?ShopifyCustomerEmailMarketingConsentUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCustomerEmailMarketingConsentUpdateUserErrorQueryObject
    {
        $object = new ShopifyCustomerEmailMarketingConsentUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

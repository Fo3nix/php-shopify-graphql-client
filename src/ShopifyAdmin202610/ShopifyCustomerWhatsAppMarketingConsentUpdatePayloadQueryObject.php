<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerWhatsAppMarketingConsentUpdate` mutation.
 */
class ShopifyCustomerWhatsAppMarketingConsentUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerWhatsAppMarketingConsentUpdatePayload";

    /**
     * The [customer phone number](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerPhoneNumber) with the updated WhatsApp marketing consent information.
     */
    public function selectCustomerPhoneNumber(?ShopifyCustomerWhatsAppMarketingConsentUpdatePayloadCustomerPhoneNumberArgumentsObject $argsObject = null): ShopifyCustomerPhoneNumberQueryObject
    {
        $object = new ShopifyCustomerPhoneNumberQueryObject("customerPhoneNumber");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCustomerWhatsAppMarketingConsentUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCustomerMarketingConsentErrorQueryObject
    {
        $object = new ShopifyCustomerMarketingConsentErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

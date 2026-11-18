<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `customerSendAccountInviteEmail` mutation.
 */
class ShopifyCustomerSendAccountInviteEmailPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerSendAccountInviteEmailPayload";

    /**
     * The customer to whom an account invite email was sent.
     */
    public function selectCustomer(?ShopifyCustomerSendAccountInviteEmailPayloadCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
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
    public function selectUserErrors(?ShopifyCustomerSendAccountInviteEmailPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCustomerSendAccountInviteEmailUserErrorQueryObject
    {
        $object = new ShopifyCustomerSendAccountInviteEmailUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

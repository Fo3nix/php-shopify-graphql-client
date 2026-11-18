<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `paymentReminderSend` mutation.
 */
class ShopifyPaymentReminderSendPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentReminderSendPayload";

    /**
     * Whether the payment reminder email was successfully sent.
     */
    public function selectSuccess(): static
    {
        $this->selectField("success");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPaymentReminderSendPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPaymentReminderSendUserErrorQueryObject
    {
        $object = new ShopifyPaymentReminderSendUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

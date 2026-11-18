<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `orderCreateMandatePayment` mutation.
 */
class ShopifyOrderCreateMandatePaymentPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderCreateMandatePaymentPayload";

    /**
     * The async job used for charging the payment.
     */
    public function selectJob(?ShopifyOrderCreateMandatePaymentPayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The Unique ID for the created payment.
     */
    public function selectPaymentReferenceId(): static
    {
        $this->selectField("paymentReferenceId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyOrderCreateMandatePaymentPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyOrderCreateMandatePaymentUserErrorQueryObject
    {
        $object = new ShopifyOrderCreateMandatePaymentUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

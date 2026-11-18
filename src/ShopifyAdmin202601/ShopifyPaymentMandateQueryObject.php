<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A payment instrument and the permission
 * the owner of the instrument gives to the merchant to debit it.
 */
class ShopifyPaymentMandateQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentMandate";

    /**
     * The unique ID of a payment mandate.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The outputs details of the payment instrument.
     */
    public function selectPaymentInstrument(?ShopifyPaymentMandatePaymentInstrumentArgumentsObject $argsObject = null): ShopifyPaymentInstrumentUnionObject
    {
        $object = new ShopifyPaymentInstrumentUnionObject("paymentInstrument");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentMandateQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentMandate";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectPaymentInstrument(ShopifyPaymentMandatePaymentInstrumentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentInstrumentUnionObject("paymentInstrument");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

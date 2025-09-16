<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PaymentMandateQueryObject extends QueryObject
{
    const OBJECT_NAME = "PaymentMandate";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectPaymentInstrument(PaymentMandatePaymentInstrumentArgumentsObject $argsObject = null)
    {
        $object = new PaymentInstrumentUnionObject("paymentInstrument");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

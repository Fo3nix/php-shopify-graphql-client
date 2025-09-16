<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CashRoundingAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashRoundingAdjustment";

    public function selectPaymentSet(CashRoundingAdjustmentPaymentSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("paymentSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundSet(CashRoundingAdjustmentRefundSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("refundSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

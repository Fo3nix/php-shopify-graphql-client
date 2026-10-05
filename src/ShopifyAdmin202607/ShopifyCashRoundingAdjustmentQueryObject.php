<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCashRoundingAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashRoundingAdjustment";

    public function selectPaymentSet(ShopifyCashRoundingAdjustmentPaymentSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("paymentSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundSet(ShopifyCashRoundingAdjustmentRefundSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("refundSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

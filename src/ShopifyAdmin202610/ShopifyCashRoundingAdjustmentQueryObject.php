<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The rounding adjustment applied to total payment or refund received for an Order involving cash payments.
 */
class ShopifyCashRoundingAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashRoundingAdjustment";

    /**
     * The rounding adjustment that can be applied to totalReceived for an Order involving cash payments in shop and presentment currencies. Could be a positive or negative value. Value is 0 if there's no rounding, or for non-cash payments.
     */
    public function selectPaymentSet(?ShopifyCashRoundingAdjustmentPaymentSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("paymentSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The rounding adjustment that can be applied to totalRefunded for an Order involving cash payments in shop and presentment currencies. Could be a positive or negative value. Value is 0 if there's no rounding, or for non-cash refunds.
     */
    public function selectRefundSet(?ShopifyCashRoundingAdjustmentRefundSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("refundSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

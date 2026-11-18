<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A return shipping fee is a fee captured as part of a return to cover the costs of shipping the return.
 */
class ShopifyReturnShippingFeeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnShippingFee";

    /**
     * The amount of the return shipping fee, in shop and presentment currencies.
     */
    public function selectAmountSet(?ShopifyReturnShippingFeeAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The finalized tax amount on the return shipping fee, in shop and presentment currencies. Locked in when the return is processed, and can differ from the estimate in `CalculatedReturnShippingFee.taxAmountSet`. Returns `null` until the return is processed, and zero if no tax applied to the fee.
     */
    public function selectFinalizedTaxAmountSet(?ShopifyReturnShippingFeeFinalizedTaxAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("finalizedTaxAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unique ID for the Fee.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }
}

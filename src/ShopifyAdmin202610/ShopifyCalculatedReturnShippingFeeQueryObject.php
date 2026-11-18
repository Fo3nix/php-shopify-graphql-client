<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The calculated cost of the return shipping.
 */
class ShopifyCalculatedReturnShippingFeeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedReturnShippingFee";

    /**
     * The calculated amount of the return fee, in shop and presentment currencies.
     */
    public function selectAmountSet(?ShopifyCalculatedReturnShippingFeeAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The estimated tax amount on the return shipping fee, in shop and presentment currencies. Estimated when the return is calculated or created, and zero when no tax applies to the fee. For the tax actually charged, use `ReturnShippingFee.finalizedTaxAmountSet` once the return is processed.
     */
    public function selectTaxAmountSet(?ShopifyCalculatedReturnShippingFeeTaxAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("taxAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

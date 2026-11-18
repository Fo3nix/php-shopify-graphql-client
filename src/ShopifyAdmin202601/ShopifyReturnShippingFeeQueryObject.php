<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

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
     * The unique ID for the Fee.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }
}

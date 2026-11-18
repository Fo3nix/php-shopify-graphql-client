<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

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
}

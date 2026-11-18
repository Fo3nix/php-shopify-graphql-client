<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A calculated return fee.
 */
class ShopifyCalculatedReturnFeeInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "CalculatedReturnFee";

    /**
     * The calculated amount of the return fee, in shop and presentment currencies.
     */
    public function selectAmountSet(?ShopifyCalculatedReturnFeeAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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

    public function onCalculatedRestockingFee(): ShopifyCalculatedRestockingFeeQueryObject
    {
        $object = new ShopifyCalculatedRestockingFeeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCalculatedReturnShippingFee(): ShopifyCalculatedReturnShippingFeeQueryObject
    {
        $object = new ShopifyCalculatedReturnShippingFeeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}

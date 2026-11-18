<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Generic attributes of a suggested refund method.
 */
class ShopifySuggestedRefundMethodInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "SuggestedRefundMethod";

    /**
     * The suggested amount to refund in shop and presentment currencies.
     */
    public function selectAmount(?ShopifySuggestedRefundMethodAmountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The maximum available amount to refund in shop and presentment currencies.
     */
    public function selectMaximumRefundable(?ShopifySuggestedRefundMethodMaximumRefundableArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("maximumRefundable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function onSuggestedStoreCreditRefund(): ShopifySuggestedStoreCreditRefundQueryObject
    {
        $object = new ShopifySuggestedStoreCreditRefundQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}

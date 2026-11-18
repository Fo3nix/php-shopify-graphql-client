<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The suggested values for a refund to store credit.
 */
class ShopifySuggestedStoreCreditRefundQueryObject extends QueryObject
{
    const OBJECT_NAME = "SuggestedStoreCreditRefund";

    /**
     * The suggested amount to refund in shop and presentment currencies.
     */
    public function selectAmount(?ShopifySuggestedStoreCreditRefundAmountArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The suggested expiration date for the store credit.
     */
    public function selectExpiresAt(): static
    {
        $this->selectField("expiresAt");

        return $this;
    }

    /**
     * The maximum available amount to refund in shop and presentment currencies.
     */
    public function selectMaximumRefundable(?ShopifySuggestedStoreCreditRefundMaximumRefundableArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("maximumRefundable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

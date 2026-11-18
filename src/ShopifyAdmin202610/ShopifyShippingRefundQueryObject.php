<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the shipping costs refunded on the Refund.
 */
class ShopifyShippingRefundQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingRefund";

    /**
     * The monetary value of the shipping fees to be refunded.
     *
     * @deprecated Use `amountSet` instead.
     */
    public function selectAmount(): static
    {
        $this->selectField("amount");

        return $this;
    }

    /**
     * The monetary value of the shipping fees to be refunded in shop and presentment currencies.
     */
    public function selectAmountSet(?ShopifyShippingRefundAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The maximum amount of shipping fees currently refundable.
     *
     * @deprecated Use `maximumRefundableSet` instead.
     */
    public function selectMaximumRefundable(): static
    {
        $this->selectField("maximumRefundable");

        return $this;
    }

    /**
     * The maximum amount of shipping fees currently refundable in shop and presentment currencies.
     */
    public function selectMaximumRefundableSet(?ShopifyShippingRefundMaximumRefundableSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("maximumRefundableSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The monetary value of the tax allocated to shipping fees to be refunded.
     *
     * @deprecated Use `taxSet` instead.
     */
    public function selectTax(): static
    {
        $this->selectField("tax");

        return $this;
    }

    /**
     * The monetary value of the tax allocated to shipping fees to be refunded in shop and presentment currencies.
     */
    public function selectTaxSet(?ShopifyShippingRefundTaxSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("taxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

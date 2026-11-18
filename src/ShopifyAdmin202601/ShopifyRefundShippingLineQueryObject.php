<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shipping line item that's included in a refund.
 */
class ShopifyRefundShippingLineQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundShippingLine";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The `ShippingLine` resource associated to the refunded shipping line item.
     */
    public function selectShippingLine(?ShopifyRefundShippingLineShippingLineArgumentsObject $argsObject = null): ShopifyShippingLineQueryObject
    {
        $object = new ShopifyShippingLineQueryObject("shippingLine");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The subtotal amount of the refund shipping line in shop and presentment currencies.
     */
    public function selectSubtotalAmountSet(?ShopifyRefundShippingLineSubtotalAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The tax amount of the refund shipping line in shop and presentment currencies.
     */
    public function selectTaxAmountSet(?ShopifyRefundShippingLineTaxAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("taxAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

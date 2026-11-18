<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The adjustment order object.
 */
class ShopifyShopifyPaymentsAdjustmentOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsAdjustmentOrder";

    /**
     * The amount of the adjustment order.
     */
    public function selectAmount(?ShopifyShopifyPaymentsAdjustmentOrderAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The fee of the adjustment order.
     */
    public function selectFees(?ShopifyShopifyPaymentsAdjustmentOrderFeesArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("fees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The link to the adjustment order.
     */
    public function selectLink(): static
    {
        $this->selectField("link");

        return $this;
    }

    /**
     * The name of the adjustment order.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The net of the adjustment order.
     */
    public function selectNet(?ShopifyShopifyPaymentsAdjustmentOrderNetArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("net");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the order transaction.
     */
    public function selectOrderTransactionId(): static
    {
        $this->selectField("orderTransactionId");

        return $this;
    }
}

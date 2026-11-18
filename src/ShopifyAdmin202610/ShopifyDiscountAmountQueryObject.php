<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The fixed amount value of a discount, and whether the amount is applied to each entitled item or spread evenly across the entitled items.
 */
class ShopifyDiscountAmountQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAmount";

    /**
     * The value of the discount.
     */
    public function selectAmount(?ShopifyDiscountAmountAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * If true, then the discount is applied to each of the entitled items. If false, then the amount is split across all of the entitled items.
     */
    public function selectAppliesOnEachItem(): static
    {
        $this->selectField("appliesOnEachItem");

        return $this;
    }
}

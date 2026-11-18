<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The order-level discount applied to a draft order.
 */
class ShopifyDraftOrderAppliedDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderAppliedDiscount";

    /**
     * Amount of the order-level discount that's applied to the draft order in shop currency.
     *
     * @deprecated Use `amountSet` instead.
     */
    public function selectAmount(): static
    {
        $this->selectField("amount");

        return $this;
    }

    /**
     * The amount of money discounted, with values shown in both shop currency and presentment currency.
     */
    public function selectAmountSet(?ShopifyDraftOrderAppliedDiscountAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Amount of money discounted.
     *
     * @deprecated Use `amountSet` instead.
     */
    public function selectAmountV2(?ShopifyDraftOrderAppliedDiscountAmountV2ArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amountV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Description of the order-level discount.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * Name of the order-level discount.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The order level discount amount. If `valueType` is `"percentage"`,
     * then `value` is the percentage discount.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }

    /**
     * Type of the order-level discount.
     */
    public function selectValueType(): static
    {
        $this->selectField("valueType");

        return $this;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The discount applied to an item that was added during the current order edit.
 */
class ShopifyOrderStagedChangeAddLineItemDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderStagedChangeAddLineItemDiscount";

    /**
     * The description of the discount.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The pricing value of the discount.
     */
    public function selectValue(?ShopifyOrderStagedChangeAddLineItemDiscountValueArgumentsObject $argsObject = null): ShopifyPricingValueUnionObject
    {
        $object = new ShopifyPricingValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A change to the order representing the addition of a
 * custom line item. For example, you might want to add gift wrapping service
 * as a custom line item.
 */
class ShopifyOrderStagedChangeAddCustomItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderStagedChangeAddCustomItem";

    /**
     * The price of an individual item without any discounts applied. This value can't be negative.
     */
    public function selectOriginalUnitPrice(?ShopifyOrderStagedChangeAddCustomItemOriginalUnitPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("originalUnitPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity of the custom item to add to the order. This value must be greater than zero.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The title of the custom item.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}

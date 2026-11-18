<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shipping line item involved in order editing that may be newly added or have new changes applied.
 */
class ShopifyCalculatedShippingLineQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedShippingLine";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The price of the shipping line when sold and before applying discounts. This field includes taxes if `Order.taxesIncluded` is true. Otherwise, this field doesn't include taxes for the shipping line.
     */
    public function selectPrice(?ShopifyCalculatedShippingLinePriceArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The staged status of the shipping line.
     */
    public function selectStagedStatus(): static
    {
        $this->selectField("stagedStatus");

        return $this;
    }

    /**
     * The title of the shipping line.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A discount created by a Shopify script for an order that is being edited.
 */
class ShopifyCalculatedScriptDiscountApplicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedScriptDiscountApplication";

    /**
     * The method by which the discount's value is allocated to its entitled items.
     */
    public function selectAllocationMethod(): static
    {
        $this->selectField("allocationMethod");

        return $this;
    }

    /**
     * The level at which the discount was applied.
     */
    public function selectAppliedTo(): static
    {
        $this->selectField("appliedTo");

        return $this;
    }

    /**
     * The description of discount application. Indicates the reason why the discount was applied.
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
     * How the discount amount is distributed on the discounted lines.
     */
    public function selectTargetSelection(): static
    {
        $this->selectField("targetSelection");

        return $this;
    }

    /**
     * Whether the discount is applied on line items or shipping lines.
     */
    public function selectTargetType(): static
    {
        $this->selectField("targetType");

        return $this;
    }

    /**
     * The value of the discount application.
     */
    public function selectValue(?ShopifyCalculatedScriptDiscountApplicationValueArgumentsObject $argsObject = null): ShopifyPricingValueUnionObject
    {
        $object = new ShopifyPricingValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

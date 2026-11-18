<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Discount applications capture the intentions of a discount source at
 * the time of application on an order's line items or shipping lines.
 *
 * Discount applications don't represent the actual final amount discounted on a line (line item or shipping line). The actual amount discounted on a line is represented by the [DiscountAllocation](https://shopify.dev/api/admin-graphql/latest/objects/discountallocation) object.
 */
class ShopifyDiscountApplicationInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "DiscountApplication";

    /**
     * The method by which the discount's value is applied to its entitled items.
     */
    public function selectAllocationMethod(): static
    {
        $this->selectField("allocationMethod");

        return $this;
    }

    /**
     * An ordered index that can be used to identify the discount application and indicate the precedence
     * of the discount application for calculations.
     */
    public function selectIndex(): static
    {
        $this->selectField("index");

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
    public function selectValue(?ShopifyDiscountApplicationValueArgumentsObject $argsObject = null): ShopifyPricingValueUnionObject
    {
        $object = new ShopifyPricingValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function onAutomaticDiscountApplication(): ShopifyAutomaticDiscountApplicationQueryObject
    {
        $object = new ShopifyAutomaticDiscountApplicationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountCodeApplication(): ShopifyDiscountCodeApplicationQueryObject
    {
        $object = new ShopifyDiscountCodeApplicationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onManualDiscountApplication(): ShopifyManualDiscountApplicationQueryObject
    {
        $object = new ShopifyManualDiscountApplicationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onScriptDiscountApplication(): ShopifyScriptDiscountApplicationQueryObject
    {
        $object = new ShopifyScriptDiscountApplicationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}

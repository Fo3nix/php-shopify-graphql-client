<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Script discount applications capture the intentions of a discount that
 * was created by a Shopify Script for an order's line item or shipping line.
 *
 * Discount applications don't represent the actual final amount discounted on a line (line item or shipping line). The actual amount discounted on a line is represented by the [DiscountAllocation](https://shopify.dev/api/admin-graphql/latest/objects/discountallocation) object.
 */
class ShopifyScriptDiscountApplicationQueryObject extends QueryObject
{
    const OBJECT_NAME = "ScriptDiscountApplication";

    /**
     * The method by which the discount's value is applied to its entitled items.
     */
    public function selectAllocationMethod(): static
    {
        $this->selectField("allocationMethod");

        return $this;
    }

    /**
     * The description of the application as defined by the Script.
     *
     * @deprecated Use `title` instead.
     */
    public function selectDescription(): static
    {
        $this->selectField("description");

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
     * The title of the application as defined by the Script.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The value of the discount application.
     */
    public function selectValue(?ShopifyScriptDiscountApplicationValueArgumentsObject $argsObject = null): ShopifyPricingValueUnionObject
    {
        $object = new ShopifyPricingValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

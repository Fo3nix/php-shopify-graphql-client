<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A [discount application](https://shopify.dev/api/admin-graphql/latest/interfaces/discountapplication) involved in order editing that might be newly added or have new changes applied.
 */
class ShopifyCalculatedDiscountApplicationInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "CalculatedDiscountApplication";

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
    public function selectValue(?ShopifyCalculatedDiscountApplicationValueArgumentsObject $argsObject = null): ShopifyPricingValueUnionObject
    {
        $object = new ShopifyPricingValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function onCalculatedAutomaticDiscountApplication(): ShopifyCalculatedAutomaticDiscountApplicationQueryObject
    {
        $object = new ShopifyCalculatedAutomaticDiscountApplicationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCalculatedDiscountCodeApplication(): ShopifyCalculatedDiscountCodeApplicationQueryObject
    {
        $object = new ShopifyCalculatedDiscountCodeApplicationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCalculatedManualDiscountApplication(): ShopifyCalculatedManualDiscountApplicationQueryObject
    {
        $object = new ShopifyCalculatedManualDiscountApplicationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCalculatedScriptDiscountApplication(): ShopifyCalculatedScriptDiscountApplicationQueryObject
    {
        $object = new ShopifyCalculatedScriptDiscountApplicationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}

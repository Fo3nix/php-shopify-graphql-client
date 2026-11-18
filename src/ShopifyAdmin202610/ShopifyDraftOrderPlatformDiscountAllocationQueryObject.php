<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Price reduction allocations across the draft order's lines.
 */
class ShopifyDraftOrderPlatformDiscountAllocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderPlatformDiscountAllocation";

    /**
     * The ID of the allocation.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The quantity of the target being discounted.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * Amount of the discount allocated to the target.
     */
    public function selectReductionAmount(?ShopifyDraftOrderPlatformDiscountAllocationReductionAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("reductionAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Amount of the discount allocated to the target in both shop currency and presentment currency.
     */
    public function selectReductionAmountSet(?ShopifyDraftOrderPlatformDiscountAllocationReductionAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("reductionAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The element of the draft being discounted.
     */
    public function selectTarget(?ShopifyDraftOrderPlatformDiscountAllocationTargetArgumentsObject $argsObject = null): ShopifyDraftOrderPlatformDiscountAllocationTargetUnionObject
    {
        $object = new ShopifyDraftOrderPlatformDiscountAllocationTargetUnionObject("target");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

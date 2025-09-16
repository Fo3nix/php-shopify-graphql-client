<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DraftOrderPlatformDiscountAllocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderPlatformDiscountAllocation";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }

    public function selectReductionAmount(DraftOrderPlatformDiscountAllocationReductionAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("reductionAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReductionAmountSet(DraftOrderPlatformDiscountAllocationReductionAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("reductionAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTarget(DraftOrderPlatformDiscountAllocationTargetArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderPlatformDiscountAllocationTargetUnionObject("target");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

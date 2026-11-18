<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The actual amount discounted on a line item or shipping line. While [`DiscountApplication`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/DiscountApplication) captures the discount's intentions and rules, The `DiscountAllocation` object shows the final calculated discount amount applied to each line.
 *
 * The allocation includes the discounted amount in both shop and presentment currencies, with a reference to the originating discount application.
 */
class ShopifyDiscountAllocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAllocation";

    /**
     * The money amount that's allocated to a line based on the associated discount application.
     *
     * @deprecated Use `allocatedAmountSet` instead.
     */
    public function selectAllocatedAmount(?ShopifyDiscountAllocationAllocatedAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("allocatedAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The money amount that's allocated to a line based on the associated discount application in shop and presentment currencies.
     */
    public function selectAllocatedAmountSet(?ShopifyDiscountAllocationAllocatedAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("allocatedAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The discount application that the allocated amount originated from.
     */
    public function selectDiscountApplication(?ShopifyDiscountAllocationDiscountApplicationArgumentsObject $argsObject = null): ShopifyDiscountApplicationInterfaceObject
    {
        $object = new ShopifyDiscountApplicationInterfaceObject("discountApplication");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

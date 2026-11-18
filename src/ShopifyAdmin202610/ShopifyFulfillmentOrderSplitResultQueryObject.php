<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The result of splitting a fulfillment order.
 */
class ShopifyFulfillmentOrderSplitResultQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderSplitResult";

    /**
     * The original fulfillment order as a result of the split.
     */
    public function selectFulfillmentOrder(?ShopifyFulfillmentOrderSplitResultFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("fulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The remaining fulfillment order as a result of the split.
     */
    public function selectRemainingFulfillmentOrder(?ShopifyFulfillmentOrderSplitResultRemainingFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("remainingFulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The replacement fulfillment order if the original fulfillment order wasn't in a state to be split.
     */
    public function selectReplacementFulfillmentOrder(?ShopifyFulfillmentOrderSplitResultReplacementFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("replacementFulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

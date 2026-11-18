<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The result of merging a set of fulfillment orders.
 */
class ShopifyFulfillmentOrderMergeResultQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderMergeResult";

    /**
     * The new fulfillment order as a result of the merge.
     */
    public function selectFulfillmentOrder(?ShopifyFulfillmentOrderMergeResultFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("fulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

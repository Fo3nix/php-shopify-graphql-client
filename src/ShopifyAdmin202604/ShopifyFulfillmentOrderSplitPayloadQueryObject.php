<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrderSplit` mutation.
 */
class ShopifyFulfillmentOrderSplitPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderSplitPayload";

    /**
     * The result of the fulfillment order splits.
     */
    public function selectFulfillmentOrderSplits(?ShopifyFulfillmentOrderSplitPayloadFulfillmentOrderSplitsArgumentsObject $argsObject = null): ShopifyFulfillmentOrderSplitResultQueryObject
    {
        $object = new ShopifyFulfillmentOrderSplitResultQueryObject("fulfillmentOrderSplits");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFulfillmentOrderSplitPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFulfillmentOrderSplitUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderSplitUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

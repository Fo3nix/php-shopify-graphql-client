<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrderCancel` mutation.
 */
class ShopifyFulfillmentOrderCancelPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderCancelPayload";

    /**
     * The fulfillment order that was marked as canceled.
     */
    public function selectFulfillmentOrder(?ShopifyFulfillmentOrderCancelPayloadFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("fulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The fulfillment order that was created to replace the canceled fulfillment order.
     */
    public function selectReplacementFulfillmentOrder(?ShopifyFulfillmentOrderCancelPayloadReplacementFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("replacementFulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFulfillmentOrderCancelPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFulfillmentOrderCancelErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderCancelErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

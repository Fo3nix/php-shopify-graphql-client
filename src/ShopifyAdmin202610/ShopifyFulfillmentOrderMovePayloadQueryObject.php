<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrderMove` mutation.
 */
class ShopifyFulfillmentOrderMovePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderMovePayload";

    /**
     * The fulfillment order which now contains the moved line items and is assigned to the destination location.
     *
     * If the original fulfillment order doesn't have any line items which are fully or partially fulfilled, the original fulfillment order will be moved to the new location.
     * However if this isn't the case, the moved fulfillment order will differ from the original one.
     */
    public function selectMovedFulfillmentOrder(?ShopifyFulfillmentOrderMovePayloadMovedFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("movedFulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The final state of the original fulfillment order.
     *
     * As a result of the move operation, the original fulfillment order might be moved to the new location
     * or remain in the original location. The original fulfillment order might have the same status or be closed.
     */
    public function selectOriginalFulfillmentOrder(?ShopifyFulfillmentOrderMovePayloadOriginalFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("originalFulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * This field is deprecated.
     */
    public function selectRemainingFulfillmentOrder(?ShopifyFulfillmentOrderMovePayloadRemainingFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("remainingFulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFulfillmentOrderMovePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFulfillmentOrderMoveFulfillmentOrderMoveUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderMoveFulfillmentOrderMoveUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

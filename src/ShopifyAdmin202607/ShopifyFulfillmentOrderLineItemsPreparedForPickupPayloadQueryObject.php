<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrderLineItemsPreparedForPickup` mutation.
 */
class ShopifyFulfillmentOrderLineItemsPreparedForPickupPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLineItemsPreparedForPickupPayload";

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFulfillmentOrderLineItemsPreparedForPickupPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFulfillmentOrderLineItemsPreparedForPickupUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderLineItemsPreparedForPickupUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

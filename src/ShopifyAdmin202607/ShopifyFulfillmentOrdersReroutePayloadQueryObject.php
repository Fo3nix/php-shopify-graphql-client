<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrdersReroute` mutation.
 */
class ShopifyFulfillmentOrdersReroutePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrdersReroutePayload";

    /**
     * The fulfillment orders which contains the moved line items.
     */
    public function selectMovedFulfillmentOrders(?ShopifyFulfillmentOrdersReroutePayloadMovedFulfillmentOrdersArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("movedFulfillmentOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFulfillmentOrdersReroutePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFulfillmentOrdersRerouteUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrdersRerouteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

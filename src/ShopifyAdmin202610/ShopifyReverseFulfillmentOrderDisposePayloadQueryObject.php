<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `reverseFulfillmentOrderDispose` mutation.
 */
class ShopifyReverseFulfillmentOrderDisposePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderDisposePayload";

    /**
     * The disposed reverse fulfillment order line items.
     */
    public function selectReverseFulfillmentOrderLineItems(?ShopifyReverseFulfillmentOrderDisposePayloadReverseFulfillmentOrderLineItemsArgumentsObject $argsObject = null): ShopifyReverseFulfillmentOrderLineItemQueryObject
    {
        $object = new ShopifyReverseFulfillmentOrderLineItemQueryObject("reverseFulfillmentOrderLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyReverseFulfillmentOrderDisposePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyReturnUserErrorQueryObject
    {
        $object = new ShopifyReturnUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

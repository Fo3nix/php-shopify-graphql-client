<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A returnable fulfillment line item.
 */
class ShopifyReturnableFulfillmentLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnableFulfillmentLineItem";

    /**
     * The fulfillment line item that can be returned.
     */
    public function selectFulfillmentLineItem(?ShopifyReturnableFulfillmentLineItemFulfillmentLineItemArgumentsObject $argsObject = null): ShopifyFulfillmentLineItemQueryObject
    {
        $object = new ShopifyFulfillmentLineItemQueryObject("fulfillmentLineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity available to be returned.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }
}

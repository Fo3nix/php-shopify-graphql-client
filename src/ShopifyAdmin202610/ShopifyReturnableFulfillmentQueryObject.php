<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A delivered order that's eligible to be returned to the merchant. Provides the items from completed fulfillments that customers can select when initiating a return.
 *
 * Use returnable fulfillments to determine which items are eligible for return before creating a [`Return`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Return) with the [`returnCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/returnCreate) mutation. The line items show quantities that are available for return.
 *
 * Learn more about [building return management workflows](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/build-return-management).
 */
class ShopifyReturnableFulfillmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnableFulfillment";

    /**
     * The fulfillment that the returnable fulfillment refers to.
     */
    public function selectFulfillment(?ShopifyReturnableFulfillmentFulfillmentArgumentsObject $argsObject = null): ShopifyFulfillmentQueryObject
    {
        $object = new ShopifyFulfillmentQueryObject("fulfillment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unique ID of the Returnable Fulfillment.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The list of returnable fulfillment line items.
     */
    public function selectReturnableFulfillmentLineItems(?ShopifyReturnableFulfillmentReturnableFulfillmentLineItemsArgumentsObject $argsObject = null): ShopifyReturnableFulfillmentLineItemConnectionQueryObject
    {
        $object = new ShopifyReturnableFulfillmentLineItemConnectionQueryObject("returnableFulfillmentLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A buyer-initiated request to edit unfulfilled line items on an order.
 */
class ShopifyRequestedOrderEditQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEdit";

    /**
     * The date and time when the requested order edit was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The line item changes included in this requested order edit, grouped by the type of change.
     */
    public function selectLineItems(?ShopifyRequestedOrderEditLineItemsArgumentsObject $argsObject = null): ShopifyRequestedOrderEditLineItemsQueryObject
    {
        $object = new ShopifyRequestedOrderEditLineItemsQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The order associated with this requested order edit.
     */
    public function selectOrder(?ShopifyRequestedOrderEditOrderArgumentsObject $argsObject = null): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject("order");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the requested order edit was declined.
     */
    public function selectRequestDeclinedAt(): static
    {
        $this->selectField("requestDeclinedAt");

        return $this;
    }

    /**
     * The date and time when the requested order edit was resolved.
     */
    public function selectRequestResolvedAt(): static
    {
        $this->selectField("requestResolvedAt");

        return $this;
    }

    /**
     * The date and time when the edit was requested by the buyer.
     */
    public function selectRequestedAt(): static
    {
        $this->selectField("requestedAt");

        return $this;
    }

    /**
     * The status of this requested order edit.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The date and time when the requested order edit was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}

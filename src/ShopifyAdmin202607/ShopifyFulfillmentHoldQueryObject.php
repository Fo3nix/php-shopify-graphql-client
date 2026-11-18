<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A fulfillment hold currently applied on a fulfillment order.
 */
class ShopifyFulfillmentHoldQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentHold";

    /**
     * The localized reason for the fulfillment hold for display purposes.
     */
    public function selectDisplayReason(): static
    {
        $this->selectField("displayReason");

        return $this;
    }

    /**
     * An identifier an app can use to reference one of many holds it applied to a fulfillment order.
     * This field must be unique among the holds that a single app applies to a single fulfillment order.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * The app that created the fulfillment hold.
     */
    public function selectHeldByApp(?ShopifyFulfillmentHoldHeldByAppArgumentsObject $argsObject = null): ShopifyAppQueryObject
    {
        $object = new ShopifyAppQueryObject("heldByApp");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A boolean value that indicates whether the requesting app created the fulfillment hold.
     */
    public function selectHeldByRequestingApp(): static
    {
        $this->selectField("heldByRequestingApp");

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
     * The reason for the fulfillment hold.
     */
    public function selectReason(): static
    {
        $this->selectField("reason");

        return $this;
    }

    /**
     * Additional information about the fulfillment hold reason.
     */
    public function selectReasonNotes(): static
    {
        $this->selectField("reasonNotes");

        return $this;
    }
}

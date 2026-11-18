<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The optional shipping label for this fulfillment.
 */
class ShopifyShippingLabelQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingLabel";

    /**
     * Indicates whether the label is cancellable or not.
     */
    public function selectCancellable(): static
    {
        $this->selectField("cancellable");

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
     * The location of the shipping origin. This will be null when the shipping origin is unknown.
     */
    public function selectLocation(?ShopifyShippingLabelLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Indicates whether the label was printed or not.
     */
    public function selectPrinted(): static
    {
        $this->selectField("printed");

        return $this;
    }

    /**
     * The documents for a shipping label.
     */
    public function selectShippingDocuments(?ShopifyShippingLabelShippingDocumentsArgumentsObject $argsObject = null): ShopifyShippingObjectsShippingDocumentQueryObject
    {
        $object = new ShopifyShippingObjectsShippingDocumentQueryObject("shippingDocuments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Tracking information for the shipping label.
     */
    public function selectTrackingInfo(?ShopifyShippingLabelTrackingInfoArgumentsObject $argsObject = null): ShopifyFulfillmentTrackingInfoQueryObject
    {
        $object = new ShopifyFulfillmentTrackingInfoQueryObject("trackingInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

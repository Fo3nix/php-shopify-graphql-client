<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShippingLabelQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingLabel";

    public function selectCancellable()
    {
        $this->selectField("cancellable");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLocation(ShopifyShippingLabelLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrinted()
    {
        $this->selectField("printed");

        return $this;
    }

    public function selectShippingDocuments(ShopifyShippingLabelShippingDocumentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShippingObjectsShippingDocumentQueryObject("shippingDocuments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTrackingInfo(ShopifyShippingLabelTrackingInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentTrackingInfoQueryObject("trackingInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

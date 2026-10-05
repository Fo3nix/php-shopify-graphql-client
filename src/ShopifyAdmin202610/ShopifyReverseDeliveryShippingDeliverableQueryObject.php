<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReverseDeliveryShippingDeliverableQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryShippingDeliverable";

    public function selectLabel(ShopifyReverseDeliveryShippingDeliverableLabelArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseDeliveryLabelV2QueryObject("label");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTracking(ShopifyReverseDeliveryShippingDeliverableTrackingArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseDeliveryTrackingV2QueryObject("tracking");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

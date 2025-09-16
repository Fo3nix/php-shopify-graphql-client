<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReverseDeliveryShippingDeliverableQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryShippingDeliverable";

    public function selectLabel(ReverseDeliveryShippingDeliverableLabelArgumentsObject $argsObject = null)
    {
        $object = new ReverseDeliveryLabelV2QueryObject("label");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTracking(ReverseDeliveryShippingDeliverableTrackingArgumentsObject $argsObject = null)
    {
        $object = new ReverseDeliveryTrackingV2QueryObject("tracking");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A reverse shipping deliverable that may include a label and tracking information.
 */
class ShopifyReverseDeliveryShippingDeliverableQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDeliveryShippingDeliverable";

    /**
     * The return label attached to the reverse delivery.
     */
    public function selectLabel(?ShopifyReverseDeliveryShippingDeliverableLabelArgumentsObject $argsObject = null): ShopifyReverseDeliveryLabelV2QueryObject
    {
        $object = new ShopifyReverseDeliveryLabelV2QueryObject("label");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The information to track the reverse delivery.
     */
    public function selectTracking(?ShopifyReverseDeliveryShippingDeliverableTrackingArgumentsObject $argsObject = null): ShopifyReverseDeliveryTrackingV2QueryObject
    {
        $object = new ShopifyReverseDeliveryTrackingV2QueryObject("tracking");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

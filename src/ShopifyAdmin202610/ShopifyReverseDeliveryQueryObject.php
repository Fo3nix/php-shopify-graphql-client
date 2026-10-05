<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReverseDeliveryQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDelivery";

    public function selectDeliverable(ShopifyReverseDeliveryDeliverableArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseDeliveryDeliverableUnionObject("deliverable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectReverseDeliveryLineItems(ShopifyReverseDeliveryReverseDeliveryLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseDeliveryLineItemConnectionQueryObject("reverseDeliveryLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReverseFulfillmentOrder(ShopifyReverseDeliveryReverseFulfillmentOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyReverseFulfillmentOrderQueryObject("reverseFulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ReverseDeliveryQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseDelivery";

    public function selectDeliverable(ReverseDeliveryDeliverableArgumentsObject $argsObject = null)
    {
        $object = new ReverseDeliveryDeliverableUnionObject("deliverable");
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

    public function selectReverseDeliveryLineItems(ReverseDeliveryReverseDeliveryLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ReverseDeliveryLineItemConnectionQueryObject("reverseDeliveryLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReverseFulfillmentOrder(ReverseDeliveryReverseFulfillmentOrderArgumentsObject $argsObject = null)
    {
        $object = new ReverseFulfillmentOrderQueryObject("reverseFulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

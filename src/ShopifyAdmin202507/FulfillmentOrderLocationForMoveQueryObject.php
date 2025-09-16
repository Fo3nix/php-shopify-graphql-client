<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentOrderLocationForMoveQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLocationForMove";

    public function selectAvailableLineItems(FulfillmentOrderLocationForMoveAvailableLineItemsArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderLineItemConnectionQueryObject("availableLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAvailableLineItemsCount(FulfillmentOrderLocationForMoveAvailableLineItemsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("availableLineItemsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocation(FulfillmentOrderLocationForMoveLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }

    public function selectMovable()
    {
        $this->selectField("movable");

        return $this;
    }

    public function selectUnavailableLineItems(FulfillmentOrderLocationForMoveUnavailableLineItemsArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderLineItemConnectionQueryObject("unavailableLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnavailableLineItemsCount(FulfillmentOrderLocationForMoveUnavailableLineItemsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("unavailableLineItemsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

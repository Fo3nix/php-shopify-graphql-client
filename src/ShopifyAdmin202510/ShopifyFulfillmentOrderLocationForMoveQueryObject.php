<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentOrderLocationForMoveQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLocationForMove";

    public function selectAvailableLineItems(ShopifyFulfillmentOrderLocationForMoveAvailableLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderLineItemConnectionQueryObject("availableLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAvailableLineItemsCount(ShopifyFulfillmentOrderLocationForMoveAvailableLineItemsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("availableLineItemsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocation(ShopifyFulfillmentOrderLocationForMoveLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("location");
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

    public function selectUnavailableLineItems(ShopifyFulfillmentOrderLocationForMoveUnavailableLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderLineItemConnectionQueryObject("unavailableLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnavailableLineItemsCount(ShopifyFulfillmentOrderLocationForMoveUnavailableLineItemsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("unavailableLineItemsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

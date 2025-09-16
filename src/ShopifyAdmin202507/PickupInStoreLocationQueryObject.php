<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class PickupInStoreLocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "PickupInStoreLocation";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectDistanceFromBuyer(PickupInStoreLocationDistanceFromBuyerArgumentsObject $argsObject = null)
    {
        $object = new DistanceQueryObject("distanceFromBuyer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHandle()
    {
        $this->selectField("handle");

        return $this;
    }

    public function selectInstructions()
    {
        $this->selectField("instructions");

        return $this;
    }

    public function selectLocationId()
    {
        $this->selectField("locationId");

        return $this;
    }

    public function selectSource()
    {
        $this->selectField("source");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }
}

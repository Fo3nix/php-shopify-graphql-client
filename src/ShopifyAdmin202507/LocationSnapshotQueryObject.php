<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class LocationSnapshotQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocationSnapshot";

    public function selectAddress(LocationSnapshotAddressArgumentsObject $argsObject = null)
    {
        $object = new LocationAddressQueryObject("address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocation(LocationSnapshotLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectSnapshottedAt()
    {
        $this->selectField("snapshottedAt");

        return $this;
    }
}

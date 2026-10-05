<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyLocationSnapshotQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocationSnapshot";

    public function selectAddress(ShopifyLocationSnapshotAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationAddressQueryObject("address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocation(ShopifyLocationSnapshotLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("location");
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

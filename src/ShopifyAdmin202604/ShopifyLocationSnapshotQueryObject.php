<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A snapshot of location details including name and address captured at a specific point in time. Refer to the parent model to know the lifecycle.
 */
class ShopifyLocationSnapshotQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocationSnapshot";

    /**
     * The address details of the location as they were when the snapshot was recorded.
     */
    public function selectAddress(?ShopifyLocationSnapshotAddressArgumentsObject $argsObject = null): ShopifyLocationAddressQueryObject
    {
        $object = new ShopifyLocationAddressQueryObject("address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A reference to the live Location object, if it still exists and is accessible. This provides current details of the location, which may differ from the snapshotted name and address.
     */
    public function selectLocation(?ShopifyLocationSnapshotLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the location as it was when the snapshot was recorded.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The date and time when these snapshot details (name and address) were recorded.
     */
    public function selectSnapshottedAt(): static
    {
        $this->selectField("snapshottedAt");

        return $this;
    }
}

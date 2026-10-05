<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryLevelQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryLevel";

    public function selectCanDeactivate()
    {
        $this->selectField("canDeactivate");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectDeactivationAlert()
    {
        $this->selectField("deactivationAlert");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectItem(ShopifyInventoryLevelItemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryItemQueryObject("item");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocation(ShopifyInventoryLevelLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantities(ShopifyInventoryLevelQuantitiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryQuantityQueryObject("quantities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Scheduled changes will be phased out in a future version.
     */
    public function selectScheduledChanges(ShopifyInventoryLevelScheduledChangesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryScheduledChangeConnectionQueryObject("scheduledChanges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}

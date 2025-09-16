<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryLevelQueryObject extends QueryObject
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

    public function selectItem(InventoryLevelItemArgumentsObject $argsObject = null)
    {
        $object = new InventoryItemQueryObject("item");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocation(InventoryLevelLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantities(InventoryLevelQuantitiesArgumentsObject $argsObject = null)
    {
        $object = new InventoryQuantityQueryObject("quantities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectScheduledChanges(InventoryLevelScheduledChangesArgumentsObject $argsObject = null)
    {
        $object = new InventoryScheduledChangeConnectionQueryObject("scheduledChanges");
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

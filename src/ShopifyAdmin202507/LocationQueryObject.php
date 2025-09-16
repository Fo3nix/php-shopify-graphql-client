<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class LocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "Location";

    public function selectActivatable()
    {
        $this->selectField("activatable");

        return $this;
    }

    public function selectAddress(LocationAddressArgumentsObject $argsObject = null)
    {
        $object = new LocationAddressQueryObject("address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAddressVerified()
    {
        $this->selectField("addressVerified");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectDeactivatable()
    {
        $this->selectField("deactivatable");

        return $this;
    }

    public function selectDeactivatedAt()
    {
        $this->selectField("deactivatedAt");

        return $this;
    }

    public function selectDeletable()
    {
        $this->selectField("deletable");

        return $this;
    }

    public function selectFulfillmentService(LocationFulfillmentServiceArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentServiceQueryObject("fulfillmentService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFulfillsOnlineOrders()
    {
        $this->selectField("fulfillsOnlineOrders");

        return $this;
    }

    public function selectHasActiveInventory()
    {
        $this->selectField("hasActiveInventory");

        return $this;
    }

    public function selectHasUnfulfilledOrders()
    {
        $this->selectField("hasUnfulfilledOrders");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectInventoryLevel(LocationInventoryLevelArgumentsObject $argsObject = null)
    {
        $object = new InventoryLevelQueryObject("inventoryLevel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryLevels(LocationInventoryLevelsArgumentsObject $argsObject = null)
    {
        $object = new InventoryLevelConnectionQueryObject("inventoryLevels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectIsActive()
    {
        $this->selectField("isActive");

        return $this;
    }

    public function selectIsFulfillmentService()
    {
        $this->selectField("isFulfillmentService");

        return $this;
    }

    /**
     * @deprecated The concept of a primary location is deprecated, shipsInventory can be used to get a fallback location
     */
    public function selectIsPrimary()
    {
        $this->selectField("isPrimary");

        return $this;
    }

    public function selectLegacyResourceId()
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function selectLocalPickupSettingsV2(LocationLocalPickupSettingsV2ArgumentsObject $argsObject = null)
    {
        $object = new DeliveryLocalPickupSettingsQueryObject("localPickupSettingsV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(LocationMetafieldArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(LocationMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(LocationMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
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

    public function selectShipsInventory()
    {
        $this->selectField("shipsInventory");

        return $this;
    }

    public function selectSuggestedAddresses(LocationSuggestedAddressesArgumentsObject $argsObject = null)
    {
        $object = new LocationSuggestedAddressQueryObject("suggestedAddresses");
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

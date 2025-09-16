<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryProfileQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfile";

    public function selectActiveMethodDefinitionsCount()
    {
        $this->selectField("activeMethodDefinitionsCount");

        return $this;
    }

    public function selectDefault()
    {
        $this->selectField("default");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * @deprecated Legacy mode profiles are no longer supported.
     */
    public function selectLegacyMode()
    {
        $this->selectField("legacyMode");

        return $this;
    }

    public function selectLocationsWithoutRatesCount()
    {
        $this->selectField("locationsWithoutRatesCount");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectOriginLocationCount()
    {
        $this->selectField("originLocationCount");

        return $this;
    }

    public function selectProductVariantsCount(DeliveryProfileProductVariantsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("productVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `productVariantsCount` instead.
     */
    public function selectProductVariantsCountV2(DeliveryProfileProductVariantsCountV2ArgumentsObject $argsObject = null)
    {
        $object = new DeliveryProductVariantsCountQueryObject("productVariantsCountV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProfileItems(DeliveryProfileProfileItemsArgumentsObject $argsObject = null)
    {
        $object = new DeliveryProfileItemConnectionQueryObject("profileItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProfileLocationGroups(DeliveryProfileProfileLocationGroupsArgumentsObject $argsObject = null)
    {
        $object = new DeliveryProfileLocationGroupQueryObject("profileLocationGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSellingPlanGroups(DeliveryProfileSellingPlanGroupsArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanGroupConnectionQueryObject("sellingPlanGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnassignedLocations(DeliveryProfileUnassignedLocationsArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("unassignedLocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnassignedLocationsPaginated(DeliveryProfileUnassignedLocationsPaginatedArgumentsObject $argsObject = null)
    {
        $object = new LocationConnectionQueryObject("unassignedLocationsPaginated");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectZoneCountryCount()
    {
        $this->selectField("zoneCountryCount");

        return $this;
    }
}

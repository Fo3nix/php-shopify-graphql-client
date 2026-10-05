<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryProfileQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfile";

    public function selectActiveMethodDefinitionsCount()
    {
        $this->selectField("activeMethodDefinitionsCount");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

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

    public function selectProductVariantsCount(ShopifyDeliveryProfileProductVariantsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("productVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `productVariantsCount` instead.
     */
    public function selectProductVariantsCountV2(ShopifyDeliveryProfileProductVariantsCountV2ArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryProductVariantsCountQueryObject("productVariantsCountV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProfileItems(ShopifyDeliveryProfileProfileItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryProfileItemConnectionQueryObject("profileItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProfileLocationGroups(ShopifyDeliveryProfileProfileLocationGroupsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryProfileLocationGroupQueryObject("profileLocationGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSellingPlanGroups(ShopifyDeliveryProfileSellingPlanGroupsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanGroupConnectionQueryObject("sellingPlanGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnassignedLocations(ShopifyDeliveryProfileUnassignedLocationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("unassignedLocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnassignedLocationsPaginated(ShopifyDeliveryProfileUnassignedLocationsPaginatedArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationConnectionQueryObject("unassignedLocationsPaginated");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVersion()
    {
        $this->selectField("version");

        return $this;
    }

    public function selectZoneCountryCount()
    {
        $this->selectField("zoneCountryCount");

        return $this;
    }
}

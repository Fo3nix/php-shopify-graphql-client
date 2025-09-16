<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryItem";

    public function selectCountryCodeOfOrigin()
    {
        $this->selectField("countryCodeOfOrigin");

        return $this;
    }

    public function selectCountryHarmonizedSystemCodes(InventoryItemCountryHarmonizedSystemCodesArgumentsObject $argsObject = null)
    {
        $object = new CountryHarmonizedSystemCodeConnectionQueryObject("countryHarmonizedSystemCodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectDuplicateSkuCount()
    {
        $this->selectField("duplicateSkuCount");

        return $this;
    }

    public function selectHarmonizedSystemCode()
    {
        $this->selectField("harmonizedSystemCode");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectInventoryHistoryUrl()
    {
        $this->selectField("inventoryHistoryUrl");

        return $this;
    }

    public function selectInventoryLevel(InventoryItemInventoryLevelArgumentsObject $argsObject = null)
    {
        $object = new InventoryLevelQueryObject("inventoryLevel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryLevels(InventoryItemInventoryLevelsArgumentsObject $argsObject = null)
    {
        $object = new InventoryLevelConnectionQueryObject("inventoryLevels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLegacyResourceId()
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function selectLocationsCount(InventoryItemLocationsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("locationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMeasurement(InventoryItemMeasurementArgumentsObject $argsObject = null)
    {
        $object = new InventoryItemMeasurementQueryObject("measurement");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProvinceCodeOfOrigin()
    {
        $this->selectField("provinceCodeOfOrigin");

        return $this;
    }

    public function selectRequiresShipping()
    {
        $this->selectField("requiresShipping");

        return $this;
    }

    public function selectSku()
    {
        $this->selectField("sku");

        return $this;
    }

    public function selectTracked()
    {
        $this->selectField("tracked");

        return $this;
    }

    public function selectTrackedEditable(InventoryItemTrackedEditableArgumentsObject $argsObject = null)
    {
        $object = new EditablePropertyQueryObject("trackedEditable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnitCost(InventoryItemUnitCostArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("unitCost");
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

    public function selectVariant(InventoryItemVariantArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

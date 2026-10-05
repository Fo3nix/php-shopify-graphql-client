<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryItem";

    public function selectCountryCodeOfOrigin()
    {
        $this->selectField("countryCodeOfOrigin");

        return $this;
    }

    public function selectCountryHarmonizedSystemCodes(ShopifyInventoryItemCountryHarmonizedSystemCodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountryHarmonizedSystemCodeConnectionQueryObject("countryHarmonizedSystemCodes");
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

    public function selectInventoryLevel(ShopifyInventoryItemInventoryLevelArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryLevelQueryObject("inventoryLevel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryLevels(ShopifyInventoryItemInventoryLevelsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryLevelConnectionQueryObject("inventoryLevels");
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

    public function selectLocationsCount(ShopifyInventoryItemLocationsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("locationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMeasurement(ShopifyInventoryItemMeasurementArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryItemMeasurementQueryObject("measurement");
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

    public function selectTrackedEditable(ShopifyInventoryItemTrackedEditableArgumentsObject $argsObject = null)
    {
        $object = new ShopifyEditablePropertyQueryObject("trackedEditable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnitCost(ShopifyInventoryItemUnitCostArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("unitCost");
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

    /**
     * @deprecated Use `variants` instead.
     */
    public function selectVariant(ShopifyInventoryItemVariantArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVariants(ShopifyInventoryItemVariantsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantConnectionQueryObject("variants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

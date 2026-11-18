<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An inventory item represents the inventory for a [product variant](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant). It holds the stock keeping unit (SKU), whether quantities are tracked, shipping requirements, and customs information.
 *
 * Use the [`inventoryLevels`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem#field-InventoryItem.fields.inventoryLevels) field to get the [inventory level](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryLevel) for each location that stocks the item, and the level's [`quantities`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryLevel#field-InventoryLevel.fields.quantities) field to read its inventory quantities by name. Quantity names represent the [inventory states](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps#inventory-states) that merchants use to track inventory.
 *
 * Learn more about [inventory object relationships](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states#inventory-object-relationships).
 */
class ShopifyInventoryItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryItem";

    /**
     * The ISO 3166-1 alpha-2 country code of where the item originated from.
     */
    public function selectCountryCodeOfOrigin(): static
    {
        $this->selectField("countryCodeOfOrigin");

        return $this;
    }

    /**
     * A list of country specific harmonized system codes.
     */
    public function selectCountryHarmonizedSystemCodes(?ShopifyInventoryItemCountryHarmonizedSystemCodesArgumentsObject $argsObject = null): ShopifyCountryHarmonizedSystemCodeConnectionQueryObject
    {
        $object = new ShopifyCountryHarmonizedSystemCodeConnectionQueryObject("countryHarmonizedSystemCodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the inventory item was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The number of inventory items that share the same SKU with this item.
     */
    public function selectDuplicateSkuCount(): static
    {
        $this->selectField("duplicateSkuCount");

        return $this;
    }

    /**
     * The harmonized system code of the item. This must be a number between 6 and 13 digits.
     */
    public function selectHarmonizedSystemCode(): static
    {
        $this->selectField("harmonizedSystemCode");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The URL that points to the inventory history for the item.
     */
    public function selectInventoryHistoryUrl(): static
    {
        $this->selectField("inventoryHistoryUrl");

        return $this;
    }

    /**
     * The inventory item's quantities at the specified location.
     */
    public function selectInventoryLevel(ShopifyInventoryItemInventoryLevelArgumentsObject $argsObject): ShopifyInventoryLevelQueryObject
    {
        $object = new ShopifyInventoryLevelQueryObject("inventoryLevel");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of the inventory item's quantities for each location that the inventory item can be stocked at.
     */
    public function selectInventoryLevels(?ShopifyInventoryItemInventoryLevelsArgumentsObject $argsObject = null): ShopifyInventoryLevelConnectionQueryObject
    {
        $object = new ShopifyInventoryLevelConnectionQueryObject("inventoryLevels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the corresponding resource in the REST Admin API.
     */
    public function selectLegacyResourceId(): static
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    /**
     * The number of locations where this inventory item is stocked.
     */
    public function selectLocationsCount(?ShopifyInventoryItemLocationsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("locationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The packaging dimensions of the inventory item.
     */
    public function selectMeasurement(?ShopifyInventoryItemMeasurementArgumentsObject $argsObject = null): ShopifyInventoryItemMeasurementQueryObject
    {
        $object = new ShopifyInventoryItemMeasurementQueryObject("measurement");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ISO 3166-2 alpha-2 province code of where the item originated from.
     */
    public function selectProvinceCodeOfOrigin(): static
    {
        $this->selectField("provinceCodeOfOrigin");

        return $this;
    }

    /**
     * Whether a customer needs to provide a shipping address when placing an order containing the inventory item.
     */
    public function selectRequiresShipping(): static
    {
        $this->selectField("requiresShipping");

        return $this;
    }

    /**
     * Inventory item SKU. Case-sensitive string.
     */
    public function selectSku(): static
    {
        $this->selectField("sku");

        return $this;
    }

    /**
     * Whether inventory levels are tracked for the item.
     */
    public function selectTracked(): static
    {
        $this->selectField("tracked");

        return $this;
    }

    /**
     * Whether the value of the `tracked` field for the inventory item can be changed.
     */
    public function selectTrackedEditable(?ShopifyInventoryItemTrackedEditableArgumentsObject $argsObject = null): ShopifyEditablePropertyQueryObject
    {
        $object = new ShopifyEditablePropertyQueryObject("trackedEditable");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Unit cost associated with the inventory item. The shop's currency is used. Note: the user must have "View product costs" permission granted in order to access this field once product granular permissions are enabled.
     */
    public function selectUnitCost(?ShopifyInventoryItemUnitCostArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("unitCost");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the inventory item was updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * The variant that owns this inventory item.
     *
     * @deprecated Use `variants` instead.
     */
    public function selectVariant(?ShopifyInventoryItemVariantArgumentsObject $argsObject = null): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject("variant");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A paginated list of the variants that reference this inventory item.
     */
    public function selectVariants(?ShopifyInventoryItemVariantsArgumentsObject $argsObject = null): ShopifyProductVariantConnectionQueryObject
    {
        $object = new ShopifyProductVariantConnectionQueryObject("variants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCountryHarmonizedSystemCodeConnection;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryLevel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryLevelConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryItemMeasurement;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyEditableProperty;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductVariant;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyProductVariantConnection;

/**
 * An inventory item represents the inventory for a [product variant](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant). It holds the stock keeping unit (SKU), whether quantities are tracked, shipping requirements, and customs information.
 *
 * Use the [`inventoryLevels`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem#field-InventoryItem.fields.inventoryLevels) field to get the [inventory level](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryLevel) for each location that stocks the item, and the level's [`quantities`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryLevel#field-InventoryLevel.fields.quantities) field to read its inventory quantities by name. Quantity names represent the [inventory states](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps#inventory-states) that merchants use to track inventory.
 *
 * Learn more about [inventory object relationships](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states#inventory-object-relationships).
 */
class ShopifyInventoryItem implements ShopifyLegacyInteroperability, ShopifyNode
{
    protected $countryCodeOfOrigin;
    protected $countryHarmonizedSystemCodes;
    protected $createdAt;
    protected $duplicateSkuCount;
    protected $harmonizedSystemCode;
    protected $id;
    protected $inventoryHistoryUrl;
    protected $inventoryLevel;
    protected $inventoryLevels;
    protected $legacyResourceId;
    protected $locationsCount;
    protected $measurement;
    protected $provinceCodeOfOrigin;
    protected $requiresShipping;
    protected $sku;
    protected $tracked;
    protected $trackedEditable;
    protected $unitCost;
    protected $updatedAt;
    protected $variant;
    protected $variants;

    
    /**
     * The ISO 3166-1 alpha-2 country code of where the item originated from.
     *
     * @return string A ShopifyCountryCodeEnumObject value
     */
    public function getCountryCodeOfOrigin(): ?string
    {
        return $this->countryCodeOfOrigin;
    }

    
    /**
     * A list of country specific harmonized system codes.
     *
     * @return ShopifyCountryHarmonizedSystemCodeConnection
     */
    public function getCountryHarmonizedSystemCodes(): ?ShopifyCountryHarmonizedSystemCodeConnection
    {
        return $this->countryHarmonizedSystemCodes;
    }

    
    /**
     * The date and time when the inventory item was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The number of inventory items that share the same SKU with this item.
     *
     * @return int
     */
    public function getDuplicateSkuCount(): ?int
    {
        return $this->duplicateSkuCount;
    }

    
    /**
     * The harmonized system code of the item. This must be a number between 6 and 13 digits.
     *
     * @return string
     */
    public function getHarmonizedSystemCode(): ?string
    {
        return $this->harmonizedSystemCode;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The URL that points to the inventory history for the item.
     *
     * @return string
     */
    public function getInventoryHistoryUrl(): mixed
    {
        return $this->inventoryHistoryUrl;
    }

    
    /**
     * The inventory item's quantities at the specified location.
     *
     * @return ShopifyInventoryLevel
     */
    public function getInventoryLevel(): ?ShopifyInventoryLevel
    {
        return $this->inventoryLevel;
    }

    
    /**
     * A list of the inventory item's quantities for each location that the inventory item can be stocked at.
     *
     * @return ShopifyInventoryLevelConnection
     */
    public function getInventoryLevels(): ?ShopifyInventoryLevelConnection
    {
        return $this->inventoryLevels;
    }

    
    /**
     * The ID of the corresponding resource in the REST Admin API.
     *
     * @return string
     */
    public function getLegacyResourceId(): mixed
    {
        return $this->legacyResourceId;
    }

    
    /**
     * The number of locations where this inventory item is stocked.
     *
     * @return ShopifyCount
     */
    public function getLocationsCount(): ?ShopifyCount
    {
        return $this->locationsCount;
    }

    
    /**
     * The packaging dimensions of the inventory item.
     *
     * @return ShopifyInventoryItemMeasurement
     */
    public function getMeasurement(): ?ShopifyInventoryItemMeasurement
    {
        return $this->measurement;
    }

    
    /**
     * The ISO 3166-2 alpha-2 province code of where the item originated from.
     *
     * @return string
     */
    public function getProvinceCodeOfOrigin(): ?string
    {
        return $this->provinceCodeOfOrigin;
    }

    
    /**
     * Whether a customer needs to provide a shipping address when placing an order containing the inventory item.
     *
     * @return bool
     */
    public function getRequiresShipping(): ?bool
    {
        return $this->requiresShipping;
    }

    
    /**
     * Inventory item SKU. Case-sensitive string.
     *
     * @return string
     */
    public function getSku(): ?string
    {
        return $this->sku;
    }

    
    /**
     * Whether inventory levels are tracked for the item.
     *
     * @return bool
     */
    public function getTracked(): ?bool
    {
        return $this->tracked;
    }

    
    /**
     * Whether the value of the `tracked` field for the inventory item can be changed.
     *
     * @return ShopifyEditableProperty
     */
    public function getTrackedEditable(): ?ShopifyEditableProperty
    {
        return $this->trackedEditable;
    }

    
    /**
     * Unit cost associated with the inventory item. The shop's currency is used. Note: the user must have "View product costs" permission granted in order to access this field once product granular permissions are enabled.
     *
     * @return ShopifyMoneyV2
     */
    public function getUnitCost(): ?ShopifyMoneyV2
    {
        return $this->unitCost;
    }

    
    /**
     * The date and time when the inventory item was updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

    
    /**
     * The variant that owns this inventory item.
     *
     * @return ShopifyProductVariant
     */
    public function getVariant(): ?ShopifyProductVariant
    {
        return $this->variant;
    }

    
    /**
     * A paginated list of the variants that reference this inventory item.
     *
     * @return ShopifyProductVariantConnection
     */
    public function getVariants(): ?ShopifyProductVariantConnection
    {
        return $this->variants;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['countryCodeOfOrigin']) && $data['countryCodeOfOrigin'] !== null) {
                $instance->countryCodeOfOrigin = $data['countryCodeOfOrigin'];
            }
            if (isset($data['countryHarmonizedSystemCodes']) && $data['countryHarmonizedSystemCodes'] !== null) {
                $instance->countryHarmonizedSystemCodes = ShopifyCountryHarmonizedSystemCodeConnection::fromArray($data['countryHarmonizedSystemCodes']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['duplicateSkuCount']) && $data['duplicateSkuCount'] !== null) {
                $instance->duplicateSkuCount = $data['duplicateSkuCount'];
            }
            if (isset($data['harmonizedSystemCode']) && $data['harmonizedSystemCode'] !== null) {
                $instance->harmonizedSystemCode = $data['harmonizedSystemCode'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inventoryHistoryUrl']) && $data['inventoryHistoryUrl'] !== null) {
                $instance->inventoryHistoryUrl = $data['inventoryHistoryUrl'];
            }
            if (isset($data['inventoryLevel']) && $data['inventoryLevel'] !== null) {
                $instance->inventoryLevel = ShopifyInventoryLevel::fromArray($data['inventoryLevel']);
            }
            if (isset($data['inventoryLevels']) && $data['inventoryLevels'] !== null) {
                $instance->inventoryLevels = ShopifyInventoryLevelConnection::fromArray($data['inventoryLevels']);
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['locationsCount']) && $data['locationsCount'] !== null) {
                $instance->locationsCount = ShopifyCount::fromArray($data['locationsCount']);
            }
            if (isset($data['measurement']) && $data['measurement'] !== null) {
                $instance->measurement = ShopifyInventoryItemMeasurement::fromArray($data['measurement']);
            }
            if (isset($data['provinceCodeOfOrigin']) && $data['provinceCodeOfOrigin'] !== null) {
                $instance->provinceCodeOfOrigin = $data['provinceCodeOfOrigin'];
            }
            if (isset($data['requiresShipping']) && $data['requiresShipping'] !== null) {
                $instance->requiresShipping = $data['requiresShipping'];
            }
            if (isset($data['sku']) && $data['sku'] !== null) {
                $instance->sku = $data['sku'];
            }
            if (isset($data['tracked']) && $data['tracked'] !== null) {
                $instance->tracked = $data['tracked'];
            }
            if (isset($data['trackedEditable']) && $data['trackedEditable'] !== null) {
                $instance->trackedEditable = ShopifyEditableProperty::fromArray($data['trackedEditable']);
            }
            if (isset($data['unitCost']) && $data['unitCost'] !== null) {
                $instance->unitCost = ShopifyMoneyV2::fromArray($data['unitCost']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['variant']) && $data['variant'] !== null) {
                $instance->variant = ShopifyProductVariant::fromArray($data['variant']);
            }
            if (isset($data['variants']) && $data['variants'] !== null) {
                $instance->variants = ShopifyProductVariantConnection::fromArray($data['variants']);
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->countryCodeOfOrigin !== null) {
                $data['countryCodeOfOrigin'] = $this->countryCodeOfOrigin;
            }
            if ($this->countryHarmonizedSystemCodes !== null) {
                $data['countryHarmonizedSystemCodes'] = $this->countryHarmonizedSystemCodes->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->duplicateSkuCount !== null) {
                $data['duplicateSkuCount'] = $this->duplicateSkuCount;
            }
            if ($this->harmonizedSystemCode !== null) {
                $data['harmonizedSystemCode'] = $this->harmonizedSystemCode;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->inventoryHistoryUrl !== null) {
                $data['inventoryHistoryUrl'] = $this->inventoryHistoryUrl;
            }
            if ($this->inventoryLevel !== null) {
                $data['inventoryLevel'] = $this->inventoryLevel->asArray();
            }
            if ($this->inventoryLevels !== null) {
                $data['inventoryLevels'] = $this->inventoryLevels->asArray();
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->locationsCount !== null) {
                $data['locationsCount'] = $this->locationsCount->asArray();
            }
            if ($this->measurement !== null) {
                $data['measurement'] = $this->measurement->asArray();
            }
            if ($this->provinceCodeOfOrigin !== null) {
                $data['provinceCodeOfOrigin'] = $this->provinceCodeOfOrigin;
            }
            if ($this->requiresShipping !== null) {
                $data['requiresShipping'] = $this->requiresShipping;
            }
            if ($this->sku !== null) {
                $data['sku'] = $this->sku;
            }
            if ($this->tracked !== null) {
                $data['tracked'] = $this->tracked;
            }
            if ($this->trackedEditable !== null) {
                $data['trackedEditable'] = $this->trackedEditable->asArray();
            }
            if ($this->unitCost !== null) {
                $data['unitCost'] = $this->unitCost->asArray();
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            if ($this->variant !== null) {
                $data['variant'] = $this->variant->asArray();
            }
            if ($this->variants !== null) {
                $data['variants'] = $this->variants->asArray();
            }
            return $data;
        }
}

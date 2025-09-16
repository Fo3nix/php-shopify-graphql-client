<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CountryHarmonizedSystemCodeConnection;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryLevel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryLevelConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Count;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryItemMeasurement;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\EditableProperty;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ProductVariant;

class InventoryItem
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

    
    /**
     * @return CountryCodeEnumObject
     */
    public function getCountryCodeOfOrigin()
    {
        return $this->countryCodeOfOrigin;
    }

    
    /**
     * @return CountryHarmonizedSystemCodeConnection
     */
    public function getCountryHarmonizedSystemCodes()
    {
        return $this->countryHarmonizedSystemCodes;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return int
     */
    public function getDuplicateSkuCount()
    {
        return $this->duplicateSkuCount;
    }

    
    /**
     * @return string
     */
    public function getHarmonizedSystemCode()
    {
        return $this->harmonizedSystemCode;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getInventoryHistoryUrl()
    {
        return $this->inventoryHistoryUrl;
    }

    
    /**
     * @return InventoryLevel
     */
    public function getInventoryLevel()
    {
        return $this->inventoryLevel;
    }

    
    /**
     * @return InventoryLevelConnection
     */
    public function getInventoryLevels()
    {
        return $this->inventoryLevels;
    }

    
    /**
     * @return string
     */
    public function getLegacyResourceId()
    {
        return $this->legacyResourceId;
    }

    
    /**
     * @return Count
     */
    public function getLocationsCount()
    {
        return $this->locationsCount;
    }

    
    /**
     * @return InventoryItemMeasurement
     */
    public function getMeasurement()
    {
        return $this->measurement;
    }

    
    /**
     * @return string
     */
    public function getProvinceCodeOfOrigin()
    {
        return $this->provinceCodeOfOrigin;
    }

    
    /**
     * @return bool
     */
    public function getRequiresShipping()
    {
        return $this->requiresShipping;
    }

    
    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    
    /**
     * @return bool
     */
    public function getTracked()
    {
        return $this->tracked;
    }

    
    /**
     * @return EditableProperty
     */
    public function getTrackedEditable()
    {
        return $this->trackedEditable;
    }

    
    /**
     * @return MoneyV2
     */
    public function getUnitCost()
    {
        return $this->unitCost;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    
    /**
     * @return ProductVariant
     */
    public function getVariant()
    {
        return $this->variant;
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
                $instance->countryHarmonizedSystemCodes = CountryHarmonizedSystemCodeConnection::fromArray($data['countryHarmonizedSystemCodes']);
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
                $instance->inventoryLevel = InventoryLevel::fromArray($data['inventoryLevel']);
            }
            if (isset($data['inventoryLevels']) && $data['inventoryLevels'] !== null) {
                $instance->inventoryLevels = InventoryLevelConnection::fromArray($data['inventoryLevels']);
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['locationsCount']) && $data['locationsCount'] !== null) {
                $instance->locationsCount = Count::fromArray($data['locationsCount']);
            }
            if (isset($data['measurement']) && $data['measurement'] !== null) {
                $instance->measurement = InventoryItemMeasurement::fromArray($data['measurement']);
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
                $instance->trackedEditable = EditableProperty::fromArray($data['trackedEditable']);
            }
            if (isset($data['unitCost']) && $data['unitCost'] !== null) {
                $instance->unitCost = MoneyV2::fromArray($data['unitCost']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
            }
            if (isset($data['variant']) && $data['variant'] !== null) {
                $instance->variant = ProductVariant::fromArray($data['variant']);
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
            return $data;
        }
}

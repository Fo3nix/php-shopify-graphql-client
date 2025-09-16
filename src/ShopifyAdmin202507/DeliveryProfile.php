<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Count;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryProductVariantsCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryProfileItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryProfileLocationGroup;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SellingPlanGroupConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Location;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LocationConnection;

class DeliveryProfile
{
    protected $activeMethodDefinitionsCount;
    protected $default;
    protected $id;
    protected $legacyMode;
    protected $locationsWithoutRatesCount;
    protected $name;
    protected $originLocationCount;
    protected $productVariantsCount;
    protected $productVariantsCountV2;
    protected $profileItems;
    protected $profileLocationGroups;
    protected $sellingPlanGroups;
    protected $unassignedLocations;
    protected $unassignedLocationsPaginated;
    protected $zoneCountryCount;

    
    /**
     * @return int
     */
    public function getActiveMethodDefinitionsCount()
    {
        return $this->activeMethodDefinitionsCount;
    }

    
    /**
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return bool
     */
    public function getLegacyMode()
    {
        return $this->legacyMode;
    }

    
    /**
     * @return int
     */
    public function getLocationsWithoutRatesCount()
    {
        return $this->locationsWithoutRatesCount;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return int
     */
    public function getOriginLocationCount()
    {
        return $this->originLocationCount;
    }

    
    /**
     * @return Count
     */
    public function getProductVariantsCount()
    {
        return $this->productVariantsCount;
    }

    
    /**
     * @return DeliveryProductVariantsCount
     */
    public function getProductVariantsCountV2()
    {
        return $this->productVariantsCountV2;
    }

    
    /**
     * @return DeliveryProfileItemConnection
     */
    public function getProfileItems()
    {
        return $this->profileItems;
    }

    
    /**
     * @return DeliveryProfileLocationGroup[]
     */
    public function getProfileLocationGroups()
    {
        return $this->profileLocationGroups;
    }

    
    /**
     * @return SellingPlanGroupConnection
     */
    public function getSellingPlanGroups()
    {
        return $this->sellingPlanGroups;
    }

    
    /**
     * @return Location[]
     */
    public function getUnassignedLocations()
    {
        return $this->unassignedLocations;
    }

    
    /**
     * @return LocationConnection
     */
    public function getUnassignedLocationsPaginated()
    {
        return $this->unassignedLocationsPaginated;
    }

    
    /**
     * @return int
     */
    public function getZoneCountryCount()
    {
        return $this->zoneCountryCount;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['activeMethodDefinitionsCount']) && $data['activeMethodDefinitionsCount'] !== null) {
                $instance->activeMethodDefinitionsCount = $data['activeMethodDefinitionsCount'];
            }
            if (isset($data['default']) && $data['default'] !== null) {
                $instance->default = $data['default'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['legacyMode']) && $data['legacyMode'] !== null) {
                $instance->legacyMode = $data['legacyMode'];
            }
            if (isset($data['locationsWithoutRatesCount']) && $data['locationsWithoutRatesCount'] !== null) {
                $instance->locationsWithoutRatesCount = $data['locationsWithoutRatesCount'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['originLocationCount']) && $data['originLocationCount'] !== null) {
                $instance->originLocationCount = $data['originLocationCount'];
            }
            if (isset($data['productVariantsCount']) && $data['productVariantsCount'] !== null) {
                $instance->productVariantsCount = Count::fromArray($data['productVariantsCount']);
            }
            if (isset($data['productVariantsCountV2']) && $data['productVariantsCountV2'] !== null) {
                $instance->productVariantsCountV2 = DeliveryProductVariantsCount::fromArray($data['productVariantsCountV2']);
            }
            if (isset($data['profileItems']) && $data['profileItems'] !== null) {
                $instance->profileItems = DeliveryProfileItemConnection::fromArray($data['profileItems']);
            }
            if (isset($data['profileLocationGroups']) && $data['profileLocationGroups'] !== null) {
                $instance->profileLocationGroups = array_map(function($item) { return DeliveryProfileLocationGroup::fromArray($item); }, $data['profileLocationGroups']);
            }
            if (isset($data['sellingPlanGroups']) && $data['sellingPlanGroups'] !== null) {
                $instance->sellingPlanGroups = SellingPlanGroupConnection::fromArray($data['sellingPlanGroups']);
            }
            if (isset($data['unassignedLocations']) && $data['unassignedLocations'] !== null) {
                $instance->unassignedLocations = array_map(function($item) { return Location::fromArray($item); }, $data['unassignedLocations']);
            }
            if (isset($data['unassignedLocationsPaginated']) && $data['unassignedLocationsPaginated'] !== null) {
                $instance->unassignedLocationsPaginated = LocationConnection::fromArray($data['unassignedLocationsPaginated']);
            }
            if (isset($data['zoneCountryCount']) && $data['zoneCountryCount'] !== null) {
                $instance->zoneCountryCount = $data['zoneCountryCount'];
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
            if ($this->activeMethodDefinitionsCount !== null) {
                $data['activeMethodDefinitionsCount'] = $this->activeMethodDefinitionsCount;
            }
            if ($this->default !== null) {
                $data['default'] = $this->default;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->legacyMode !== null) {
                $data['legacyMode'] = $this->legacyMode;
            }
            if ($this->locationsWithoutRatesCount !== null) {
                $data['locationsWithoutRatesCount'] = $this->locationsWithoutRatesCount;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->originLocationCount !== null) {
                $data['originLocationCount'] = $this->originLocationCount;
            }
            if ($this->productVariantsCount !== null) {
                $data['productVariantsCount'] = $this->productVariantsCount->asArray();
            }
            if ($this->productVariantsCountV2 !== null) {
                $data['productVariantsCountV2'] = $this->productVariantsCountV2->asArray();
            }
            if ($this->profileItems !== null) {
                $data['profileItems'] = $this->profileItems->asArray();
            }
            if ($this->profileLocationGroups !== null) {
                $data['profileLocationGroups'] = array_map(function($item) { return $item->asArray(); }, $this->profileLocationGroups);
            }
            if ($this->sellingPlanGroups !== null) {
                $data['sellingPlanGroups'] = $this->sellingPlanGroups->asArray();
            }
            if ($this->unassignedLocations !== null) {
                $data['unassignedLocations'] = array_map(function($item) { return $item->asArray(); }, $this->unassignedLocations);
            }
            if ($this->unassignedLocationsPaginated !== null) {
                $data['unassignedLocationsPaginated'] = $this->unassignedLocationsPaginated->asArray();
            }
            if ($this->zoneCountryCount !== null) {
                $data['zoneCountryCount'] = $this->zoneCountryCount;
            }
            return $data;
        }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LocationAddress;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryLevel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\InventoryLevelConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryLocalPickupSettings;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Metafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LocationSuggestedAddress;

class Location
{
    protected $activatable;
    protected $address;
    protected $addressVerified;
    protected $createdAt;
    protected $deactivatable;
    protected $deactivatedAt;
    protected $deletable;
    protected $fulfillmentService;
    protected $fulfillsOnlineOrders;
    protected $hasActiveInventory;
    protected $hasUnfulfilledOrders;
    protected $id;
    protected $inventoryLevel;
    protected $inventoryLevels;
    protected $isActive;
    protected $isFulfillmentService;
    protected $isPrimary;
    protected $legacyResourceId;
    protected $localPickupSettingsV2;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $name;
    protected $shipsInventory;
    protected $suggestedAddresses;
    protected $updatedAt;

    
    /**
     * @return bool
     */
    public function getActivatable()
    {
        return $this->activatable;
    }

    
    /**
     * @return LocationAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    
    /**
     * @return bool
     */
    public function getAddressVerified()
    {
        return $this->addressVerified;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return bool
     */
    public function getDeactivatable()
    {
        return $this->deactivatable;
    }

    
    /**
     * @return Carbon
     */
    public function getDeactivatedAt()
    {
        return $this->deactivatedAt;
    }

    
    /**
     * @return bool
     */
    public function getDeletable()
    {
        return $this->deletable;
    }

    
    /**
     * @return FulfillmentService
     */
    public function getFulfillmentService()
    {
        return $this->fulfillmentService;
    }

    
    /**
     * @return bool
     */
    public function getFulfillsOnlineOrders()
    {
        return $this->fulfillsOnlineOrders;
    }

    
    /**
     * @return bool
     */
    public function getHasActiveInventory()
    {
        return $this->hasActiveInventory;
    }

    
    /**
     * @return bool
     */
    public function getHasUnfulfilledOrders()
    {
        return $this->hasUnfulfilledOrders;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
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
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    
    /**
     * @return bool
     */
    public function getIsFulfillmentService()
    {
        return $this->isFulfillmentService;
    }

    
    /**
     * @return bool
     */
    public function getIsPrimary()
    {
        return $this->isPrimary;
    }

    
    /**
     * @return string
     */
    public function getLegacyResourceId()
    {
        return $this->legacyResourceId;
    }

    
    /**
     * @return DeliveryLocalPickupSettings
     */
    public function getLocalPickupSettingsV2()
    {
        return $this->localPickupSettingsV2;
    }

    
    /**
     * @return Metafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return MetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions()
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * @return MetafieldConnection
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return bool
     */
    public function getShipsInventory()
    {
        return $this->shipsInventory;
    }

    
    /**
     * @return LocationSuggestedAddress[]
     */
    public function getSuggestedAddresses()
    {
        return $this->suggestedAddresses;
    }

    
    /**
     * @return Carbon
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['activatable']) && $data['activatable'] !== null) {
                $instance->activatable = $data['activatable'];
            }
            if (isset($data['address']) && $data['address'] !== null) {
                $instance->address = LocationAddress::fromArray($data['address']);
            }
            if (isset($data['addressVerified']) && $data['addressVerified'] !== null) {
                $instance->addressVerified = $data['addressVerified'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['deactivatable']) && $data['deactivatable'] !== null) {
                $instance->deactivatable = $data['deactivatable'];
            }
            if (isset($data['deactivatedAt']) && $data['deactivatedAt'] !== null) {
                $instance->deactivatedAt = new Carbon($data['deactivatedAt']);
            }
            if (isset($data['deletable']) && $data['deletable'] !== null) {
                $instance->deletable = $data['deletable'];
            }
            if (isset($data['fulfillmentService']) && $data['fulfillmentService'] !== null) {
                $instance->fulfillmentService = FulfillmentService::fromArray($data['fulfillmentService']);
            }
            if (isset($data['fulfillsOnlineOrders']) && $data['fulfillsOnlineOrders'] !== null) {
                $instance->fulfillsOnlineOrders = $data['fulfillsOnlineOrders'];
            }
            if (isset($data['hasActiveInventory']) && $data['hasActiveInventory'] !== null) {
                $instance->hasActiveInventory = $data['hasActiveInventory'];
            }
            if (isset($data['hasUnfulfilledOrders']) && $data['hasUnfulfilledOrders'] !== null) {
                $instance->hasUnfulfilledOrders = $data['hasUnfulfilledOrders'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['inventoryLevel']) && $data['inventoryLevel'] !== null) {
                $instance->inventoryLevel = InventoryLevel::fromArray($data['inventoryLevel']);
            }
            if (isset($data['inventoryLevels']) && $data['inventoryLevels'] !== null) {
                $instance->inventoryLevels = InventoryLevelConnection::fromArray($data['inventoryLevels']);
            }
            if (isset($data['isActive']) && $data['isActive'] !== null) {
                $instance->isActive = $data['isActive'];
            }
            if (isset($data['isFulfillmentService']) && $data['isFulfillmentService'] !== null) {
                $instance->isFulfillmentService = $data['isFulfillmentService'];
            }
            if (isset($data['isPrimary']) && $data['isPrimary'] !== null) {
                $instance->isPrimary = $data['isPrimary'];
            }
            if (isset($data['legacyResourceId']) && $data['legacyResourceId'] !== null) {
                $instance->legacyResourceId = $data['legacyResourceId'];
            }
            if (isset($data['localPickupSettingsV2']) && $data['localPickupSettingsV2'] !== null) {
                $instance->localPickupSettingsV2 = DeliveryLocalPickupSettings::fromArray($data['localPickupSettingsV2']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = Metafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = MetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = MetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['shipsInventory']) && $data['shipsInventory'] !== null) {
                $instance->shipsInventory = $data['shipsInventory'];
            }
            if (isset($data['suggestedAddresses']) && $data['suggestedAddresses'] !== null) {
                $instance->suggestedAddresses = array_map(function($item) { return LocationSuggestedAddress::fromArray($item); }, $data['suggestedAddresses']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->activatable !== null) {
                $data['activatable'] = $this->activatable;
            }
            if ($this->address !== null) {
                $data['address'] = $this->address->asArray();
            }
            if ($this->addressVerified !== null) {
                $data['addressVerified'] = $this->addressVerified;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->deactivatable !== null) {
                $data['deactivatable'] = $this->deactivatable;
            }
            if ($this->deactivatedAt !== null) {
                $data['deactivatedAt'] = $this->deactivatedAt->toIso8601String();
            }
            if ($this->deletable !== null) {
                $data['deletable'] = $this->deletable;
            }
            if ($this->fulfillmentService !== null) {
                $data['fulfillmentService'] = $this->fulfillmentService->asArray();
            }
            if ($this->fulfillsOnlineOrders !== null) {
                $data['fulfillsOnlineOrders'] = $this->fulfillsOnlineOrders;
            }
            if ($this->hasActiveInventory !== null) {
                $data['hasActiveInventory'] = $this->hasActiveInventory;
            }
            if ($this->hasUnfulfilledOrders !== null) {
                $data['hasUnfulfilledOrders'] = $this->hasUnfulfilledOrders;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->inventoryLevel !== null) {
                $data['inventoryLevel'] = $this->inventoryLevel->asArray();
            }
            if ($this->inventoryLevels !== null) {
                $data['inventoryLevels'] = $this->inventoryLevels->asArray();
            }
            if ($this->isActive !== null) {
                $data['isActive'] = $this->isActive;
            }
            if ($this->isFulfillmentService !== null) {
                $data['isFulfillmentService'] = $this->isFulfillmentService;
            }
            if ($this->isPrimary !== null) {
                $data['isPrimary'] = $this->isPrimary;
            }
            if ($this->legacyResourceId !== null) {
                $data['legacyResourceId'] = $this->legacyResourceId;
            }
            if ($this->localPickupSettingsV2 !== null) {
                $data['localPickupSettingsV2'] = $this->localPickupSettingsV2->asArray();
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafieldDefinitions !== null) {
                $data['metafieldDefinitions'] = $this->metafieldDefinitions->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->shipsInventory !== null) {
                $data['shipsInventory'] = $this->shipsInventory;
            }
            if ($this->suggestedAddresses !== null) {
                $data['suggestedAddresses'] = array_map(function($item) { return $item->asArray(); }, $this->suggestedAddresses);
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}

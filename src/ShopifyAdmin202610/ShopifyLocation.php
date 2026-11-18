<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocationAddress;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFulfillmentService;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryLevel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyInventoryLevelConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDeliveryLocalPickupSettings;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocationSuggestedAddress;

/**
 * A physical location where merchants store and fulfill inventory. Locations include retail stores, warehouses, popups, dropshippers, or other places where inventory is managed or stocked.
 *
 * Active locations can fulfill online orders when configured with shipping rates, local pickup, or local delivery options. Locations track inventory quantities for [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) and process [order](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) fulfillment. Third-party apps using [`FulfillmentService`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentService) can create and manage their own locations.
 */
class ShopifyLocation implements ShopifyHasMetafieldDefinitions, ShopifyHasMetafields, ShopifyLegacyInteroperability, ShopifyNode
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
     * Whether the location can be reactivated. If `false`, then trying to activate the location with the
     * [`LocationActivate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/locationActivate)
     * mutation will return an error that describes why the location can't be activated.
     *
     * @return bool
     */
    public function getActivatable(): ?bool
    {
        return $this->activatable;
    }

    
    /**
     * The address of this location.
     *
     * @return ShopifyLocationAddress
     */
    public function getAddress(): ?ShopifyLocationAddress
    {
        return $this->address;
    }

    
    /**
     * Whether the location address has been verified.
     *
     * @return bool
     */
    public function getAddressVerified(): ?bool
    {
        return $this->addressVerified;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) that the location was added to a shop.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * Whether this location can be deactivated. If `true`, then the location can be deactivated by calling the
     * [`LocationDeactivate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/locationDeactivate)
     * mutation. If `false`, then calling the mutation to deactivate it will return an error that describes why the
     * location can't be deactivated.
     *
     * @return bool
     */
    public function getDeactivatable(): ?bool
    {
        return $this->deactivatable;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) that the location was deactivated at. For example, 3:30 pm on September 7, 2019 in the time zone of UTC (Universal Time Coordinated) is represented as `"2019-09-07T15:50:00Z`".
     *
     * @return Carbon
     */
    public function getDeactivatedAt(): ?Carbon
    {
        return $this->deactivatedAt;
    }

    
    /**
     * Whether this location can be deleted.
     *
     * @return bool
     */
    public function getDeletable(): ?bool
    {
        return $this->deletable;
    }

    
    /**
     * Name of the service provider that fulfills from this location.
     *
     * @return ShopifyFulfillmentService
     */
    public function getFulfillmentService(): ?ShopifyFulfillmentService
    {
        return $this->fulfillmentService;
    }

    
    /**
     * Whether this location can fulfill online orders.
     *
     * @return bool
     */
    public function getFulfillsOnlineOrders(): ?bool
    {
        return $this->fulfillsOnlineOrders;
    }

    
    /**
     * Whether this location has active inventory.
     *
     * @return bool
     */
    public function getHasActiveInventory(): ?bool
    {
        return $this->hasActiveInventory;
    }

    
    /**
     * Whether this location has orders that need to be fulfilled.
     *
     * @return bool
     */
    public function getHasUnfulfilledOrders(): ?bool
    {
        return $this->hasUnfulfilledOrders;
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
     * The quantities of an inventory item at this location.
     *
     * @return ShopifyInventoryLevel
     */
    public function getInventoryLevel(): ?ShopifyInventoryLevel
    {
        return $this->inventoryLevel;
    }

    
    /**
     * A list of the quantities of the inventory items that can be stocked at this location.
     *
     * @return ShopifyInventoryLevelConnection
     */
    public function getInventoryLevels(): ?ShopifyInventoryLevelConnection
    {
        return $this->inventoryLevels;
    }

    
    /**
     * Whether the location is active. A deactivated location can be activated (change `isActive: true`) if it has
     * `activatable` set to `true` by calling the
     * [`locationActivate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/locationActivate)
     * mutation.
     *
     * @return bool
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    
    /**
     * Whether this location is a fulfillment service.
     *
     * @return bool
     */
    public function getIsFulfillmentService(): ?bool
    {
        return $this->isFulfillmentService;
    }

    
    /**
     * Whether the location is your primary location for shipping inventory.
     *
     * @return bool
     */
    public function getIsPrimary(): ?bool
    {
        return $this->isPrimary;
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
     * Local pickup settings for the location.
     *
     * @return ShopifyDeliveryLocalPickupSettings
     */
    public function getLocalPickupSettingsV2(): ?ShopifyDeliveryLocalPickupSettings
    {
        return $this->localPickupSettingsV2;
    }

    
    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     *
     * @return ShopifyMetafield
     */
    public function getMetafield(): ?ShopifyMetafield
    {
        return $this->metafield;
    }

    
    /**
     * List of metafield definitions.
     *
     * @return ShopifyMetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions(): ?ShopifyMetafieldDefinitionConnection
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     *
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields(): ?ShopifyMetafieldConnection
    {
        return $this->metafields;
    }

    
    /**
     * The name of the location.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * Legacy field indicating this location was designated for shipping. All locations with valid addresses can now ship.
     *
     * @return bool
     */
    public function getShipsInventory(): ?bool
    {
        return $this->shipsInventory;
    }

    
    /**
     * List of suggested addresses for this location (empty if none).
     *
     * @return ShopifyLocationSuggestedAddress[]
     */
    public function getSuggestedAddresses(): ?array
    {
        return $this->suggestedAddresses;
    }

    
    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the location was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
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
                $instance->address = ShopifyLocationAddress::fromArray($data['address']);
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
                $instance->fulfillmentService = ShopifyFulfillmentService::fromArray($data['fulfillmentService']);
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
                $instance->inventoryLevel = ShopifyInventoryLevel::fromArray($data['inventoryLevel']);
            }
            if (isset($data['inventoryLevels']) && $data['inventoryLevels'] !== null) {
                $instance->inventoryLevels = ShopifyInventoryLevelConnection::fromArray($data['inventoryLevels']);
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
                $instance->localPickupSettingsV2 = ShopifyDeliveryLocalPickupSettings::fromArray($data['localPickupSettingsV2']);
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = ShopifyMetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['shipsInventory']) && $data['shipsInventory'] !== null) {
                $instance->shipsInventory = $data['shipsInventory'];
            }
            if (isset($data['suggestedAddresses']) && $data['suggestedAddresses'] !== null) {
                $instance->suggestedAddresses = array_map(function($item) { return ShopifyLocationSuggestedAddress::fromArray($item); }, $data['suggestedAddresses']);
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

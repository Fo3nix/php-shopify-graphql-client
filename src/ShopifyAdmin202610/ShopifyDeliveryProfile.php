<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDeliveryProductVariantsCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDeliveryProfileItemConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDeliveryProfileLocationGroup;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySellingPlanGroupConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocationConnection;

/**
 * A shipping profile that defines shipping rates for specific [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) objects and [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects. Delivery profiles determine which products can ship from which [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) objects to which zones, and at what rates.
 *
 * Profiles can associate with [`SellingPlanGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SellingPlanGroup) objects to provide custom shipping rules for subscriptions, such as free shipping or restricted delivery zones. The default profile applies to all products that aren't assigned to other profiles.
 *
 * **Shops that use market-driven shipping:** If the shop uses market-driven shipping (check it with `shop { features { marketDrivenShipping } }`, see [`ShopFeatures.marketDrivenShipping`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopFeatures)), checkout combines the shipping rates and options from the shop's market configuration and app-owned delivery profiles. Zones and rates from merchant-managed delivery profiles are ignored. In practice, merchant-managed profiles are the profiles that the [`merchantOwnedOnly`](https://shopify.dev/docs/api/admin-graphql/latest/queries/deliveryProfiles#arguments-merchantOwnedOnly) filter returns. Shipping options from merchant-managed delivery profiles are still saved on a shop, but these rates may differ from what buyers pay and should not be relied on. Read the current shipping configuration from the [`Market`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Market) object's `delivery.shipping` field instead. The `marketDrivenShipping` check and the `Market.delivery` field require API version 2026-07 or later.
 *
 * Learn more about [building delivery profiles](https://shopify.dev/apps/build/purchase-options/deferred/delivery-and-deferment/build-delivery-profiles).
 */
class ShopifyDeliveryProfile implements ShopifyNode
{
    protected $activeMethodDefinitionsCount;
    protected $coversAllItems;
    protected $createdAt;
    protected $default;
    protected $id;
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
    protected $version;
    protected $zoneCountryCount;

    
    /**
     * The number of active shipping rates for the profile.
     *
     * @return int
     */
    public function getActiveMethodDefinitionsCount(): ?int
    {
        return $this->activeMethodDefinitionsCount;
    }

    
    /**
     * Whether this delivery profile covers every shippable product variant in the shop. Rates from a profile with `coversAllItems: true` apply to all items at checkout, overriding any explicit product or variant assignments.
     *
     * @return bool
     */
    public function getCoversAllItems(): ?bool
    {
        return $this->coversAllItems;
    }

    
    /**
     * The date and time when the delivery profile was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * Whether this is the default profile.
     *
     * @return bool
     */
    public function getDefault(): ?bool
    {
        return $this->default;
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
     * The number of locations without rates defined.
     *
     * @return int
     */
    public function getLocationsWithoutRatesCount(): ?int
    {
        return $this->locationsWithoutRatesCount;
    }

    
    /**
     * The name of the delivery profile.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The number of active origin locations for the profile.
     *
     * @return int
     */
    public function getOriginLocationCount(): ?int
    {
        return $this->originLocationCount;
    }

    
    /**
     * How many product variants are in this profile.
     *
     * @return ShopifyCount
     */
    public function getProductVariantsCount(): ?ShopifyCount
    {
        return $this->productVariantsCount;
    }

    
    /**
     * How many product variants are in this profile.
     *
     * @return ShopifyDeliveryProductVariantsCount
     */
    public function getProductVariantsCountV2(): ?ShopifyDeliveryProductVariantsCount
    {
        return $this->productVariantsCountV2;
    }

    
    /**
     * The products and variants associated with this profile.
     *
     * @return ShopifyDeliveryProfileItemConnection
     */
    public function getProfileItems(): ?ShopifyDeliveryProfileItemConnection
    {
        return $this->profileItems;
    }

    
    /**
     * The location groups and associated zones using this profile. If the shop uses market-driven shipping and this is a merchant-managed profile, these zones and rates don't affect checkout and can differ from what buyers pay.
     *
     * @return ShopifyDeliveryProfileLocationGroup[]
     */
    public function getProfileLocationGroups(): ?array
    {
        return $this->profileLocationGroups;
    }

    
    /**
     * Selling plan groups associated with the specified delivery profile.
     *
     * @return ShopifySellingPlanGroupConnection
     */
    public function getSellingPlanGroups(): ?ShopifySellingPlanGroupConnection
    {
        return $this->sellingPlanGroups;
    }

    
    /**
     * List of locations that haven't been assigned to a location group for this profile.
     *
     * @return ShopifyLocation[]
     */
    public function getUnassignedLocations(): ?array
    {
        return $this->unassignedLocations;
    }

    
    /**
     * List of locations that have not been assigned to a location group for this profile.
     *
     * @return ShopifyLocationConnection
     */
    public function getUnassignedLocationsPaginated(): ?ShopifyLocationConnection
    {
        return $this->unassignedLocationsPaginated;
    }

    
    /**
     * The version of the delivery profile.
     *
     * @return int
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    
    /**
     * The number of countries with active rates to deliver to.
     *
     * @return int
     */
    public function getZoneCountryCount(): ?int
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
            if (isset($data['coversAllItems']) && $data['coversAllItems'] !== null) {
                $instance->coversAllItems = $data['coversAllItems'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['default']) && $data['default'] !== null) {
                $instance->default = $data['default'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
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
                $instance->productVariantsCount = ShopifyCount::fromArray($data['productVariantsCount']);
            }
            if (isset($data['productVariantsCountV2']) && $data['productVariantsCountV2'] !== null) {
                $instance->productVariantsCountV2 = ShopifyDeliveryProductVariantsCount::fromArray($data['productVariantsCountV2']);
            }
            if (isset($data['profileItems']) && $data['profileItems'] !== null) {
                $instance->profileItems = ShopifyDeliveryProfileItemConnection::fromArray($data['profileItems']);
            }
            if (isset($data['profileLocationGroups']) && $data['profileLocationGroups'] !== null) {
                $instance->profileLocationGroups = array_map(function($item) { return ShopifyDeliveryProfileLocationGroup::fromArray($item); }, $data['profileLocationGroups']);
            }
            if (isset($data['sellingPlanGroups']) && $data['sellingPlanGroups'] !== null) {
                $instance->sellingPlanGroups = ShopifySellingPlanGroupConnection::fromArray($data['sellingPlanGroups']);
            }
            if (isset($data['unassignedLocations']) && $data['unassignedLocations'] !== null) {
                $instance->unassignedLocations = array_map(function($item) { return ShopifyLocation::fromArray($item); }, $data['unassignedLocations']);
            }
            if (isset($data['unassignedLocationsPaginated']) && $data['unassignedLocationsPaginated'] !== null) {
                $instance->unassignedLocationsPaginated = ShopifyLocationConnection::fromArray($data['unassignedLocationsPaginated']);
            }
            if (isset($data['version']) && $data['version'] !== null) {
                $instance->version = $data['version'];
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
            if ($this->coversAllItems !== null) {
                $data['coversAllItems'] = $this->coversAllItems;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->default !== null) {
                $data['default'] = $this->default;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
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
            if ($this->version !== null) {
                $data['version'] = $this->version;
            }
            if ($this->zoneCountryCount !== null) {
                $data['zoneCountryCount'] = $this->zoneCountryCount;
            }
            return $data;
        }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A physical location where merchants store and fulfill inventory. Locations include retail stores, warehouses, popups, dropshippers, or other places where inventory is managed or stocked.
 *
 * Active locations can fulfill online orders when configured with shipping rates, local pickup, or local delivery options. Locations track inventory quantities for [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) and process [order](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) fulfillment. Third-party apps using [`FulfillmentService`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentService) can create and manage their own locations.
 */
class ShopifyLocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "Location";

    /**
     * Whether the location can be reactivated. If `false`, then trying to activate the location with the
     * [`LocationActivate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/locationActivate)
     * mutation will return an error that describes why the location can't be activated.
     */
    public function selectActivatable(): static
    {
        $this->selectField("activatable");

        return $this;
    }

    /**
     * The address of this location.
     */
    public function selectAddress(?ShopifyLocationAddressArgumentsObject $argsObject = null): ShopifyLocationAddressQueryObject
    {
        $object = new ShopifyLocationAddressQueryObject("address");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the location address has been verified.
     */
    public function selectAddressVerified(): static
    {
        $this->selectField("addressVerified");

        return $this;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) that the location was added to a shop.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * Whether this location can be deactivated. If `true`, then the location can be deactivated by calling the
     * [`LocationDeactivate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/locationDeactivate)
     * mutation. If `false`, then calling the mutation to deactivate it will return an error that describes why the
     * location can't be deactivated.
     */
    public function selectDeactivatable(): static
    {
        $this->selectField("deactivatable");

        return $this;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) that the location was deactivated at. For example, 3:30 pm on September 7, 2019 in the time zone of UTC (Universal Time Coordinated) is represented as `"2019-09-07T15:50:00Z`".
     */
    public function selectDeactivatedAt(): static
    {
        $this->selectField("deactivatedAt");

        return $this;
    }

    /**
     * Whether this location can be deleted.
     */
    public function selectDeletable(): static
    {
        $this->selectField("deletable");

        return $this;
    }

    /**
     * Name of the service provider that fulfills from this location.
     */
    public function selectFulfillmentService(?ShopifyLocationFulfillmentServiceArgumentsObject $argsObject = null): ShopifyFulfillmentServiceQueryObject
    {
        $object = new ShopifyFulfillmentServiceQueryObject("fulfillmentService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether this location can fulfill online orders.
     */
    public function selectFulfillsOnlineOrders(): static
    {
        $this->selectField("fulfillsOnlineOrders");

        return $this;
    }

    /**
     * Whether this location has active inventory.
     */
    public function selectHasActiveInventory(): static
    {
        $this->selectField("hasActiveInventory");

        return $this;
    }

    /**
     * Whether this location has orders that need to be fulfilled.
     */
    public function selectHasUnfulfilledOrders(): static
    {
        $this->selectField("hasUnfulfilledOrders");

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
     * The quantities of an inventory item at this location.
     */
    public function selectInventoryLevel(ShopifyLocationInventoryLevelArgumentsObject $argsObject): ShopifyInventoryLevelQueryObject
    {
        $object = new ShopifyInventoryLevelQueryObject("inventoryLevel");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of the quantities of the inventory items that can be stocked at this location.
     */
    public function selectInventoryLevels(?ShopifyLocationInventoryLevelsArgumentsObject $argsObject = null): ShopifyInventoryLevelConnectionQueryObject
    {
        $object = new ShopifyInventoryLevelConnectionQueryObject("inventoryLevels");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the location is active. A deactivated location can be activated (change `isActive: true`) if it has
     * `activatable` set to `true` by calling the
     * [`locationActivate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/locationActivate)
     * mutation.
     */
    public function selectIsActive(): static
    {
        $this->selectField("isActive");

        return $this;
    }

    /**
     * Whether this location is a fulfillment service.
     */
    public function selectIsFulfillmentService(): static
    {
        $this->selectField("isFulfillmentService");

        return $this;
    }

    /**
     * Whether the location is your primary location for shipping inventory.
     *
     * @deprecated The concept of a primary location is deprecated, shipsInventory can be used to get a fallback location
     */
    public function selectIsPrimary(): static
    {
        $this->selectField("isPrimary");

        return $this;
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
     * Local pickup settings for the location.
     */
    public function selectLocalPickupSettingsV2(?ShopifyLocationLocalPickupSettingsV2ArgumentsObject $argsObject = null): ShopifyDeliveryLocalPickupSettingsQueryObject
    {
        $object = new ShopifyDeliveryLocalPickupSettingsQueryObject("localPickupSettingsV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifyLocationMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * List of metafield definitions.
     *
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(?ShopifyLocationMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConnectionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifyLocationMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the location.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * Legacy field indicating this location was designated for shipping. All locations with valid addresses can now ship.
     */
    public function selectShipsInventory(): static
    {
        $this->selectField("shipsInventory");

        return $this;
    }

    /**
     * List of suggested addresses for this location (empty if none).
     */
    public function selectSuggestedAddresses(?ShopifyLocationSuggestedAddressesArgumentsObject $argsObject = null): ShopifyLocationSuggestedAddressQueryObject
    {
        $object = new ShopifyLocationSuggestedAddressQueryObject("suggestedAddresses");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the location was last updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}

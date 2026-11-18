<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A shipping profile that defines shipping rates for specific [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) objects and [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects. Delivery profiles determine which products can ship from which [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) objects to which zones, and at what rates.
 *
 * Profiles can associate with [`SellingPlanGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SellingPlanGroup) objects to provide custom shipping rules for subscriptions, such as free shipping or restricted delivery zones. The default profile applies to all products that aren't assigned to other profiles.
 *
 * **Shops that use market-driven shipping:** If the shop uses market-driven shipping (check it with `shop { features { marketDrivenShipping } }`, see [`ShopFeatures.marketDrivenShipping`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopFeatures)), checkout combines the shipping rates and options from the shop's market configuration and app-owned delivery profiles. Zones and rates from merchant-managed delivery profiles are ignored. In practice, merchant-managed profiles are the profiles that the [`merchantOwnedOnly`](https://shopify.dev/docs/api/admin-graphql/latest/queries/deliveryProfiles#arguments-merchantOwnedOnly) filter returns. Shipping options from merchant-managed delivery profiles are still saved on a shop, but these rates may differ from what buyers pay and should not be relied on. Read the current shipping configuration from the [`Market`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Market) object's `delivery.shipping` field instead. The `marketDrivenShipping` check and the `Market.delivery` field require API version 2026-07 or later.
 *
 * Learn more about [building delivery profiles](https://shopify.dev/apps/build/purchase-options/deferred/delivery-and-deferment/build-delivery-profiles).
 */
class ShopifyDeliveryProfileQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryProfile";

    /**
     * The number of active shipping rates for the profile.
     */
    public function selectActiveMethodDefinitionsCount(): static
    {
        $this->selectField("activeMethodDefinitionsCount");

        return $this;
    }

    /**
     * Whether this delivery profile covers every shippable product variant in the shop. Rates from a profile with `coversAllItems: true` apply to all items at checkout, overriding any explicit product or variant assignments.
     */
    public function selectCoversAllItems(): static
    {
        $this->selectField("coversAllItems");

        return $this;
    }

    /**
     * The date and time when the delivery profile was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * Whether this is the default profile.
     */
    public function selectDefault(): static
    {
        $this->selectField("default");

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
     * The number of locations without rates defined.
     */
    public function selectLocationsWithoutRatesCount(): static
    {
        $this->selectField("locationsWithoutRatesCount");

        return $this;
    }

    /**
     * The name of the delivery profile.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The number of active origin locations for the profile.
     */
    public function selectOriginLocationCount(): static
    {
        $this->selectField("originLocationCount");

        return $this;
    }

    /**
     * How many product variants are in this profile.
     */
    public function selectProductVariantsCount(?ShopifyDeliveryProfileProductVariantsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("productVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * How many product variants are in this profile.
     *
     * @deprecated Use `productVariantsCount` instead.
     */
    public function selectProductVariantsCountV2(?ShopifyDeliveryProfileProductVariantsCountV2ArgumentsObject $argsObject = null): ShopifyDeliveryProductVariantsCountQueryObject
    {
        $object = new ShopifyDeliveryProductVariantsCountQueryObject("productVariantsCountV2");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The products and variants associated with this profile.
     */
    public function selectProfileItems(?ShopifyDeliveryProfileProfileItemsArgumentsObject $argsObject = null): ShopifyDeliveryProfileItemConnectionQueryObject
    {
        $object = new ShopifyDeliveryProfileItemConnectionQueryObject("profileItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The location groups and associated zones using this profile. If the shop uses market-driven shipping and this is a merchant-managed profile, these zones and rates don't affect checkout and can differ from what buyers pay.
     */
    public function selectProfileLocationGroups(?ShopifyDeliveryProfileProfileLocationGroupsArgumentsObject $argsObject = null): ShopifyDeliveryProfileLocationGroupQueryObject
    {
        $object = new ShopifyDeliveryProfileLocationGroupQueryObject("profileLocationGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Selling plan groups associated with the specified delivery profile.
     */
    public function selectSellingPlanGroups(?ShopifyDeliveryProfileSellingPlanGroupsArgumentsObject $argsObject = null): ShopifySellingPlanGroupConnectionQueryObject
    {
        $object = new ShopifySellingPlanGroupConnectionQueryObject("sellingPlanGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of locations that haven't been assigned to a location group for this profile.
     */
    public function selectUnassignedLocations(?ShopifyDeliveryProfileUnassignedLocationsArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("unassignedLocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * List of locations that have not been assigned to a location group for this profile.
     */
    public function selectUnassignedLocationsPaginated(?ShopifyDeliveryProfileUnassignedLocationsPaginatedArgumentsObject $argsObject = null): ShopifyLocationConnectionQueryObject
    {
        $object = new ShopifyLocationConnectionQueryObject("unassignedLocationsPaginated");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The version of the delivery profile.
     */
    public function selectVersion(): static
    {
        $this->selectField("version");

        return $this;
    }

    /**
     * The number of countries with active rates to deliver to.
     */
    public function selectZoneCountryCount(): static
    {
        $this->selectField("zoneCountryCount");

        return $this;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The fulfillment order's assigned location. This is the location where the fulfillment is expected to happen.
 *
 *  The fulfillment order's assigned location might change in the following cases:
 *
 *   - The fulfillment order has been entirely moved to a new location. For example, the [fulfillmentOrderMove](
 *     https://shopify.dev/api/admin-graphql/latest/mutations/fulfillmentOrderMove
 *     ) mutation has been called, and you see the original fulfillment order in the [movedFulfillmentOrder](
 *     https://shopify.dev/api/admin-graphql/latest/mutations/fulfillmentOrderMove#field-fulfillmentordermovepayload-movedfulfillmentorder
 *     ) field within the mutation's response.
 *
 *   - Work on the fulfillment order has not yet begun, which means that the fulfillment order has the
 *       [OPEN](https://shopify.dev/api/admin-graphql/latest/enums/FulfillmentOrderStatus#value-open),
 *       [SCHEDULED](https://shopify.dev/api/admin-graphql/latest/enums/FulfillmentOrderStatus#value-scheduled), or
 *       [ON_HOLD](https://shopify.dev/api/admin-graphql/latest/enums/FulfillmentOrderStatus#value-onhold)
 *       status, and the shop's location properties might be undergoing edits (for example, in the Shopify admin).
 *
 * If the [fulfillmentOrderMove](
 * https://shopify.dev/api/admin-graphql/latest/mutations/fulfillmentOrderMove
 * ) mutation has moved the fulfillment order's line items to a new location,
 * but hasn't moved the fulfillment order instance itself, then the original fulfillment order's assigned location
 * doesn't change.
 * This happens if the fulfillment order is being split during the move, or if all line items can be moved
 * to an existing fulfillment order at a new location.
 *
 * Once the fulfillment order has been taken into work or canceled,
 * which means that the fulfillment order has the
 * [IN_PROGRESS](https://shopify.dev/api/admin-graphql/latest/enums/FulfillmentOrderStatus#value-inprogress),
 * [CLOSED](https://shopify.dev/api/admin-graphql/latest/enums/FulfillmentOrderStatus#value-closed),
 * [CANCELLED](https://shopify.dev/api/admin-graphql/latest/enums/FulfillmentOrderStatus#value-cancelled), or
 * [INCOMPLETE](https://shopify.dev/api/admin-graphql/latest/enums/FulfillmentOrderStatus#value-incomplete)
 * status, `FulfillmentOrderAssignedLocation` acts as a snapshot of the shop's location content.
 * Up-to-date shop's location data may be queried through [location](
 *   https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentOrderAssignedLocation#field-fulfillmentorderassignedlocation-location
 * ) connection.
 */
class ShopifyFulfillmentOrderAssignedLocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderAssignedLocation";

    /**
     * The first line of the address for the location.
     */
    public function selectAddress1(): static
    {
        $this->selectField("address1");

        return $this;
    }

    /**
     * The second line of the address for the location.
     */
    public function selectAddress2(): static
    {
        $this->selectField("address2");

        return $this;
    }

    /**
     * The city of the location.
     */
    public function selectCity(): static
    {
        $this->selectField("city");

        return $this;
    }

    /**
     * The two-letter country code of the location.
     */
    public function selectCountryCode(): static
    {
        $this->selectField("countryCode");

        return $this;
    }

    /**
     * The location where the fulfillment is expected to happen. This value might be different from
     * `FulfillmentOrderAssignedLocation` if the location's attributes were updated
     * after the fulfillment order was taken into work of canceled.
     */
    public function selectLocation(?ShopifyFulfillmentOrderAssignedLocationLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
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
     * The phone number of the location.
     */
    public function selectPhone(): static
    {
        $this->selectField("phone");

        return $this;
    }

    /**
     * The province of the location.
     */
    public function selectProvince(): static
    {
        $this->selectField("province");

        return $this;
    }

    /**
     * The ZIP code of the location.
     */
    public function selectZip(): static
    {
        $this->selectField("zip");

        return $this;
    }
}

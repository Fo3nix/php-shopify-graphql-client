<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocation;

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
class ShopifyFulfillmentOrderAssignedLocation
{
    protected $address1;
    protected $address2;
    protected $city;
    protected $countryCode;
    protected $location;
    protected $name;
    protected $phone;
    protected $province;
    protected $zip;

    
    /**
     * The first line of the address for the location.
     *
     * @return string
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    
    /**
     * The second line of the address for the location.
     *
     * @return string
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    
    /**
     * The city of the location.
     *
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    
    /**
     * The two-letter country code of the location.
     *
     * @return string A ShopifyCountryCodeEnumObject value
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    
    /**
     * The location where the fulfillment is expected to happen. This value might be different from
     * `FulfillmentOrderAssignedLocation` if the location's attributes were updated
     * after the fulfillment order was taken into work of canceled.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
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
     * The phone number of the location.
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    
    /**
     * The province of the location.
     *
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    
    /**
     * The ZIP code of the location.
     *
     * @return string
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['address1']) && $data['address1'] !== null) {
                $instance->address1 = $data['address1'];
            }
            if (isset($data['address2']) && $data['address2'] !== null) {
                $instance->address2 = $data['address2'];
            }
            if (isset($data['city']) && $data['city'] !== null) {
                $instance->city = $data['city'];
            }
            if (isset($data['countryCode']) && $data['countryCode'] !== null) {
                $instance->countryCode = $data['countryCode'];
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyLocation::fromArray($data['location']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['province']) && $data['province'] !== null) {
                $instance->province = $data['province'];
            }
            if (isset($data['zip']) && $data['zip'] !== null) {
                $instance->zip = $data['zip'];
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
            if ($this->address1 !== null) {
                $data['address1'] = $this->address1;
            }
            if ($this->address2 !== null) {
                $data['address2'] = $this->address2;
            }
            if ($this->city !== null) {
                $data['city'] = $this->city;
            }
            if ($this->countryCode !== null) {
                $data['countryCode'] = $this->countryCode;
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            if ($this->province !== null) {
                $data['province'] = $this->province;
            }
            if ($this->zip !== null) {
                $data['zip'] = $this->zip;
            }
            return $data;
        }
}

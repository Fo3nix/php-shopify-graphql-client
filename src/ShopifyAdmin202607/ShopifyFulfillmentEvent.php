<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Carbon\Carbon;

/**
 * A tracking event that records the status and location of a fulfillment at a specific point in time. Each event captures details such as the [status](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentEvent#field-FulfillmentEvent.fields.status) (for example, in transit, out for delivery, delivered) and any [messages](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentEvent#field-FulfillmentEvent.fields.message) associated with the event.
 *
 * Fulfillment events provide a chronological history of a package's journey from shipment to delivery. They include timestamps, geographic coordinates, and estimated delivery dates to track fulfillment progress.
 */
class ShopifyFulfillmentEvent implements ShopifyNode
{
    protected $address1;
    protected $city;
    protected $country;
    protected $createdAt;
    protected $estimatedDeliveryAt;
    protected $happenedAt;
    protected $id;
    protected $latitude;
    protected $longitude;
    protected $message;
    protected $province;
    protected $status;
    protected $zip;

    
    /**
     * The street address where this fulfillment event occurred.
     *
     * @return string
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    
    /**
     * The city where this fulfillment event occurred.
     *
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    
    /**
     * The country where this fulfillment event occurred.
     *
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    
    /**
     * The date and time when the fulfillment event was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The estimated delivery date and time of the fulfillment.
     *
     * @return Carbon
     */
    public function getEstimatedDeliveryAt(): ?Carbon
    {
        return $this->estimatedDeliveryAt;
    }

    
    /**
     * The time at which this fulfillment event happened.
     *
     * @return Carbon
     */
    public function getHappenedAt(): ?Carbon
    {
        return $this->happenedAt;
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
     * The latitude where this fulfillment event occurred.
     *
     * @return float
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    
    /**
     * The longitude where this fulfillment event occurred.
     *
     * @return float
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    
    /**
     * A message associated with this fulfillment event.
     *
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    
    /**
     * The province where this fulfillment event occurred.
     *
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    
    /**
     * The status of this fulfillment event.
     *
     * @return string A ShopifyFulfillmentEventStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The zip code of the location where this fulfillment event occurred.
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
            if (isset($data['city']) && $data['city'] !== null) {
                $instance->city = $data['city'];
            }
            if (isset($data['country']) && $data['country'] !== null) {
                $instance->country = $data['country'];
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['estimatedDeliveryAt']) && $data['estimatedDeliveryAt'] !== null) {
                $instance->estimatedDeliveryAt = new Carbon($data['estimatedDeliveryAt']);
            }
            if (isset($data['happenedAt']) && $data['happenedAt'] !== null) {
                $instance->happenedAt = new Carbon($data['happenedAt']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['latitude']) && $data['latitude'] !== null) {
                $instance->latitude = $data['latitude'];
            }
            if (isset($data['longitude']) && $data['longitude'] !== null) {
                $instance->longitude = $data['longitude'];
            }
            if (isset($data['message']) && $data['message'] !== null) {
                $instance->message = $data['message'];
            }
            if (isset($data['province']) && $data['province'] !== null) {
                $instance->province = $data['province'];
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if ($this->city !== null) {
                $data['city'] = $this->city;
            }
            if ($this->country !== null) {
                $data['country'] = $this->country;
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->estimatedDeliveryAt !== null) {
                $data['estimatedDeliveryAt'] = $this->estimatedDeliveryAt->toIso8601String();
            }
            if ($this->happenedAt !== null) {
                $data['happenedAt'] = $this->happenedAt->toIso8601String();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->latitude !== null) {
                $data['latitude'] = $this->latitude;
            }
            if ($this->longitude !== null) {
                $data['longitude'] = $this->longitude;
            }
            if ($this->message !== null) {
                $data['message'] = $this->message;
            }
            if ($this->province !== null) {
                $data['province'] = $this->province;
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->zip !== null) {
                $data['zip'] = $this->zip;
            }
            return $data;
        }
}

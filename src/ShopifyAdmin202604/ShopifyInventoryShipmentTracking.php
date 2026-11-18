<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Carbon\Carbon;

/**
 * Represents the tracking information for an inventory shipment.
 */
class ShopifyInventoryShipmentTracking
{
    protected $arrivesAt;
    protected $company;
    protected $trackingNumber;
    protected $trackingUrl;

    
    /**
     * The estimated date and time that the shipment will arrive.
     *
     * @return Carbon
     */
    public function getArrivesAt(): ?Carbon
    {
        return $this->arrivesAt;
    }

    
    /**
     * The name of the shipping carrier company.
     *
     * @return string
     */
    public function getCompany(): ?string
    {
        return $this->company;
    }

    
    /**
     * The tracking number used by the carrier to identify the shipment.
     *
     * @return string
     */
    public function getTrackingNumber(): ?string
    {
        return $this->trackingNumber;
    }

    
    /**
     * The URL to track the shipment.
     *
     * Given a tracking number and a shipping carrier company name from
     * [the list](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentTrackingInfo#field-company),
     * Shopify will return a generated tracking URL if no tracking URL was set manually.
     *
     * @return string
     */
    public function getTrackingUrl(): mixed
    {
        return $this->trackingUrl;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['arrivesAt']) && $data['arrivesAt'] !== null) {
                $instance->arrivesAt = new Carbon($data['arrivesAt']);
            }
            if (isset($data['company']) && $data['company'] !== null) {
                $instance->company = $data['company'];
            }
            if (isset($data['trackingNumber']) && $data['trackingNumber'] !== null) {
                $instance->trackingNumber = $data['trackingNumber'];
            }
            if (isset($data['trackingUrl']) && $data['trackingUrl'] !== null) {
                $instance->trackingUrl = $data['trackingUrl'];
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
            if ($this->arrivesAt !== null) {
                $data['arrivesAt'] = $this->arrivesAt->toIso8601String();
            }
            if ($this->company !== null) {
                $data['company'] = $this->company;
            }
            if ($this->trackingNumber !== null) {
                $data['trackingNumber'] = $this->trackingNumber;
            }
            if ($this->trackingUrl !== null) {
                $data['trackingUrl'] = $this->trackingUrl;
            }
            return $data;
        }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;

class ShopifyPaymentsDisputeFulfillment
{
    protected $id;
    protected $shippingCarrier;
    protected $shippingDate;
    protected $shippingTrackingNumber;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getShippingCarrier()
    {
        return $this->shippingCarrier;
    }

    
    /**
     * @return Carbon
     */
    public function getShippingDate()
    {
        return $this->shippingDate;
    }

    
    /**
     * @return string
     */
    public function getShippingTrackingNumber()
    {
        return $this->shippingTrackingNumber;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['shippingCarrier']) && $data['shippingCarrier'] !== null) {
                $instance->shippingCarrier = $data['shippingCarrier'];
            }
            if (isset($data['shippingDate']) && $data['shippingDate'] !== null) {
                $instance->shippingDate = new Carbon($data['shippingDate']);
            }
            if (isset($data['shippingTrackingNumber']) && $data['shippingTrackingNumber'] !== null) {
                $instance->shippingTrackingNumber = $data['shippingTrackingNumber'];
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->shippingCarrier !== null) {
                $data['shippingCarrier'] = $this->shippingCarrier;
            }
            if ($this->shippingDate !== null) {
                $data['shippingDate'] = $this->shippingDate->toIso8601String();
            }
            if ($this->shippingTrackingNumber !== null) {
                $data['shippingTrackingNumber'] = $this->shippingTrackingNumber;
            }
            return $data;
        }
}

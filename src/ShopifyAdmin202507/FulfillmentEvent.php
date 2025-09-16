<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Carbon\Carbon;

class FulfillmentEvent
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
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    
    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    
    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    
    /**
     * @return Carbon
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    
    /**
     * @return Carbon
     */
    public function getEstimatedDeliveryAt()
    {
        return $this->estimatedDeliveryAt;
    }

    
    /**
     * @return Carbon
     */
    public function getHappenedAt()
    {
        return $this->happenedAt;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    
    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    
    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    
    /**
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    
    /**
     * @return FulfillmentEventStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return string
     */
    public function getZip()
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

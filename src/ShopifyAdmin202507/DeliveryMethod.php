<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryMethodAdditionalInformation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DeliveryBrandedPromise;
use Carbon\Carbon;

class DeliveryMethod
{
    protected $additionalInformation;
    protected $brandedPromise;
    protected $id;
    protected $maxDeliveryDateTime;
    protected $methodType;
    protected $minDeliveryDateTime;
    protected $presentedName;
    protected $serviceCode;
    protected $sourceReference;

    
    /**
     * @return DeliveryMethodAdditionalInformation
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    
    /**
     * @return DeliveryBrandedPromise
     */
    public function getBrandedPromise()
    {
        return $this->brandedPromise;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return Carbon
     */
    public function getMaxDeliveryDateTime()
    {
        return $this->maxDeliveryDateTime;
    }

    
    /**
     * @return DeliveryMethodTypeEnumObject
     */
    public function getMethodType()
    {
        return $this->methodType;
    }

    
    /**
     * @return Carbon
     */
    public function getMinDeliveryDateTime()
    {
        return $this->minDeliveryDateTime;
    }

    
    /**
     * @return string
     */
    public function getPresentedName()
    {
        return $this->presentedName;
    }

    
    /**
     * @return string
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    
    /**
     * @return string
     */
    public function getSourceReference()
    {
        return $this->sourceReference;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['additionalInformation']) && $data['additionalInformation'] !== null) {
                $instance->additionalInformation = DeliveryMethodAdditionalInformation::fromArray($data['additionalInformation']);
            }
            if (isset($data['brandedPromise']) && $data['brandedPromise'] !== null) {
                $instance->brandedPromise = DeliveryBrandedPromise::fromArray($data['brandedPromise']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['maxDeliveryDateTime']) && $data['maxDeliveryDateTime'] !== null) {
                $instance->maxDeliveryDateTime = new Carbon($data['maxDeliveryDateTime']);
            }
            if (isset($data['methodType']) && $data['methodType'] !== null) {
                $instance->methodType = $data['methodType'];
            }
            if (isset($data['minDeliveryDateTime']) && $data['minDeliveryDateTime'] !== null) {
                $instance->minDeliveryDateTime = new Carbon($data['minDeliveryDateTime']);
            }
            if (isset($data['presentedName']) && $data['presentedName'] !== null) {
                $instance->presentedName = $data['presentedName'];
            }
            if (isset($data['serviceCode']) && $data['serviceCode'] !== null) {
                $instance->serviceCode = $data['serviceCode'];
            }
            if (isset($data['sourceReference']) && $data['sourceReference'] !== null) {
                $instance->sourceReference = $data['sourceReference'];
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
            if ($this->additionalInformation !== null) {
                $data['additionalInformation'] = $this->additionalInformation->asArray();
            }
            if ($this->brandedPromise !== null) {
                $data['brandedPromise'] = $this->brandedPromise->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->maxDeliveryDateTime !== null) {
                $data['maxDeliveryDateTime'] = $this->maxDeliveryDateTime->toIso8601String();
            }
            if ($this->methodType !== null) {
                $data['methodType'] = $this->methodType;
            }
            if ($this->minDeliveryDateTime !== null) {
                $data['minDeliveryDateTime'] = $this->minDeliveryDateTime->toIso8601String();
            }
            if ($this->presentedName !== null) {
                $data['presentedName'] = $this->presentedName;
            }
            if ($this->serviceCode !== null) {
                $data['serviceCode'] = $this->serviceCode;
            }
            if ($this->sourceReference !== null) {
                $data['sourceReference'] = $this->sourceReference;
            }
            return $data;
        }
}

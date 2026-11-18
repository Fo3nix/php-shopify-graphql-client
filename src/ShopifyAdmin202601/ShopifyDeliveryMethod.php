<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDeliveryMethodAdditionalInformation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDeliveryBrandedPromise;
use Carbon\Carbon;

/**
 * Information about the delivery method selected for a [`FulfillmentOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrder). Includes the method type, expected delivery timeframe, and any additional information needed for delivery.
 *
 * The delivery method stores details from checkout such as the carrier, branded promises like Shop Promise, and the delivery option name shown to the buyer. Additional information like delivery instructions or contact phone numbers helps fulfill the [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) correctly.
 */
class ShopifyDeliveryMethod implements ShopifyNode
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
     * The Additional information to consider when performing the delivery.
     *
     * @return ShopifyDeliveryMethodAdditionalInformation
     */
    public function getAdditionalInformation(): ?ShopifyDeliveryMethodAdditionalInformation
    {
        return $this->additionalInformation;
    }

    
    /**
     * The branded promise that was presented to the buyer during checkout.  For example: Shop Promise.
     *
     * @return ShopifyDeliveryBrandedPromise
     */
    public function getBrandedPromise(): ?ShopifyDeliveryBrandedPromise
    {
        return $this->brandedPromise;
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
     * The latest delivery date and time when the fulfillment is expected to arrive at the buyer's location.
     *
     * @return Carbon
     */
    public function getMaxDeliveryDateTime(): ?Carbon
    {
        return $this->maxDeliveryDateTime;
    }

    
    /**
     * The type of the delivery method.
     *
     * @return string A ShopifyDeliveryMethodTypeEnumObject value
     */
    public function getMethodType(): ?string
    {
        return $this->methodType;
    }

    
    /**
     * The earliest delivery date and time when the fulfillment is expected to arrive at the buyer's location.
     *
     * @return Carbon
     */
    public function getMinDeliveryDateTime(): ?Carbon
    {
        return $this->minDeliveryDateTime;
    }

    
    /**
     * The name of the delivery option that was presented to the buyer during checkout.
     *
     * @return string
     */
    public function getPresentedName(): ?string
    {
        return $this->presentedName;
    }

    
    /**
     * A reference to the shipping method.
     *
     * @return string
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }

    
    /**
     * Source reference is promise provider specific data associated with delivery promise.
     *
     * @return string
     */
    public function getSourceReference(): ?string
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
                $instance->additionalInformation = ShopifyDeliveryMethodAdditionalInformation::fromArray($data['additionalInformation']);
            }
            if (isset($data['brandedPromise']) && $data['brandedPromise'] !== null) {
                $instance->brandedPromise = ShopifyDeliveryBrandedPromise::fromArray($data['brandedPromise']);
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

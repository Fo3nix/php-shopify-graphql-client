<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FulfillmentOrder;
use Carbon\Carbon;

class FulfillmentOrderMerchantRequest
{
    protected $fulfillmentOrder;
    protected $id;
    protected $kind;
    protected $message;
    protected $requestOptions;
    protected $responseData;
    protected $sentAt;

    
    /**
     * @return FulfillmentOrder
     */
    public function getFulfillmentOrder()
    {
        return $this->fulfillmentOrder;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return FulfillmentOrderMerchantRequestKindEnumObject
     */
    public function getKind()
    {
        return $this->kind;
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
    public function getRequestOptions()
    {
        return $this->requestOptions;
    }

    
    /**
     * @return string
     */
    public function getResponseData()
    {
        return $this->responseData;
    }

    
    /**
     * @return Carbon
     */
    public function getSentAt()
    {
        return $this->sentAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['fulfillmentOrder']) && $data['fulfillmentOrder'] !== null) {
                $instance->fulfillmentOrder = FulfillmentOrder::fromArray($data['fulfillmentOrder']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['kind']) && $data['kind'] !== null) {
                $instance->kind = $data['kind'];
            }
            if (isset($data['message']) && $data['message'] !== null) {
                $instance->message = $data['message'];
            }
            if (isset($data['requestOptions']) && $data['requestOptions'] !== null) {
                $instance->requestOptions = $data['requestOptions'];
            }
            if (isset($data['responseData']) && $data['responseData'] !== null) {
                $instance->responseData = $data['responseData'];
            }
            if (isset($data['sentAt']) && $data['sentAt'] !== null) {
                $instance->sentAt = new Carbon($data['sentAt']);
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
            if ($this->fulfillmentOrder !== null) {
                $data['fulfillmentOrder'] = $this->fulfillmentOrder->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->kind !== null) {
                $data['kind'] = $this->kind;
            }
            if ($this->message !== null) {
                $data['message'] = $this->message;
            }
            if ($this->requestOptions !== null) {
                $data['requestOptions'] = $this->requestOptions;
            }
            if ($this->responseData !== null) {
                $data['responseData'] = $this->responseData;
            }
            if ($this->sentAt !== null) {
                $data['sentAt'] = $this->sentAt->toIso8601String();
            }
            return $data;
        }
}

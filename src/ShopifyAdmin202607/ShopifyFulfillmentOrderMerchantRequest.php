<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFulfillmentOrder;
use Carbon\Carbon;

/**
 * A request made by the merchant or an order management app to a fulfillment service
 * for a fulfillment order.
 */
class ShopifyFulfillmentOrderMerchantRequest implements ShopifyNode
{
    protected $fulfillmentOrder;
    protected $id;
    protected $kind;
    protected $message;
    protected $requestOptions;
    protected $responseData;
    protected $sentAt;

    
    /**
     * The fulfillment order associated with the merchant request.
     *
     * @return ShopifyFulfillmentOrder
     */
    public function getFulfillmentOrder(): ?ShopifyFulfillmentOrder
    {
        return $this->fulfillmentOrder;
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
     * The kind of request made.
     *
     * @return string A ShopifyFulfillmentOrderMerchantRequestKindEnumObject value
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    
    /**
     * The optional message that the merchant included in the request.
     *
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    
    /**
     * Additional options requested by the merchant. These depend on the `kind` of the request.
     * For example, for a `FULFILLMENT_REQUEST`, one option is `notify_customer`, which indicates whether the
     * merchant intends to notify the customer upon fulfillment. The fulfillment service can then set
     * `notifyCustomer` when making calls to `FulfillmentCreate`.
     *
     * @return string
     */
    public function getRequestOptions(): mixed
    {
        return $this->requestOptions;
    }

    
    /**
     * The response from the fulfillment service.
     *
     * @return string
     */
    public function getResponseData(): mixed
    {
        return $this->responseData;
    }

    
    /**
     * The timestamp when the request was made.
     *
     * @return Carbon
     */
    public function getSentAt(): ?Carbon
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
                $instance->fulfillmentOrder = ShopifyFulfillmentOrder::fromArray($data['fulfillmentOrder']);
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

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShippingLabelPurchaseError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShippingLabel;

/**
 * Tracks the progress of an asynchronous shipping label purchase request.
 */
class ShopifyShippingLabelPurchaseResult implements ShopifyJobResult, ShopifyNode
{
    protected $done;
    protected $errors;
    protected $id;
    protected $shippingLabels;
    protected $status;

    
    /**
     * This indicates if the job is still queued or has been run.
     *
     * @return bool
     */
    public function getDone(): ?bool
    {
        return $this->done;
    }

    
    /**
     * Purchase-processing errors for the request. Synchronous validation errors are returned from the `shippingLabelPurchase` mutation's `userErrors` field instead.
     *
     * @return ShopifyShippingLabelPurchaseError[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    
    /**
     * A globally-unique ID that's returned when running an asynchronous mutation.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The shipping labels created by the purchase request. Labels are returned only after successful purchase.
     *
     * @return ShopifyShippingLabel[]
     */
    public function getShippingLabels(): ?array
    {
        return $this->shippingLabels;
    }

    
    /**
     * The current purchase status. A purchase starts as `PENDING_PURCHASE` and ends as either `PURCHASED` or `PURCHASE_FAILED`.
     *
     * @return string A ShopifyShippingLabelPurchaseResultStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['done']) && $data['done'] !== null) {
                $instance->done = $data['done'];
            }
            if (isset($data['errors']) && $data['errors'] !== null) {
                $instance->errors = array_map(function($item) { return ShopifyShippingLabelPurchaseError::fromArray($item); }, $data['errors']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['shippingLabels']) && $data['shippingLabels'] !== null) {
                $instance->shippingLabels = array_map(function($item) { return ShopifyShippingLabel::fromArray($item); }, $data['shippingLabels']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if ($this->done !== null) {
                $data['done'] = $this->done;
            }
            if ($this->errors !== null) {
                $data['errors'] = array_map(function($item) { return $item->asArray(); }, $this->errors);
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->shippingLabels !== null) {
                $data['shippingLabels'] = array_map(function($item) { return $item->asArray(); }, $this->shippingLabels);
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            return $data;
        }
}

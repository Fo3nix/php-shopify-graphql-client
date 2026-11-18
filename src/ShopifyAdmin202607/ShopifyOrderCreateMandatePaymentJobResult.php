<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyUserError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyOrder;

/**
 * A job result for tracking the status of a mandate payment request on an order.
 */
class ShopifyOrderCreateMandatePaymentJobResult implements ShopifyJobResult, ShopifyNode
{
    protected $done;
    protected $errors;
    protected $id;
    protected $order;
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
     * Returns any errors that occurred during the mandate payment.
     *
     * @return ShopifyUserError[]
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
     * The order associated with the mandate payment request.
     *
     * @return ShopifyOrder
     */
    public function getOrder(): ?ShopifyOrder
    {
        return $this->order;
    }

    
    /**
     * The current status of the mandate payment request.
     *
     * @return string A ShopifyOrderCreateMandatePaymentStatusEnumObject value
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
                $instance->errors = array_map(function($item) { return ShopifyUserError::fromArray($item); }, $data['errors']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['order']) && $data['order'] !== null) {
                $instance->order = ShopifyOrder::fromArray($data['order']);
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
            if ($this->order !== null) {
                $data['order'] = $this->order->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            return $data;
        }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * A server pixel stores configuration for streaming customer interactions to an EventBridge or PubSub endpoint.
 */
class ShopifyServerPixel implements ShopifyNode
{
    protected $id;
    protected $status;
    protected $webhookEndpointAddress;

    
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
     * The current state of this server pixel.
     *
     * @return string A ShopifyServerPixelStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * Address of the EventBridge or PubSub endpoint.
     *
     * @return string
     */
    public function getWebhookEndpointAddress(): ?string
    {
        return $this->webhookEndpointAddress;
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
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['webhookEndpointAddress']) && $data['webhookEndpointAddress'] !== null) {
                $instance->webhookEndpointAddress = $data['webhookEndpointAddress'];
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
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->webhookEndpointAddress !== null) {
                $data['webhookEndpointAddress'] = $this->webhookEndpointAddress;
            }
            return $data;
        }
}

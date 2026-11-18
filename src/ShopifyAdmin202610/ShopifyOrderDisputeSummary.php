<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * A summary of the important details for a dispute on an order.
 */
class ShopifyOrderDisputeSummary implements ShopifyNode
{
    protected $id;
    protected $initiatedAs;
    protected $status;

    
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
     * The type that the dispute was initiated as.
     *
     * @return string A ShopifyDisputeTypeEnumObject value
     */
    public function getInitiatedAs(): ?string
    {
        return $this->initiatedAs;
    }

    
    /**
     * The current status of the dispute.
     *
     * @return string A ShopifyDisputeStatusEnumObject value
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
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['initiatedAs']) && $data['initiatedAs'] !== null) {
                $instance->initiatedAs = $data['initiatedAs'];
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->initiatedAs !== null) {
                $data['initiatedAs'] = $this->initiatedAs;
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            return $data;
        }
}

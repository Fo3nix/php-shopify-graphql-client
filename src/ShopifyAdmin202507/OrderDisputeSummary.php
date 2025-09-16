<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class OrderDisputeSummary
{
    protected $id;
    protected $initiatedAs;
    protected $status;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return DisputeTypeEnumObject
     */
    public function getInitiatedAs()
    {
        return $this->initiatedAs;
    }

    
    /**
     * @return DisputeStatusEnumObject
     */
    public function getStatus()
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

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerMergeRequest;

class CustomerMergeable
{
    protected $errorFields;
    protected $isMergeable;
    protected $mergeInProgress;
    protected $reason;

    
    /**
     * @return CustomerMergeErrorFieldTypeEnumObject[]
     */
    public function getErrorFields()
    {
        return $this->errorFields;
    }

    
    /**
     * @return bool
     */
    public function getIsMergeable()
    {
        return $this->isMergeable;
    }

    
    /**
     * @return CustomerMergeRequest
     */
    public function getMergeInProgress()
    {
        return $this->mergeInProgress;
    }

    
    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['errorFields']) && $data['errorFields'] !== null) {
                $instance->errorFields = $data['errorFields'];
            }
            if (isset($data['isMergeable']) && $data['isMergeable'] !== null) {
                $instance->isMergeable = $data['isMergeable'];
            }
            if (isset($data['mergeInProgress']) && $data['mergeInProgress'] !== null) {
                $instance->mergeInProgress = CustomerMergeRequest::fromArray($data['mergeInProgress']);
            }
            if (isset($data['reason']) && $data['reason'] !== null) {
                $instance->reason = $data['reason'];
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
            if ($this->errorFields !== null) {
                $data['errorFields'] = $this->errorFields;
            }
            if ($this->isMergeable !== null) {
                $data['isMergeable'] = $this->isMergeable;
            }
            if ($this->mergeInProgress !== null) {
                $data['mergeInProgress'] = $this->mergeInProgress->asArray();
            }
            if ($this->reason !== null) {
                $data['reason'] = $this->reason;
            }
            return $data;
        }
}

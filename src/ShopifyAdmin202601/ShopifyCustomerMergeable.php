<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCustomerMergeRequest;

/**
 * An object that represents whether a customer can be merged with another customer.
 */
class ShopifyCustomerMergeable
{
    protected $errorFields;
    protected $isMergeable;
    protected $mergeInProgress;
    protected $reason;

    
    /**
     * The list of fields preventing the customer from being merged.
     *
     * @return string[] ShopifyCustomerMergeErrorFieldTypeEnumObject values
     */
    public function getErrorFields(): ?array
    {
        return $this->errorFields;
    }

    
    /**
     * Whether the customer can be merged with another customer.
     *
     * @return bool
     */
    public function getIsMergeable(): ?bool
    {
        return $this->isMergeable;
    }

    
    /**
     * The merge request if one is currently in progress.
     *
     * @return ShopifyCustomerMergeRequest
     */
    public function getMergeInProgress(): ?ShopifyCustomerMergeRequest
    {
        return $this->mergeInProgress;
    }

    
    /**
     * The reason why the customer can't be merged with another customer.
     *
     * @return string
     */
    public function getReason(): ?string
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
                $instance->mergeInProgress = ShopifyCustomerMergeRequest::fromArray($data['mergeInProgress']);
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

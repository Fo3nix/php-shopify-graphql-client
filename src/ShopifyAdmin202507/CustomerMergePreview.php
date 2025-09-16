<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerMergePreviewAlternateFields;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerMergePreviewBlockingFields;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerMergeError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CustomerMergePreviewDefaultFields;

class CustomerMergePreview
{
    protected $alternateFields;
    protected $blockingFields;
    protected $customerMergeErrors;
    protected $defaultFields;
    protected $resultingCustomerId;

    
    /**
     * @return CustomerMergePreviewAlternateFields
     */
    public function getAlternateFields()
    {
        return $this->alternateFields;
    }

    
    /**
     * @return CustomerMergePreviewBlockingFields
     */
    public function getBlockingFields()
    {
        return $this->blockingFields;
    }

    
    /**
     * @return CustomerMergeError[]
     */
    public function getCustomerMergeErrors()
    {
        return $this->customerMergeErrors;
    }

    
    /**
     * @return CustomerMergePreviewDefaultFields
     */
    public function getDefaultFields()
    {
        return $this->defaultFields;
    }

    
    /**
     * @return string
     */
    public function getResultingCustomerId()
    {
        return $this->resultingCustomerId;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['alternateFields']) && $data['alternateFields'] !== null) {
                $instance->alternateFields = CustomerMergePreviewAlternateFields::fromArray($data['alternateFields']);
            }
            if (isset($data['blockingFields']) && $data['blockingFields'] !== null) {
                $instance->blockingFields = CustomerMergePreviewBlockingFields::fromArray($data['blockingFields']);
            }
            if (isset($data['customerMergeErrors']) && $data['customerMergeErrors'] !== null) {
                $instance->customerMergeErrors = array_map(function($item) { return CustomerMergeError::fromArray($item); }, $data['customerMergeErrors']);
            }
            if (isset($data['defaultFields']) && $data['defaultFields'] !== null) {
                $instance->defaultFields = CustomerMergePreviewDefaultFields::fromArray($data['defaultFields']);
            }
            if (isset($data['resultingCustomerId']) && $data['resultingCustomerId'] !== null) {
                $instance->resultingCustomerId = $data['resultingCustomerId'];
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
            if ($this->alternateFields !== null) {
                $data['alternateFields'] = $this->alternateFields->asArray();
            }
            if ($this->blockingFields !== null) {
                $data['blockingFields'] = $this->blockingFields->asArray();
            }
            if ($this->customerMergeErrors !== null) {
                $data['customerMergeErrors'] = array_map(function($item) { return $item->asArray(); }, $this->customerMergeErrors);
            }
            if ($this->defaultFields !== null) {
                $data['defaultFields'] = $this->defaultFields->asArray();
            }
            if ($this->resultingCustomerId !== null) {
                $data['resultingCustomerId'] = $this->resultingCustomerId;
            }
            return $data;
        }
}

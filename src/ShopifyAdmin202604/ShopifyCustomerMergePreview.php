<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerMergePreviewAlternateFields;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerMergePreviewBlockingFields;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerMergeError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerMergePreviewDefaultFields;

class ShopifyCustomerMergePreview
{
    protected $alternateFields;
    protected $blockingFields;
    protected $customerMergeErrors;
    protected $defaultFields;
    protected $resultingCustomerId;

    
    /**
     * @return ShopifyCustomerMergePreviewAlternateFields
     */
    public function getAlternateFields()
    {
        return $this->alternateFields;
    }

    
    /**
     * @return ShopifyCustomerMergePreviewBlockingFields
     */
    public function getBlockingFields()
    {
        return $this->blockingFields;
    }

    
    /**
     * @return ShopifyCustomerMergeError[]
     */
    public function getCustomerMergeErrors()
    {
        return $this->customerMergeErrors;
    }

    
    /**
     * @return ShopifyCustomerMergePreviewDefaultFields
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
                $instance->alternateFields = ShopifyCustomerMergePreviewAlternateFields::fromArray($data['alternateFields']);
            }
            if (isset($data['blockingFields']) && $data['blockingFields'] !== null) {
                $instance->blockingFields = ShopifyCustomerMergePreviewBlockingFields::fromArray($data['blockingFields']);
            }
            if (isset($data['customerMergeErrors']) && $data['customerMergeErrors'] !== null) {
                $instance->customerMergeErrors = array_map(function($item) { return ShopifyCustomerMergeError::fromArray($item); }, $data['customerMergeErrors']);
            }
            if (isset($data['defaultFields']) && $data['defaultFields'] !== null) {
                $instance->defaultFields = ShopifyCustomerMergePreviewDefaultFields::fromArray($data['defaultFields']);
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

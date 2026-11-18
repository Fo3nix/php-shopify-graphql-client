<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerMergePreviewAlternateFields;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerMergePreviewBlockingFields;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerMergeError;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCustomerMergePreviewDefaultFields;

/**
 * A preview of the results of a customer merge request. Use `resultingCustomerId` to check which customer
 * would be kept before running `customerMerge`.
 */
class ShopifyCustomerMergePreview
{
    protected $alternateFields;
    protected $blockingFields;
    protected $customerMergeErrors;
    protected $defaultFields;
    protected $resultingCustomerId;

    
    /**
     * The fields that can be used to override the default fields.
     *
     * @return ShopifyCustomerMergePreviewAlternateFields
     */
    public function getAlternateFields(): ?ShopifyCustomerMergePreviewAlternateFields
    {
        return $this->alternateFields;
    }

    
    /**
     * The fields that will block the merge if the two customers are merged.
     *
     * @return ShopifyCustomerMergePreviewBlockingFields
     */
    public function getBlockingFields(): ?ShopifyCustomerMergePreviewBlockingFields
    {
        return $this->blockingFields;
    }

    
    /**
     * The errors blocking the customer merge.
     *
     * @return ShopifyCustomerMergeError[]
     */
    public function getCustomerMergeErrors(): ?array
    {
        return $this->customerMergeErrors;
    }

    
    /**
     * The fields that will be kept if the two customers are merged.
     *
     * @return ShopifyCustomerMergePreviewDefaultFields
     */
    public function getDefaultFields(): ?ShopifyCustomerMergePreviewDefaultFields
    {
        return $this->defaultFields;
    }

    
    /**
     * The ID of the customer that would be kept if the two customers were merged.
     *
     * @return string
     */
    public function getResultingCustomerId(): ?string
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

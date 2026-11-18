<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * Controls which cart transformation operations apps can perform in your store. This lets you define exactly what types of cart modifications are allowed based on your checkout setup and business needs.
 *
 * The eligible operations determine what cart transform functions can accomplish, providing a clear boundary for app capabilities within the store's ecosystem.
 *
 * Learn more about [cart transform operations](https://shopify.dev/docs/api/functions/latest/cart-transform#multiple-operations).
 */
class ShopifyCartTransformEligibleOperations
{
    protected $expandOperation;
    protected $mergeOperation;
    protected $updateOperation;

    
    /**
     * The shop is eligible for expand operations.
     *
     * @return bool
     */
    public function getExpandOperation(): ?bool
    {
        return $this->expandOperation;
    }

    
    /**
     * The shop is eligible for merge operations.
     *
     * @return bool
     */
    public function getMergeOperation(): ?bool
    {
        return $this->mergeOperation;
    }

    
    /**
     * The shop is eligible for update operations.
     *
     * @return bool
     */
    public function getUpdateOperation(): ?bool
    {
        return $this->updateOperation;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['expandOperation']) && $data['expandOperation'] !== null) {
                $instance->expandOperation = $data['expandOperation'];
            }
            if (isset($data['mergeOperation']) && $data['mergeOperation'] !== null) {
                $instance->mergeOperation = $data['mergeOperation'];
            }
            if (isset($data['updateOperation']) && $data['updateOperation'] !== null) {
                $instance->updateOperation = $data['updateOperation'];
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
            if ($this->expandOperation !== null) {
                $data['expandOperation'] = $this->expandOperation;
            }
            if ($this->mergeOperation !== null) {
                $data['mergeOperation'] = $this->mergeOperation;
            }
            if ($this->updateOperation !== null) {
                $data['updateOperation'] = $this->updateOperation;
            }
            return $data;
        }
}

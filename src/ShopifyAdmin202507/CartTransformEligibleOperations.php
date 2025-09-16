<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class CartTransformEligibleOperations
{
    protected $expandOperation;
    protected $mergeOperation;
    protected $updateOperation;

    
    /**
     * @return bool
     */
    public function getExpandOperation()
    {
        return $this->expandOperation;
    }

    
    /**
     * @return bool
     */
    public function getMergeOperation()
    {
        return $this->mergeOperation;
    }

    
    /**
     * @return bool
     */
    public function getUpdateOperation()
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

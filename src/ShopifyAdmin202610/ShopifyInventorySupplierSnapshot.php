<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * Represents a snapshot of the supplier where a purchase order originates from.
 */
class ShopifyInventorySupplierSnapshot
{
    protected $supplierName;

    
    /**
     * The name of the supplier as it was when the purchase order was created.
     *
     * @return string
     */
    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['supplierName']) && $data['supplierName'] !== null) {
                $instance->supplierName = $data['supplierName'];
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
            if ($this->supplierName !== null) {
                $data['supplierName'] = $this->supplierName;
            }
            return $data;
        }
}

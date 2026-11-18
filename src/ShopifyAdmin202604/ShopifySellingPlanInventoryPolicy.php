<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * The selling plan inventory policy.
 */
class ShopifySellingPlanInventoryPolicy
{
    protected $reserve;

    
    /**
     * When to reserve inventory for the order.
     *
     * @return string A ShopifySellingPlanReserveEnumObject value
     */
    public function getReserve(): ?string
    {
        return $this->reserve;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['reserve']) && $data['reserve'] !== null) {
                $instance->reserve = $data['reserve'];
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
            if ($this->reserve !== null) {
                $data['reserve'] = $this->reserve;
            }
            return $data;
        }
}

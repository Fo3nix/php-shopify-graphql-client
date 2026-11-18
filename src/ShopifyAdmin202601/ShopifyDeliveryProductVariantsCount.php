<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * How many product variants are in a profile. This count is capped at 500.
 */
class ShopifyDeliveryProductVariantsCount
{
    protected $capped;
    protected $count;

    
    /**
     * Whether the count has reached the cap of 500.
     *
     * @return bool
     */
    public function getCapped(): ?bool
    {
        return $this->capped;
    }

    
    /**
     * The product variant count.
     *
     * @return int
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['capped']) && $data['capped'] !== null) {
                $instance->capped = $data['capped'];
            }
            if (isset($data['count']) && $data['count'] !== null) {
                $instance->count = $data['count'];
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
            if ($this->capped !== null) {
                $data['capped'] = $this->capped;
            }
            if ($this->count !== null) {
                $data['count'] = $this->count;
            }
            return $data;
        }
}

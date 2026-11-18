<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * The total number of pending orders on a shop if less then a maximum, or that maximum.
 * The atMax field indicates when this maximum has been reached.
 */
class ShopifyLimitedPendingOrderCount
{
    protected $atMax;
    protected $count;

    
    /**
     * This is set when the number of pending orders has reached the maximum.
     *
     * @return bool
     */
    public function getAtMax(): ?bool
    {
        return $this->atMax;
    }

    
    /**
     * The number of pending orders on the shop.
     * Limited to a maximum of 10000.
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
            if (isset($data['atMax']) && $data['atMax'] !== null) {
                $instance->atMax = $data['atMax'];
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
            if ($this->atMax !== null) {
                $data['atMax'] = $this->atMax;
            }
            if ($this->count !== null) {
                $data['count'] = $this->count;
            }
            return $data;
        }
}

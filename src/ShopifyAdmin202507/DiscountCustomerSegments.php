<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Segment;

class DiscountCustomerSegments
{
    protected $segments;

    
    /**
     * @return Segment[]
     */
    public function getSegments()
    {
        return $this->segments;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['segments']) && $data['segments'] !== null) {
                $instance->segments = array_map(function($item) { return Segment::fromArray($item); }, $data['segments']);
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
            if ($this->segments !== null) {
                $data['segments'] = array_map(function($item) { return $item->asArray(); }, $this->segments);
            }
            return $data;
        }
}

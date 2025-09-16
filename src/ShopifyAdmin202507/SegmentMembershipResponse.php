<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\SegmentMembership;

class SegmentMembershipResponse
{
    protected $memberships;

    
    /**
     * @return SegmentMembership[]
     */
    public function getMemberships()
    {
        return $this->memberships;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['memberships']) && $data['memberships'] !== null) {
                $instance->memberships = array_map(function($item) { return SegmentMembership::fromArray($item); }, $data['memberships']);
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
            if ($this->memberships !== null) {
                $data['memberships'] = array_map(function($item) { return $item->asArray(); }, $this->memberships);
            }
            return $data;
        }
}

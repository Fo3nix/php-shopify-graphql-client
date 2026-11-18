<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifySegmentMembership;

/**
 * A list of maps that contain `segmentId` IDs and `isMember` Booleans. The maps represent segment memberships.
 */
class ShopifySegmentMembershipResponse
{
    protected $memberships;

    
    /**
     * The membership status for the given list of segments.
     *
     * @return ShopifySegmentMembership[]
     */
    public function getMemberships(): ?array
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
                $instance->memberships = array_map(function($item) { return ShopifySegmentMembership::fromArray($item); }, $data['memberships']);
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

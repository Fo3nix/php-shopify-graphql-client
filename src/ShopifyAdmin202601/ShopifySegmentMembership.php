<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * The response type for the `segmentMembership` object.
 */
class ShopifySegmentMembership
{
    protected $isMember;
    protected $segmentId;

    
    /**
     * A Boolean that indicates whether or not the customer in the query is a member of the segment, which is identified using the `segmentId`.
     *
     * @return bool
     */
    public function getIsMember(): ?bool
    {
        return $this->isMember;
    }

    
    /**
     * A `segmentId` that's used for testing membership.
     *
     * @return string
     */
    public function getSegmentId(): ?string
    {
        return $this->segmentId;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['isMember']) && $data['isMember'] !== null) {
                $instance->isMember = $data['isMember'];
            }
            if (isset($data['segmentId']) && $data['segmentId'] !== null) {
                $instance->segmentId = $data['segmentId'];
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
            if ($this->isMember !== null) {
                $data['isMember'] = $this->isMember;
            }
            if ($this->segmentId !== null) {
                $data['segmentId'] = $this->segmentId;
            }
            return $data;
        }
}

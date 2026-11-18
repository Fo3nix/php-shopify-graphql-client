<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

/**
 * A segment and its corresponding saved search.
 * For example, you can use `SegmentMigration` to retrieve the segment ID that corresponds to a saved search ID.
 */
class ShopifySegmentMigration
{
    protected $id;
    protected $savedSearchId;
    protected $segmentId;

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The ID of the saved search.
     *
     * @return string
     */
    public function getSavedSearchId(): ?string
    {
        return $this->savedSearchId;
    }

    
    /**
     * The ID of the segment.
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
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['savedSearchId']) && $data['savedSearchId'] !== null) {
                $instance->savedSearchId = $data['savedSearchId'];
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->savedSearchId !== null) {
                $data['savedSearchId'] = $this->savedSearchId;
            }
            if ($this->segmentId !== null) {
                $data['segmentId'] = $this->segmentId;
            }
            return $data;
        }
}

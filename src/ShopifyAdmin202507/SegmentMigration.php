<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class SegmentMigration
{
    protected $id;
    protected $savedSearchId;
    protected $segmentId;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getSavedSearchId()
    {
        return $this->savedSearchId;
    }

    
    /**
     * @return string
     */
    public function getSegmentId()
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

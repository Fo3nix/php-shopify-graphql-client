<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\AppFeedback;

class ResourceFeedback
{
    protected $appFeedback;
    protected $details;
    protected $summary;

    
    /**
     * @return AppFeedback[]
     */
    public function getAppFeedback()
    {
        return $this->appFeedback;
    }

    
    /**
     * @return AppFeedback[]
     */
    public function getDetails()
    {
        return $this->details;
    }

    
    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['appFeedback']) && $data['appFeedback'] !== null) {
                $instance->appFeedback = array_map(function($item) { return AppFeedback::fromArray($item); }, $data['appFeedback']);
            }
            if (isset($data['details']) && $data['details'] !== null) {
                $instance->details = array_map(function($item) { return AppFeedback::fromArray($item); }, $data['details']);
            }
            if (isset($data['summary']) && $data['summary'] !== null) {
                $instance->summary = $data['summary'];
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
            if ($this->appFeedback !== null) {
                $data['appFeedback'] = array_map(function($item) { return $item->asArray(); }, $this->appFeedback);
            }
            if ($this->details !== null) {
                $data['details'] = array_map(function($item) { return $item->asArray(); }, $this->details);
            }
            if ($this->summary !== null) {
                $data['summary'] = $this->summary;
            }
            return $data;
        }
}

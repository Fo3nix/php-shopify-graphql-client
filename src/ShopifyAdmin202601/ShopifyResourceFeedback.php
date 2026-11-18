<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyAppFeedback;

/**
 * Represents feedback from apps about a resource, and the steps required to set up the apps on the shop.
 */
class ShopifyResourceFeedback
{
    protected $appFeedback;
    protected $details;
    protected $summary;

    
    /**
     * Feedback from an app about the steps a merchant needs to take to set up the app on their store.
     *
     * @return ShopifyAppFeedback[]
     */
    public function getAppFeedback(): ?array
    {
        return $this->appFeedback;
    }

    
    /**
     * List of AppFeedback detailing issues regarding a resource.
     *
     * @return ShopifyAppFeedback[]
     */
    public function getDetails(): ?array
    {
        return $this->details;
    }

    
    /**
     * Summary of resource feedback pertaining to the resource.
     *
     * @return string
     */
    public function getSummary(): ?string
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
                $instance->appFeedback = array_map(function($item) { return ShopifyAppFeedback::fromArray($item); }, $data['appFeedback']);
            }
            if (isset($data['details']) && $data['details'] !== null) {
                $instance->details = array_map(function($item) { return ShopifyAppFeedback::fromArray($item); }, $data['details']);
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

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFullSyncTraceInfo;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyChannelFullSyncUserError;

/**
 * Return type for `channelFullSync` mutation.
 */
class ShopifyChannelFullSyncPayload
{
    protected $fullSyncTraceInfo;
    protected $userErrors;

    
    /**
     * Trace information for each country-language product feed that was triggered. Returns one entry per feed.
     *
     * @return ShopifyFullSyncTraceInfo[]
     */
    public function getFullSyncTraceInfo(): ?array
    {
        return $this->fullSyncTraceInfo;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyChannelFullSyncUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['fullSyncTraceInfo']) && $data['fullSyncTraceInfo'] !== null) {
                $instance->fullSyncTraceInfo = array_map(function($item) { return ShopifyFullSyncTraceInfo::fromArray($item); }, $data['fullSyncTraceInfo']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyChannelFullSyncUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->fullSyncTraceInfo !== null) {
                $data['fullSyncTraceInfo'] = array_map(function($item) { return $item->asArray(); }, $this->fullSyncTraceInfo);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}

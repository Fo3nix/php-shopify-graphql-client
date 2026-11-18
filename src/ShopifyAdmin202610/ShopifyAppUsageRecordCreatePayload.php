<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyAppUsageRecord;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyUserError;

/**
 * Return type for `appUsageRecordCreate` mutation.
 */
class ShopifyAppUsageRecordCreatePayload
{
    protected $appUsageRecord;
    protected $userErrors;

    
    /**
     * The newly created app usage record.
     *
     * @return ShopifyAppUsageRecord
     */
    public function getAppUsageRecord(): ?ShopifyAppUsageRecord
    {
        return $this->appUsageRecord;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyUserError[]
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
            if (isset($data['appUsageRecord']) && $data['appUsageRecord'] !== null) {
                $instance->appUsageRecord = ShopifyAppUsageRecord::fromArray($data['appUsageRecord']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->appUsageRecord !== null) {
                $data['appUsageRecord'] = $this->appUsageRecord->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}

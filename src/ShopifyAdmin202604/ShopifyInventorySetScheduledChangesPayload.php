<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyInventoryScheduledChange;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyInventorySetScheduledChangesUserError;

/**
 * Return type for `inventorySetScheduledChanges` mutation.
 */
class ShopifyInventorySetScheduledChangesPayload
{
    protected $scheduledChanges;
    protected $userErrors;

    
    /**
     * The scheduled changes that were created.
     *
     * @return ShopifyInventoryScheduledChange[]
     */
    public function getScheduledChanges(): ?array
    {
        return $this->scheduledChanges;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyInventorySetScheduledChangesUserError[]
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
            if (isset($data['scheduledChanges']) && $data['scheduledChanges'] !== null) {
                $instance->scheduledChanges = array_map(function($item) { return ShopifyInventoryScheduledChange::fromArray($item); }, $data['scheduledChanges']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyInventorySetScheduledChangesUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->scheduledChanges !== null) {
                $data['scheduledChanges'] = array_map(function($item) { return $item->asArray(); }, $this->scheduledChanges);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}

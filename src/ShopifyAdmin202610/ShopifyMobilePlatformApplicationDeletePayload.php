<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMobilePlatformApplicationUserError;

/**
 * Return type for `mobilePlatformApplicationDelete` mutation.
 */
class ShopifyMobilePlatformApplicationDeletePayload
{
    protected $deletedMobilePlatformApplicationId;
    protected $userErrors;

    
    /**
     * The ID of the mobile platform application that was just deleted.
     *
     * @return string
     */
    public function getDeletedMobilePlatformApplicationId(): ?string
    {
        return $this->deletedMobilePlatformApplicationId;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyMobilePlatformApplicationUserError[]
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
            if (isset($data['deletedMobilePlatformApplicationId']) && $data['deletedMobilePlatformApplicationId'] !== null) {
                $instance->deletedMobilePlatformApplicationId = $data['deletedMobilePlatformApplicationId'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyMobilePlatformApplicationUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->deletedMobilePlatformApplicationId !== null) {
                $data['deletedMobilePlatformApplicationId'] = $this->deletedMobilePlatformApplicationId;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}

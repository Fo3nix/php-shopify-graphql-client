<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOnlineStoreTheme;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyThemeDuplicateUserError;

/**
 * Return type for `themeDuplicate` mutation.
 */
class ShopifyThemeDuplicatePayload
{
    protected $newTheme;
    protected $userErrors;

    
    /**
     * The newly duplicated theme.
     *
     * @return ShopifyOnlineStoreTheme
     */
    public function getNewTheme(): ?ShopifyOnlineStoreTheme
    {
        return $this->newTheme;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyThemeDuplicateUserError[]
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
            if (isset($data['newTheme']) && $data['newTheme'] !== null) {
                $instance->newTheme = ShopifyOnlineStoreTheme::fromArray($data['newTheme']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyThemeDuplicateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->newTheme !== null) {
                $data['newTheme'] = $this->newTheme->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}

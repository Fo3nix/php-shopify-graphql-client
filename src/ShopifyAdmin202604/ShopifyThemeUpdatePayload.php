<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOnlineStoreTheme;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyThemeUpdateUserError;

/**
 * Return type for `themeUpdate` mutation.
 */
class ShopifyThemeUpdatePayload
{
    protected $theme;
    protected $userErrors;

    
    /**
     * The theme that was updated.
     *
     * @return ShopifyOnlineStoreTheme
     */
    public function getTheme(): ?ShopifyOnlineStoreTheme
    {
        return $this->theme;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyThemeUpdateUserError[]
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
            if (isset($data['theme']) && $data['theme'] !== null) {
                $instance->theme = ShopifyOnlineStoreTheme::fromArray($data['theme']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyThemeUpdateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->theme !== null) {
                $data['theme'] = $this->theme->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}

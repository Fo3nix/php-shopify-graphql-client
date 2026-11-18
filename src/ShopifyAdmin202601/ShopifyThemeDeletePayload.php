<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyThemeDeleteUserError;

/**
 * Return type for `themeDelete` mutation.
 */
class ShopifyThemeDeletePayload
{
    protected $deletedThemeId;
    protected $userErrors;

    
    /**
     * The ID of the deleted theme.
     *
     * @return string
     */
    public function getDeletedThemeId(): ?string
    {
        return $this->deletedThemeId;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyThemeDeleteUserError[]
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
            if (isset($data['deletedThemeId']) && $data['deletedThemeId'] !== null) {
                $instance->deletedThemeId = $data['deletedThemeId'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyThemeDeleteUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->deletedThemeId !== null) {
                $data['deletedThemeId'] = $this->deletedThemeId;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}

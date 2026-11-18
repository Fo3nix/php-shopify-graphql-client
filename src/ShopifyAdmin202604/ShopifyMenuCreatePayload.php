<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMenu;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMenuCreateUserError;

/**
 * Return type for `menuCreate` mutation.
 */
class ShopifyMenuCreatePayload
{
    protected $menu;
    protected $userErrors;

    
    /**
     * The created menu.
     *
     * @return ShopifyMenu
     */
    public function getMenu(): ?ShopifyMenu
    {
        return $this->menu;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyMenuCreateUserError[]
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
            if (isset($data['menu']) && $data['menu'] !== null) {
                $instance->menu = ShopifyMenu::fromArray($data['menu']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyMenuCreateUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->menu !== null) {
                $data['menu'] = $this->menu->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}

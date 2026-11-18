<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyShopLocale;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyUserError;

/**
 * Return type for `shopLocaleEnable` mutation.
 */
class ShopifyShopLocaleEnablePayload
{
    protected $shopLocale;
    protected $userErrors;

    
    /**
     * ISO code of the locale that was enabled.
     *
     * @return ShopifyShopLocale
     */
    public function getShopLocale(): ?ShopifyShopLocale
    {
        return $this->shopLocale;
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
            if (isset($data['shopLocale']) && $data['shopLocale'] !== null) {
                $instance->shopLocale = ShopifyShopLocale::fromArray($data['shopLocale']);
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
            if ($this->shopLocale !== null) {
                $data['shopLocale'] = $this->shopLocale->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}

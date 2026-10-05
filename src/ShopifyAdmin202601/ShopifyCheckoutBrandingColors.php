<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingColorGlobal;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCheckoutBrandingColorSchemes;

class ShopifyCheckoutBrandingColors
{
    protected $global;
    protected $schemes;

    
    /**
     * @return ShopifyCheckoutBrandingColorGlobal
     */
    public function getGlobal()
    {
        return $this->global;
    }

    
    /**
     * @return ShopifyCheckoutBrandingColorSchemes
     */
    public function getSchemes()
    {
        return $this->schemes;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['global']) && $data['global'] !== null) {
                $instance->global = ShopifyCheckoutBrandingColorGlobal::fromArray($data['global']);
            }
            if (isset($data['schemes']) && $data['schemes'] !== null) {
                $instance->schemes = ShopifyCheckoutBrandingColorSchemes::fromArray($data['schemes']);
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
            if ($this->global !== null) {
                $data['global'] = $this->global->asArray();
            }
            if ($this->schemes !== null) {
                $data['schemes'] = $this->schemes->asArray();
            }
            return $data;
        }
}

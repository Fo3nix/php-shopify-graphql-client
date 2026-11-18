<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutBrandingColorGlobal;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutBrandingColorSchemes;

/**
 * The color settings for global colors and color schemes.
 */
class ShopifyCheckoutBrandingColors
{
    protected $global;
    protected $schemes;

    
    /**
     * A group of global colors for customizing the overall look and feel of the user interface.
     *
     * @return ShopifyCheckoutBrandingColorGlobal
     */
    public function getGlobal(): ?ShopifyCheckoutBrandingColorGlobal
    {
        return $this->global;
    }

    
    /**
     * A set of color schemes which apply to different areas of the user interface.
     *
     * @return ShopifyCheckoutBrandingColorSchemes
     */
    public function getSchemes(): ?ShopifyCheckoutBrandingColorSchemes
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

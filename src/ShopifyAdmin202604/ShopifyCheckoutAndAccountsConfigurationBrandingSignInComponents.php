<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutAndAccountsConfigurationBrandingSignInHeader;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCheckoutAndAccountsConfigurationBrandingSignInMain;

class ShopifyCheckoutAndAccountsConfigurationBrandingSignInComponents
{
    protected $header;
    protected $main;

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingSignInHeader
     */
    public function getHeader()
    {
        return $this->header;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingSignInMain
     */
    public function getMain()
    {
        return $this->main;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['header']) && $data['header'] !== null) {
                $instance->header = ShopifyCheckoutAndAccountsConfigurationBrandingSignInHeader::fromArray($data['header']);
            }
            if (isset($data['main']) && $data['main'] !== null) {
                $instance->main = ShopifyCheckoutAndAccountsConfigurationBrandingSignInMain::fromArray($data['main']);
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
            if ($this->header !== null) {
                $data['header'] = $this->header->asArray();
            }
            if ($this->main !== null) {
                $data['main'] = $this->main->asArray();
            }
            return $data;
        }
}

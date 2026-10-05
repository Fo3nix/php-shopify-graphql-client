<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsFooter;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsHeader;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMain;

class ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsComponents
{
    protected $footer;
    protected $header;
    protected $main;

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsFooter
     */
    public function getFooter()
    {
        return $this->footer;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsHeader
     */
    public function getHeader()
    {
        return $this->header;
    }

    
    /**
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMain
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
            if (isset($data['footer']) && $data['footer'] !== null) {
                $instance->footer = ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsFooter::fromArray($data['footer']);
            }
            if (isset($data['header']) && $data['header'] !== null) {
                $instance->header = ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsHeader::fromArray($data['header']);
            }
            if (isset($data['main']) && $data['main'] !== null) {
                $instance->main = ShopifyCheckoutAndAccountsConfigurationBrandingCustomerAccountsMain::fromArray($data['main']);
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
            if ($this->footer !== null) {
                $data['footer'] = $this->footer->asArray();
            }
            if ($this->header !== null) {
                $data['header'] = $this->header->asArray();
            }
            if ($this->main !== null) {
                $data['main'] = $this->main->asArray();
            }
            return $data;
        }
}

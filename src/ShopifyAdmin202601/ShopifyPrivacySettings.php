<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCookieBanner;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDataSaleOptOutPage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPrivacyPolicy;

class ShopifyPrivacySettings
{
    protected $banner;
    protected $dataSaleOptOutPage;
    protected $privacyPolicy;

    
    /**
     * @return ShopifyCookieBanner
     */
    public function getBanner()
    {
        return $this->banner;
    }

    
    /**
     * @return ShopifyDataSaleOptOutPage
     */
    public function getDataSaleOptOutPage()
    {
        return $this->dataSaleOptOutPage;
    }

    
    /**
     * @return ShopifyPrivacyPolicy
     */
    public function getPrivacyPolicy()
    {
        return $this->privacyPolicy;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['banner']) && $data['banner'] !== null) {
                $instance->banner = ShopifyCookieBanner::fromArray($data['banner']);
            }
            if (isset($data['dataSaleOptOutPage']) && $data['dataSaleOptOutPage'] !== null) {
                $instance->dataSaleOptOutPage = ShopifyDataSaleOptOutPage::fromArray($data['dataSaleOptOutPage']);
            }
            if (isset($data['privacyPolicy']) && $data['privacyPolicy'] !== null) {
                $instance->privacyPolicy = ShopifyPrivacyPolicy::fromArray($data['privacyPolicy']);
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
            if ($this->banner !== null) {
                $data['banner'] = $this->banner->asArray();
            }
            if ($this->dataSaleOptOutPage !== null) {
                $data['dataSaleOptOutPage'] = $this->dataSaleOptOutPage->asArray();
            }
            if ($this->privacyPolicy !== null) {
                $data['privacyPolicy'] = $this->privacyPolicy->asArray();
            }
            return $data;
        }
}

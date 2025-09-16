<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CookieBanner;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DataSaleOptOutPage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PrivacyPolicy;

class PrivacySettings
{
    protected $banner;
    protected $dataSaleOptOutPage;
    protected $privacyPolicy;

    
    /**
     * @return CookieBanner
     */
    public function getBanner()
    {
        return $this->banner;
    }

    
    /**
     * @return DataSaleOptOutPage
     */
    public function getDataSaleOptOutPage()
    {
        return $this->dataSaleOptOutPage;
    }

    
    /**
     * @return PrivacyPolicy
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
                $instance->banner = CookieBanner::fromArray($data['banner']);
            }
            if (isset($data['dataSaleOptOutPage']) && $data['dataSaleOptOutPage'] !== null) {
                $instance->dataSaleOptOutPage = DataSaleOptOutPage::fromArray($data['dataSaleOptOutPage']);
            }
            if (isset($data['privacyPolicy']) && $data['privacyPolicy'] !== null) {
                $instance->privacyPolicy = PrivacyPolicy::fromArray($data['privacyPolicy']);
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

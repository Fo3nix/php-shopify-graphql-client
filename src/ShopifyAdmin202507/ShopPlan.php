<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ShopPlan
{
    protected $displayName;
    protected $partnerDevelopment;
    protected $publicDisplayName;
    protected $shopifyPlus;

    
    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    
    /**
     * @return bool
     */
    public function getPartnerDevelopment()
    {
        return $this->partnerDevelopment;
    }

    
    /**
     * @return string
     */
    public function getPublicDisplayName()
    {
        return $this->publicDisplayName;
    }

    
    /**
     * @return bool
     */
    public function getShopifyPlus()
    {
        return $this->shopifyPlus;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['displayName']) && $data['displayName'] !== null) {
                $instance->displayName = $data['displayName'];
            }
            if (isset($data['partnerDevelopment']) && $data['partnerDevelopment'] !== null) {
                $instance->partnerDevelopment = $data['partnerDevelopment'];
            }
            if (isset($data['publicDisplayName']) && $data['publicDisplayName'] !== null) {
                $instance->publicDisplayName = $data['publicDisplayName'];
            }
            if (isset($data['shopifyPlus']) && $data['shopifyPlus'] !== null) {
                $instance->shopifyPlus = $data['shopifyPlus'];
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
            if ($this->displayName !== null) {
                $data['displayName'] = $this->displayName;
            }
            if ($this->partnerDevelopment !== null) {
                $data['partnerDevelopment'] = $this->partnerDevelopment;
            }
            if ($this->publicDisplayName !== null) {
                $data['publicDisplayName'] = $this->publicDisplayName;
            }
            if ($this->shopifyPlus !== null) {
                $data['shopifyPlus'] = $this->shopifyPlus;
            }
            return $data;
        }
}

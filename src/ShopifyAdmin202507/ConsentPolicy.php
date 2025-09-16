<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class ConsentPolicy
{
    protected $consentRequired;
    protected $countryCode;
    protected $dataSaleOptOutRequired;
    protected $id;
    protected $regionCode;
    protected $shopId;

    
    /**
     * @return bool
     */
    public function getConsentRequired()
    {
        return $this->consentRequired;
    }

    
    /**
     * @return PrivacyCountryCodeEnumObject
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    
    /**
     * @return bool
     */
    public function getDataSaleOptOutRequired()
    {
        return $this->dataSaleOptOutRequired;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return string
     */
    public function getRegionCode()
    {
        return $this->regionCode;
    }

    
    /**
     * @return string
     */
    public function getShopId()
    {
        return $this->shopId;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['consentRequired']) && $data['consentRequired'] !== null) {
                $instance->consentRequired = $data['consentRequired'];
            }
            if (isset($data['countryCode']) && $data['countryCode'] !== null) {
                $instance->countryCode = $data['countryCode'];
            }
            if (isset($data['dataSaleOptOutRequired']) && $data['dataSaleOptOutRequired'] !== null) {
                $instance->dataSaleOptOutRequired = $data['dataSaleOptOutRequired'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['regionCode']) && $data['regionCode'] !== null) {
                $instance->regionCode = $data['regionCode'];
            }
            if (isset($data['shopId']) && $data['shopId'] !== null) {
                $instance->shopId = $data['shopId'];
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
            if ($this->consentRequired !== null) {
                $data['consentRequired'] = $this->consentRequired;
            }
            if ($this->countryCode !== null) {
                $data['countryCode'] = $this->countryCode;
            }
            if ($this->dataSaleOptOutRequired !== null) {
                $data['dataSaleOptOutRequired'] = $this->dataSaleOptOutRequired;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->regionCode !== null) {
                $data['regionCode'] = $this->regionCode;
            }
            if ($this->shopId !== null) {
                $data['shopId'] = $this->shopId;
            }
            return $data;
        }
}

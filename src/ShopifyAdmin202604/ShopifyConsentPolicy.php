<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

/**
 * A consent policy describes the level of consent that the merchant requires from the user before actually
 * collecting and processing the data.
 */
class ShopifyConsentPolicy implements ShopifyNode
{
    protected $consentRequired;
    protected $countryCode;
    protected $dataSaleOptOutRequired;
    protected $id;
    protected $regionCode;
    protected $shopId;

    
    /**
     * Whether consent is required for the region.
     *
     * @return bool
     */
    public function getConsentRequired(): ?bool
    {
        return $this->consentRequired;
    }

    
    /**
     * The `ISO 3166` country code for which the policy applies.
     *
     * @return string A ShopifyPrivacyCountryCodeEnumObject value
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    
    /**
     * Whether data sale opt-out is required for the region.
     *
     * @return bool
     */
    public function getDataSaleOptOutRequired(): ?bool
    {
        return $this->dataSaleOptOutRequired;
    }

    
    /**
     * The global ID of the consent policy. IDs prefixed with `SD-` are system default policies.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The `ISO 3166` region code for which the policy applies.
     *
     * @return string
     */
    public function getRegionCode(): ?string
    {
        return $this->regionCode;
    }

    
    /**
     * The global ID of the shop that owns the policy.
     *
     * @return string
     */
    public function getShopId(): ?string
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

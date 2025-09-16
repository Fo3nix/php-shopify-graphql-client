<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsAddressBasic;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsMerchantCategoryCode;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FinancialKycShopOwner;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ShopifyPaymentsTaxIdentification;

class FinanceKycInformation
{
    protected $businessAddress;
    protected $businessType;
    protected $industry;
    protected $legalName;
    protected $shopOwner;
    protected $taxIdentification;

    
    /**
     * @return ShopifyPaymentsAddressBasic
     */
    public function getBusinessAddress()
    {
        return $this->businessAddress;
    }

    
    /**
     * @return ShopifyPaymentsBusinessTypeEnumObject
     */
    public function getBusinessType()
    {
        return $this->businessType;
    }

    
    /**
     * @return ShopifyPaymentsMerchantCategoryCode
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    
    /**
     * @return string
     */
    public function getLegalName()
    {
        return $this->legalName;
    }

    
    /**
     * @return FinancialKycShopOwner
     */
    public function getShopOwner()
    {
        return $this->shopOwner;
    }

    
    /**
     * @return ShopifyPaymentsTaxIdentification
     */
    public function getTaxIdentification()
    {
        return $this->taxIdentification;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['businessAddress']) && $data['businessAddress'] !== null) {
                $instance->businessAddress = ShopifyPaymentsAddressBasic::fromArray($data['businessAddress']);
            }
            if (isset($data['businessType']) && $data['businessType'] !== null) {
                $instance->businessType = $data['businessType'];
            }
            if (isset($data['industry']) && $data['industry'] !== null) {
                $instance->industry = ShopifyPaymentsMerchantCategoryCode::fromArray($data['industry']);
            }
            if (isset($data['legalName']) && $data['legalName'] !== null) {
                $instance->legalName = $data['legalName'];
            }
            if (isset($data['shopOwner']) && $data['shopOwner'] !== null) {
                $instance->shopOwner = FinancialKycShopOwner::fromArray($data['shopOwner']);
            }
            if (isset($data['taxIdentification']) && $data['taxIdentification'] !== null) {
                $instance->taxIdentification = ShopifyPaymentsTaxIdentification::fromArray($data['taxIdentification']);
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
            if ($this->businessAddress !== null) {
                $data['businessAddress'] = $this->businessAddress->asArray();
            }
            if ($this->businessType !== null) {
                $data['businessType'] = $this->businessType;
            }
            if ($this->industry !== null) {
                $data['industry'] = $this->industry->asArray();
            }
            if ($this->legalName !== null) {
                $data['legalName'] = $this->legalName;
            }
            if ($this->shopOwner !== null) {
                $data['shopOwner'] = $this->shopOwner->asArray();
            }
            if ($this->taxIdentification !== null) {
                $data['taxIdentification'] = $this->taxIdentification->asArray();
            }
            return $data;
        }
}

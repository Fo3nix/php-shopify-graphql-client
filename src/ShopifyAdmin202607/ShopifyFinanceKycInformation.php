<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyPaymentsAddressBasic;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyPaymentsMerchantCategoryCode;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFinancialKycShopOwner;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyPaymentsTaxIdentification;

class ShopifyFinanceKycInformation
{
    protected $businessAddress;
    protected $businessType;
    protected $industry;
    protected $legalName;
    protected $shopOwner;
    protected $taxIdentification;

    
    /**
     * @return ShopifyShopifyPaymentsAddressBasic
     */
    public function getBusinessAddress()
    {
        return $this->businessAddress;
    }

    
    /**
     * @return ShopifyShopifyPaymentsBusinessTypeEnumObject
     */
    public function getBusinessType()
    {
        return $this->businessType;
    }

    
    /**
     * @return ShopifyShopifyPaymentsMerchantCategoryCode
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
     * @return ShopifyFinancialKycShopOwner
     */
    public function getShopOwner()
    {
        return $this->shopOwner;
    }

    
    /**
     * @return ShopifyShopifyPaymentsTaxIdentification
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
                $instance->businessAddress = ShopifyShopifyPaymentsAddressBasic::fromArray($data['businessAddress']);
            }
            if (isset($data['businessType']) && $data['businessType'] !== null) {
                $instance->businessType = $data['businessType'];
            }
            if (isset($data['industry']) && $data['industry'] !== null) {
                $instance->industry = ShopifyShopifyPaymentsMerchantCategoryCode::fromArray($data['industry']);
            }
            if (isset($data['legalName']) && $data['legalName'] !== null) {
                $instance->legalName = $data['legalName'];
            }
            if (isset($data['shopOwner']) && $data['shopOwner'] !== null) {
                $instance->shopOwner = ShopifyFinancialKycShopOwner::fromArray($data['shopOwner']);
            }
            if (isset($data['taxIdentification']) && $data['taxIdentification'] !== null) {
                $instance->taxIdentification = ShopifyShopifyPaymentsTaxIdentification::fromArray($data['taxIdentification']);
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

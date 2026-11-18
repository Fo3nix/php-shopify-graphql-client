<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Shopify Payments account information shared with embedded finance applications.
 */
class ShopifyFinanceKycInformationQueryObject extends QueryObject
{
    const OBJECT_NAME = "FinanceKycInformation";

    /**
     * The legal entity business address.
     */
    public function selectBusinessAddress(?ShopifyFinanceKycInformationBusinessAddressArgumentsObject $argsObject = null): ShopifyShopifyPaymentsAddressBasicQueryObject
    {
        $object = new ShopifyShopifyPaymentsAddressBasicQueryObject("businessAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The legal entity business type.
     */
    public function selectBusinessType(): static
    {
        $this->selectField("businessType");

        return $this;
    }

    /**
     * Business industry.
     */
    public function selectIndustry(?ShopifyFinanceKycInformationIndustryArgumentsObject $argsObject = null): ShopifyShopifyPaymentsMerchantCategoryCodeQueryObject
    {
        $object = new ShopifyShopifyPaymentsMerchantCategoryCodeQueryObject("industry");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the business legal name.
     */
    public function selectLegalName(): static
    {
        $this->selectField("legalName");

        return $this;
    }

    /**
     * The shop owner information for financial KYC purposes.
     */
    public function selectShopOwner(?ShopifyFinanceKycInformationShopOwnerArgumentsObject $argsObject = null): ShopifyFinancialKycShopOwnerQueryObject
    {
        $object = new ShopifyFinancialKycShopOwnerQueryObject("shopOwner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Tax identification information.
     */
    public function selectTaxIdentification(?ShopifyFinanceKycInformationTaxIdentificationArgumentsObject $argsObject = null): ShopifyShopifyPaymentsTaxIdentificationQueryObject
    {
        $object = new ShopifyShopifyPaymentsTaxIdentificationQueryObject("taxIdentification");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

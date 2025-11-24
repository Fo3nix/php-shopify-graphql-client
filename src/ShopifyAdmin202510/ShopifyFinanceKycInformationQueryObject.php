<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFinanceKycInformationQueryObject extends QueryObject
{
    const OBJECT_NAME = "FinanceKycInformation";

    public function selectBusinessAddress(ShopifyFinanceKycInformationBusinessAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsAddressBasicQueryObject("businessAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBusinessType()
    {
        $this->selectField("businessType");

        return $this;
    }

    public function selectIndustry(ShopifyFinanceKycInformationIndustryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsMerchantCategoryCodeQueryObject("industry");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLegalName()
    {
        $this->selectField("legalName");

        return $this;
    }

    public function selectShopOwner(ShopifyFinanceKycInformationShopOwnerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFinancialKycShopOwnerQueryObject("shopOwner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxIdentification(ShopifyFinanceKycInformationTaxIdentificationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopifyPaymentsTaxIdentificationQueryObject("taxIdentification");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FinanceKycInformationQueryObject extends QueryObject
{
    const OBJECT_NAME = "FinanceKycInformation";

    public function selectBusinessAddress(FinanceKycInformationBusinessAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsAddressBasicQueryObject("businessAddress");
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

    public function selectIndustry(FinanceKycInformationIndustryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsMerchantCategoryCodeQueryObject("industry");
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

    public function selectShopOwner(FinanceKycInformationShopOwnerArgumentsObject $argsObject = null)
    {
        $object = new FinancialKycShopOwnerQueryObject("shopOwner");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxIdentification(FinanceKycInformationTaxIdentificationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPaymentsTaxIdentificationQueryObject("taxIdentification");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

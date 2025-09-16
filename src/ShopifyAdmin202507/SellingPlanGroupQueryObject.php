<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SellingPlanGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanGroup";

    public function selectAppId()
    {
        $this->selectField("appId");

        return $this;
    }

    public function selectAppliesToProduct()
    {
        $this->selectField("appliesToProduct");

        return $this;
    }

    public function selectAppliesToProductVariant()
    {
        $this->selectField("appliesToProductVariant");

        return $this;
    }

    public function selectAppliesToProductVariants()
    {
        $this->selectField("appliesToProductVariants");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMerchantCode()
    {
        $this->selectField("merchantCode");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectOptions()
    {
        $this->selectField("options");

        return $this;
    }

    public function selectPosition()
    {
        $this->selectField("position");

        return $this;
    }

    public function selectProductVariants(SellingPlanGroupProductVariantsArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantConnectionQueryObject("productVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductVariantsCount(SellingPlanGroupProductVariantsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("productVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProducts(SellingPlanGroupProductsArgumentsObject $argsObject = null)
    {
        $object = new ProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductsCount(SellingPlanGroupProductsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("productsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSellingPlans(SellingPlanGroupSellingPlansArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanConnectionQueryObject("sellingPlans");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSummary()
    {
        $this->selectField("summary");

        return $this;
    }

    public function selectTranslations(SellingPlanGroupTranslationsArgumentsObject $argsObject = null)
    {
        $object = new TranslationQueryObject("translations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

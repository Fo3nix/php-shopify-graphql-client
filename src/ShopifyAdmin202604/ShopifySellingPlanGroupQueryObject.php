<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifySellingPlanGroupQueryObject extends QueryObject
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

    public function selectProductVariants(ShopifySellingPlanGroupProductVariantsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantConnectionQueryObject("productVariants");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductVariantsCount(ShopifySellingPlanGroupProductVariantsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("productVariantsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProducts(ShopifySellingPlanGroupProductsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductConnectionQueryObject("products");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductsCount(ShopifySellingPlanGroupProductsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("productsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSellingPlans(ShopifySellingPlanGroupSellingPlansArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanConnectionQueryObject("sellingPlans");
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

    public function selectTranslations(ShopifySellingPlanGroupTranslationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslationQueryObject("translations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

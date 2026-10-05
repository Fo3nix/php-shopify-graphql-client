<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductVariantQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariant";

    public function selectAvailableForSale()
    {
        $this->selectField("availableForSale");

        return $this;
    }

    public function selectBarcode()
    {
        $this->selectField("barcode");

        return $this;
    }

    public function selectCompareAtPrice()
    {
        $this->selectField("compareAtPrice");

        return $this;
    }

    public function selectContextualPricing(ShopifyProductVariantContextualPricingArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantContextualPricingQueryObject("contextualPricing");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectDefaultCursor()
    {
        $this->selectField("defaultCursor");

        return $this;
    }

    public function selectDeliveryProfile(ShopifyProductVariantDeliveryProfileArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryProfileQueryObject("deliveryProfile");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDisplayName()
    {
        $this->selectField("displayName");

        return $this;
    }

    public function selectEvents(ShopifyProductVariantEventsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * @deprecated Use `media` instead.
     */
    public function selectImage(ShopifyProductVariantImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryItem(ShopifyProductVariantInventoryItemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryItemQueryObject("inventoryItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryPolicy()
    {
        $this->selectField("inventoryPolicy");

        return $this;
    }

    public function selectInventoryQuantity()
    {
        $this->selectField("inventoryQuantity");

        return $this;
    }

    public function selectLegacyResourceId()
    {
        $this->selectField("legacyResourceId");

        return $this;
    }

    public function selectMedia(ShopifyProductVariantMediaArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMediaConnectionQueryObject("media");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(ShopifyProductVariantMetafieldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(ShopifyProductVariantMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ShopifyProductVariantMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPosition()
    {
        $this->selectField("position");

        return $this;
    }

    /**
     * @deprecated Use `contextualPricing` instead.
     */
    public function selectPresentmentPrices(ShopifyProductVariantPresentmentPricesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantPricePairConnectionQueryObject("presentmentPrices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPrice()
    {
        $this->selectField("price");

        return $this;
    }

    public function selectProduct(ShopifyProductVariantProductArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductParents(ShopifyProductVariantProductParentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductConnectionQueryObject("productParents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductVariantComponents(ShopifyProductVariantProductVariantComponentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantComponentConnectionQueryObject("productVariantComponents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRequiresComponents()
    {
        $this->selectField("requiresComponents");

        return $this;
    }

    public function selectSelectedOptions(ShopifyProductVariantSelectedOptionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySelectedOptionQueryObject("selectedOptions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSellableOnlineQuantity()
    {
        $this->selectField("sellableOnlineQuantity");

        return $this;
    }

    /**
     * @deprecated Use `sellingPlanGroupsCount` instead.
     */
    public function selectSellingPlanGroupCount()
    {
        $this->selectField("sellingPlanGroupCount");

        return $this;
    }

    public function selectSellingPlanGroups(ShopifyProductVariantSellingPlanGroupsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanGroupConnectionQueryObject("sellingPlanGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSellingPlanGroupsCount(ShopifyProductVariantSellingPlanGroupsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("sellingPlanGroupsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShowUnitPrice()
    {
        $this->selectField("showUnitPrice");

        return $this;
    }

    public function selectSku()
    {
        $this->selectField("sku");

        return $this;
    }

    /**
     * @deprecated Use `id` instead.
     */
    public function selectStorefrontId()
    {
        $this->selectField("storefrontId");

        return $this;
    }

    /**
     * @deprecated This field should no longer be used in new integrations. This field will not be available in future API versions.
     */
    public function selectTaxCode()
    {
        $this->selectField("taxCode");

        return $this;
    }

    public function selectTaxable()
    {
        $this->selectField("taxable");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectTranslations(ShopifyProductVariantTranslationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTranslationQueryObject("translations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnitPrice(ShopifyProductVariantUnitPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("unitPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnitPriceMeasurement(ShopifyProductVariantUnitPriceMeasurementArgumentsObject $argsObject = null)
    {
        $object = new ShopifyUnitPriceMeasurementQueryObject("unitPriceMeasurement");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}

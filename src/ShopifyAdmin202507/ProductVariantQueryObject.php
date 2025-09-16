<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductVariantQueryObject extends QueryObject
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

    public function selectContextualPricing(ProductVariantContextualPricingArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantContextualPricingQueryObject("contextualPricing");
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

    public function selectDeliveryProfile(ProductVariantDeliveryProfileArgumentsObject $argsObject = null)
    {
        $object = new DeliveryProfileQueryObject("deliveryProfile");
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

    public function selectEvents(ProductVariantEventsArgumentsObject $argsObject = null)
    {
        $object = new EventConnectionQueryObject("events");
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

    public function selectImage(ProductVariantImageArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInventoryItem(ProductVariantInventoryItemArgumentsObject $argsObject = null)
    {
        $object = new InventoryItemQueryObject("inventoryItem");
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

    public function selectMedia(ProductVariantMediaArgumentsObject $argsObject = null)
    {
        $object = new MediaConnectionQueryObject("media");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(ProductVariantMetafieldArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(ProductVariantMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ProductVariantMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
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
    public function selectPresentmentPrices(ProductVariantPresentmentPricesArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantPricePairConnectionQueryObject("presentmentPrices");
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

    public function selectProduct(ProductVariantProductArgumentsObject $argsObject = null)
    {
        $object = new ProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductParents(ProductVariantProductParentsArgumentsObject $argsObject = null)
    {
        $object = new ProductConnectionQueryObject("productParents");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductVariantComponents(ProductVariantProductVariantComponentsArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantComponentConnectionQueryObject("productVariantComponents");
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

    public function selectSelectedOptions(ProductVariantSelectedOptionsArgumentsObject $argsObject = null)
    {
        $object = new SelectedOptionQueryObject("selectedOptions");
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

    public function selectSellingPlanGroups(ProductVariantSellingPlanGroupsArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanGroupConnectionQueryObject("sellingPlanGroups");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSellingPlanGroupsCount(ProductVariantSellingPlanGroupsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("sellingPlanGroupsCount");
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

    public function selectTranslations(ProductVariantTranslationsArgumentsObject $argsObject = null)
    {
        $object = new TranslationQueryObject("translations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnitPrice(ProductVariantUnitPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("unitPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUnitPriceMeasurement(ProductVariantUnitPriceMeasurementArgumentsObject $argsObject = null)
    {
        $object = new UnitPriceMeasurementQueryObject("unitPriceMeasurement");
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

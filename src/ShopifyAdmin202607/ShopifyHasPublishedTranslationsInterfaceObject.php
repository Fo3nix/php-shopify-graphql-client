<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Published translations associated with the resource.
 */
class ShopifyHasPublishedTranslationsInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "HasPublishedTranslations";

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyHasPublishedTranslationsTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    public function onArticle(): ShopifyArticleQueryObject
    {
        $object = new ShopifyArticleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onBlog(): ShopifyBlogQueryObject
    {
        $object = new ShopifyBlogQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollection(): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCookieBanner(): ShopifyCookieBannerQueryObject
    {
        $object = new ShopifyCookieBannerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onImage(): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onLink(): ShopifyLinkQueryObject
    {
        $object = new ShopifyLinkQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMediaImage(): ShopifyMediaImageQueryObject
    {
        $object = new ShopifyMediaImageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMenu(): ShopifyMenuQueryObject
    {
        $object = new ShopifyMenuQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMetafield(): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOnlineStoreTheme(): ShopifyOnlineStoreThemeQueryObject
    {
        $object = new ShopifyOnlineStoreThemeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPage(): ShopifyPageQueryObject
    {
        $object = new ShopifyPageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProduct(): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductOption(): ShopifyProductOptionQueryObject
    {
        $object = new ShopifyProductOptionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductOptionValue(): ShopifyProductOptionValueQueryObject
    {
        $object = new ShopifyProductOptionValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductVariant(): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSellingPlan(): ShopifySellingPlanQueryObject
    {
        $object = new ShopifySellingPlanQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSellingPlanGroup(): ShopifySellingPlanGroupQueryObject
    {
        $object = new ShopifySellingPlanGroupQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShop(): ShopifyShopQueryObject
    {
        $object = new ShopifyShopQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopPolicy(): ShopifyShopPolicyQueryObject
    {
        $object = new ShopifyShopPolicyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyHasPublishedTranslationsHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyHasPublishedTranslations
     */
    public static function fromArray(array $data): ShopifyHasPublishedTranslations
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate HasPublishedTranslations: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'Article':
                return ShopifyArticle::fromArray($data);
            case 'Blog':
                return ShopifyBlog::fromArray($data);
            case 'Collection':
                return ShopifyCollection::fromArray($data);
            case 'CookieBanner':
                return ShopifyCookieBanner::fromArray($data);
            case 'Image':
                return ShopifyImage::fromArray($data);
            case 'Link':
                return ShopifyLink::fromArray($data);
            case 'MediaImage':
                return ShopifyMediaImage::fromArray($data);
            case 'Menu':
                return ShopifyMenu::fromArray($data);
            case 'Metafield':
                return ShopifyMetafield::fromArray($data);
            case 'OnlineStoreTheme':
                return ShopifyOnlineStoreTheme::fromArray($data);
            case 'Page':
                return ShopifyPage::fromArray($data);
            case 'Product':
                return ShopifyProduct::fromArray($data);
            case 'ProductOption':
                return ShopifyProductOption::fromArray($data);
            case 'ProductOptionValue':
                return ShopifyProductOptionValue::fromArray($data);
            case 'ProductVariant':
                return ShopifyProductVariant::fromArray($data);
            case 'SellingPlan':
                return ShopifySellingPlan::fromArray($data);
            case 'SellingPlanGroup':
                return ShopifySellingPlanGroup::fromArray($data);
            case 'Shop':
                return ShopifyShop::fromArray($data);
            case 'ShopPolicy':
                return ShopifyShopPolicy::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate HasPublishedTranslations: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyHasPublishedTranslations $object
     * @return array
     */
    public static function toArray(ShopifyHasPublishedTranslations $object): array
    {
        if ($object instanceof ShopifyArticle) {
            return ['__typename' => 'Article'] + $object->asArray();
        }
        if ($object instanceof ShopifyBlog) {
            return ['__typename' => 'Blog'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollection) {
            return ['__typename' => 'Collection'] + $object->asArray();
        }
        if ($object instanceof ShopifyCookieBanner) {
            return ['__typename' => 'CookieBanner'] + $object->asArray();
        }
        if ($object instanceof ShopifyImage) {
            return ['__typename' => 'Image'] + $object->asArray();
        }
        if ($object instanceof ShopifyLink) {
            return ['__typename' => 'Link'] + $object->asArray();
        }
        if ($object instanceof ShopifyMediaImage) {
            return ['__typename' => 'MediaImage'] + $object->asArray();
        }
        if ($object instanceof ShopifyMenu) {
            return ['__typename' => 'Menu'] + $object->asArray();
        }
        if ($object instanceof ShopifyMetafield) {
            return ['__typename' => 'Metafield'] + $object->asArray();
        }
        if ($object instanceof ShopifyOnlineStoreTheme) {
            return ['__typename' => 'OnlineStoreTheme'] + $object->asArray();
        }
        if ($object instanceof ShopifyPage) {
            return ['__typename' => 'Page'] + $object->asArray();
        }
        if ($object instanceof ShopifyProduct) {
            return ['__typename' => 'Product'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductOption) {
            return ['__typename' => 'ProductOption'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductOptionValue) {
            return ['__typename' => 'ProductOptionValue'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductVariant) {
            return ['__typename' => 'ProductVariant'] + $object->asArray();
        }
        if ($object instanceof ShopifySellingPlan) {
            return ['__typename' => 'SellingPlan'] + $object->asArray();
        }
        if ($object instanceof ShopifySellingPlanGroup) {
            return ['__typename' => 'SellingPlanGroup'] + $object->asArray();
        }
        if ($object instanceof ShopifyShop) {
            return ['__typename' => 'Shop'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopPolicy) {
            return ['__typename' => 'ShopPolicy'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of HasPublishedTranslations');
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyNavigableHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyNavigable
     */
    public static function fromArray(array $data): ShopifyNavigable
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate Navigable: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'AbandonedCheckout':
                return ShopifyAbandonedCheckout::fromArray($data);
            case 'Article':
                return ShopifyArticle::fromArray($data);
            case 'Company':
                return ShopifyCompany::fromArray($data);
            case 'CompanyLocation':
                return ShopifyCompanyLocation::fromArray($data);
            case 'CustomerAccountAppExtensionPage':
                return ShopifyCustomerAccountAppExtensionPage::fromArray($data);
            case 'CustomerAccountNativePage':
                return ShopifyCustomerAccountNativePage::fromArray($data);
            case 'DraftOrder':
                return ShopifyDraftOrder::fromArray($data);
            case 'Page':
                return ShopifyPage::fromArray($data);
            case 'Product':
                return ShopifyProduct::fromArray($data);
            case 'ProductVariant':
                return ShopifyProductVariant::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate Navigable: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyNavigable $object
     * @return array
     */
    public static function toArray(ShopifyNavigable $object): array
    {
        if ($object instanceof ShopifyAbandonedCheckout) {
            return ['__typename' => 'AbandonedCheckout'] + $object->asArray();
        }
        if ($object instanceof ShopifyArticle) {
            return ['__typename' => 'Article'] + $object->asArray();
        }
        if ($object instanceof ShopifyCompany) {
            return ['__typename' => 'Company'] + $object->asArray();
        }
        if ($object instanceof ShopifyCompanyLocation) {
            return ['__typename' => 'CompanyLocation'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerAccountAppExtensionPage) {
            return ['__typename' => 'CustomerAccountAppExtensionPage'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerAccountNativePage) {
            return ['__typename' => 'CustomerAccountNativePage'] + $object->asArray();
        }
        if ($object instanceof ShopifyDraftOrder) {
            return ['__typename' => 'DraftOrder'] + $object->asArray();
        }
        if ($object instanceof ShopifyPage) {
            return ['__typename' => 'Page'] + $object->asArray();
        }
        if ($object instanceof ShopifyProduct) {
            return ['__typename' => 'Product'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductVariant) {
            return ['__typename' => 'ProductVariant'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of Navigable');
    }
}

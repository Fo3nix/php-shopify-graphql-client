<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyRolloutChangeHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyRolloutChange
     */
    public static function fromArray(array $data): ShopifyRolloutChange
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate RolloutChange: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'RolloutCatalogActivateChange':
                return ShopifyRolloutCatalogActivateChange::fromArray($data);
            case 'RolloutCatalogDraftChange':
                return ShopifyRolloutCatalogDraftChange::fromArray($data);
            case 'RolloutCheckoutAndAccountsConfigurationPublishChange':
                return ShopifyRolloutCheckoutAndAccountsConfigurationPublishChange::fromArray($data);
            case 'RolloutDiscountActivateChange':
                return ShopifyRolloutDiscountActivateChange::fromArray($data);
            case 'RolloutDiscountExpireChange':
                return ShopifyRolloutDiscountExpireChange::fromArray($data);
            case 'RolloutThemePublishChange':
                return ShopifyRolloutThemePublishChange::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate RolloutChange: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyRolloutChange $object
     * @return array
     */
    public static function toArray(ShopifyRolloutChange $object): array
    {
        if ($object instanceof ShopifyRolloutCatalogActivateChange) {
            return ['__typename' => 'RolloutCatalogActivateChange'] + $object->asArray();
        }
        if ($object instanceof ShopifyRolloutCatalogDraftChange) {
            return ['__typename' => 'RolloutCatalogDraftChange'] + $object->asArray();
        }
        if ($object instanceof ShopifyRolloutCheckoutAndAccountsConfigurationPublishChange) {
            return ['__typename' => 'RolloutCheckoutAndAccountsConfigurationPublishChange'] + $object->asArray();
        }
        if ($object instanceof ShopifyRolloutDiscountActivateChange) {
            return ['__typename' => 'RolloutDiscountActivateChange'] + $object->asArray();
        }
        if ($object instanceof ShopifyRolloutDiscountExpireChange) {
            return ['__typename' => 'RolloutDiscountExpireChange'] + $object->asArray();
        }
        if ($object instanceof ShopifyRolloutThemePublishChange) {
            return ['__typename' => 'RolloutThemePublishChange'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of RolloutChange');
    }
}

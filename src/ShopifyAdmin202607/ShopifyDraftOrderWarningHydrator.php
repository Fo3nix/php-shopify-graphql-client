<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyDraftOrderWarningHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyDraftOrderWarning
     */
    public static function fromArray(array $data): ShopifyDraftOrderWarning
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DraftOrderWarning: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'DraftOrderBundleAddedWarning':
                return ShopifyDraftOrderBundleAddedWarning::fromArray($data);
            case 'DraftOrderDiscountNotAppliedWarning':
                return ShopifyDraftOrderDiscountNotAppliedWarning::fromArray($data);
            case 'DraftOrderMarketRegionCountryCodeNotSupportedWarning':
                return ShopifyDraftOrderMarketRegionCountryCodeNotSupportedWarning::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DraftOrderWarning: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyDraftOrderWarning $object
     * @return array
     */
    public static function toArray(ShopifyDraftOrderWarning $object): array
    {
        if ($object instanceof ShopifyDraftOrderBundleAddedWarning) {
            return ['__typename' => 'DraftOrderBundleAddedWarning'] + $object->asArray();
        }
        if ($object instanceof ShopifyDraftOrderDiscountNotAppliedWarning) {
            return ['__typename' => 'DraftOrderDiscountNotAppliedWarning'] + $object->asArray();
        }
        if ($object instanceof ShopifyDraftOrderMarketRegionCountryCodeNotSupportedWarning) {
            return ['__typename' => 'DraftOrderMarketRegionCountryCodeNotSupportedWarning'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DraftOrderWarning');
    }
}

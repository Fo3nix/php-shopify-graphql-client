<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyDiscountShippingDestinationSelectionHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyDiscountCountries|ShopifyDiscountCountryAll
     */
    public static function fromArray(array $data): ShopifyDiscountCountries|ShopifyDiscountCountryAll
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate DiscountShippingDestinationSelection: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'DiscountCountries':
                return ShopifyDiscountCountries::fromArray($data);
            case 'DiscountCountryAll':
                return ShopifyDiscountCountryAll::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate DiscountShippingDestinationSelection: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyDiscountCountries|ShopifyDiscountCountryAll $object
     * @return array
     */
    public static function toArray(ShopifyDiscountCountries|ShopifyDiscountCountryAll $object): array
    {
        if ($object instanceof ShopifyDiscountCountries) {
            return ['__typename' => 'DiscountCountries'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountCountryAll) {
            return ['__typename' => 'DiscountCountryAll'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of DiscountShippingDestinationSelection');
    }
}

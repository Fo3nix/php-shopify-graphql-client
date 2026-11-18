<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyTaxonomyCategoryAttributeHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyTaxonomyAttribute|ShopifyTaxonomyChoiceListAttribute|ShopifyTaxonomyMeasurementAttribute
     */
    public static function fromArray(array $data): ShopifyTaxonomyAttribute|ShopifyTaxonomyChoiceListAttribute|ShopifyTaxonomyMeasurementAttribute
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate TaxonomyCategoryAttribute: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'TaxonomyAttribute':
                return ShopifyTaxonomyAttribute::fromArray($data);
            case 'TaxonomyChoiceListAttribute':
                return ShopifyTaxonomyChoiceListAttribute::fromArray($data);
            case 'TaxonomyMeasurementAttribute':
                return ShopifyTaxonomyMeasurementAttribute::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate TaxonomyCategoryAttribute: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyTaxonomyAttribute|ShopifyTaxonomyChoiceListAttribute|ShopifyTaxonomyMeasurementAttribute $object
     * @return array
     */
    public static function toArray(ShopifyTaxonomyAttribute|ShopifyTaxonomyChoiceListAttribute|ShopifyTaxonomyMeasurementAttribute $object): array
    {
        if ($object instanceof ShopifyTaxonomyAttribute) {
            return ['__typename' => 'TaxonomyAttribute'] + $object->asArray();
        }
        if ($object instanceof ShopifyTaxonomyChoiceListAttribute) {
            return ['__typename' => 'TaxonomyChoiceListAttribute'] + $object->asArray();
        }
        if ($object instanceof ShopifyTaxonomyMeasurementAttribute) {
            return ['__typename' => 'TaxonomyMeasurementAttribute'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of TaxonomyCategoryAttribute');
    }
}

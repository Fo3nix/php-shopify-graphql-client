<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyPublicationOperationHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyAddAllProductsOperation|ShopifyCatalogCsvOperation|ShopifyPublicationResourceOperation
     */
    public static function fromArray(array $data): ShopifyAddAllProductsOperation|ShopifyCatalogCsvOperation|ShopifyPublicationResourceOperation
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate PublicationOperation: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'AddAllProductsOperation':
                return ShopifyAddAllProductsOperation::fromArray($data);
            case 'CatalogCsvOperation':
                return ShopifyCatalogCsvOperation::fromArray($data);
            case 'PublicationResourceOperation':
                return ShopifyPublicationResourceOperation::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate PublicationOperation: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyAddAllProductsOperation|ShopifyCatalogCsvOperation|ShopifyPublicationResourceOperation $object
     * @return array
     */
    public static function toArray(ShopifyAddAllProductsOperation|ShopifyCatalogCsvOperation|ShopifyPublicationResourceOperation $object): array
    {
        if ($object instanceof ShopifyAddAllProductsOperation) {
            return ['__typename' => 'AddAllProductsOperation'] + $object->asArray();
        }
        if ($object instanceof ShopifyCatalogCsvOperation) {
            return ['__typename' => 'CatalogCsvOperation'] + $object->asArray();
        }
        if ($object instanceof ShopifyPublicationResourceOperation) {
            return ['__typename' => 'PublicationResourceOperation'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of PublicationOperation');
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyProductOperationHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyProductOperation
     */
    public static function fromArray(array $data): ShopifyProductOperation
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate ProductOperation: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'ProductBundleOperation':
                return ShopifyProductBundleOperation::fromArray($data);
            case 'ProductDeleteOperation':
                return ShopifyProductDeleteOperation::fromArray($data);
            case 'ProductDuplicateOperation':
                return ShopifyProductDuplicateOperation::fromArray($data);
            case 'ProductSetOperation':
                return ShopifyProductSetOperation::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate ProductOperation: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyProductOperation $object
     * @return array
     */
    public static function toArray(ShopifyProductOperation $object): array
    {
        if ($object instanceof ShopifyProductBundleOperation) {
            return ['__typename' => 'ProductBundleOperation'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductDeleteOperation) {
            return ['__typename' => 'ProductDeleteOperation'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductDuplicateOperation) {
            return ['__typename' => 'ProductDuplicateOperation'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductSetOperation) {
            return ['__typename' => 'ProductSetOperation'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of ProductOperation');
    }
}

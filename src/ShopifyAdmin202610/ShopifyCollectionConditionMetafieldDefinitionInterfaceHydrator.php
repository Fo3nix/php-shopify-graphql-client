<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyCollectionConditionMetafieldDefinitionInterfaceHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCollectionConditionMetafieldDefinitionInterface
     */
    public static function fromArray(array $data): ShopifyCollectionConditionMetafieldDefinitionInterface
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CollectionConditionMetafieldDefinitionInterface: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CollectionConditionBasicMetafieldDefinition':
                return ShopifyCollectionConditionBasicMetafieldDefinition::fromArray($data);
            case 'CollectionConditionMetaobjectMetafieldDefinition':
                return ShopifyCollectionConditionMetaobjectMetafieldDefinition::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CollectionConditionMetafieldDefinitionInterface: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCollectionConditionMetafieldDefinitionInterface $object
     * @return array
     */
    public static function toArray(ShopifyCollectionConditionMetafieldDefinitionInterface $object): array
    {
        if ($object instanceof ShopifyCollectionConditionBasicMetafieldDefinition) {
            return ['__typename' => 'CollectionConditionBasicMetafieldDefinition'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollectionConditionMetaobjectMetafieldDefinition) {
            return ['__typename' => 'CollectionConditionMetaobjectMetafieldDefinition'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CollectionConditionMetafieldDefinitionInterface');
    }
}

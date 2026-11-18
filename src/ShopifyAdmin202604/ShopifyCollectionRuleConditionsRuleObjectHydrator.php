<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyCollectionRuleConditionsRuleObjectHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCollectionRuleMetafieldCondition
     */
    public static function fromArray(array $data): ShopifyCollectionRuleMetafieldCondition
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CollectionRuleConditionsRuleObject: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CollectionRuleMetafieldCondition':
                return ShopifyCollectionRuleMetafieldCondition::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CollectionRuleConditionsRuleObject: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCollectionRuleMetafieldCondition $object
     * @return array
     */
    public static function toArray(ShopifyCollectionRuleMetafieldCondition $object): array
    {
        if ($object instanceof ShopifyCollectionRuleMetafieldCondition) {
            return ['__typename' => 'CollectionRuleMetafieldCondition'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CollectionRuleConditionsRuleObject');
    }
}

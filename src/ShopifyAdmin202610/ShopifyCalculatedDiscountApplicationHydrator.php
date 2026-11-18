<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyCalculatedDiscountApplicationHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCalculatedDiscountApplication
     */
    public static function fromArray(array $data): ShopifyCalculatedDiscountApplication
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CalculatedDiscountApplication: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CalculatedAutomaticDiscountApplication':
                return ShopifyCalculatedAutomaticDiscountApplication::fromArray($data);
            case 'CalculatedDiscountCodeApplication':
                return ShopifyCalculatedDiscountCodeApplication::fromArray($data);
            case 'CalculatedManualDiscountApplication':
                return ShopifyCalculatedManualDiscountApplication::fromArray($data);
            case 'CalculatedScriptDiscountApplication':
                return ShopifyCalculatedScriptDiscountApplication::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CalculatedDiscountApplication: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCalculatedDiscountApplication $object
     * @return array
     */
    public static function toArray(ShopifyCalculatedDiscountApplication $object): array
    {
        if ($object instanceof ShopifyCalculatedAutomaticDiscountApplication) {
            return ['__typename' => 'CalculatedAutomaticDiscountApplication'] + $object->asArray();
        }
        if ($object instanceof ShopifyCalculatedDiscountCodeApplication) {
            return ['__typename' => 'CalculatedDiscountCodeApplication'] + $object->asArray();
        }
        if ($object instanceof ShopifyCalculatedManualDiscountApplication) {
            return ['__typename' => 'CalculatedManualDiscountApplication'] + $object->asArray();
        }
        if ($object instanceof ShopifyCalculatedScriptDiscountApplication) {
            return ['__typename' => 'CalculatedScriptDiscountApplication'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CalculatedDiscountApplication');
    }
}

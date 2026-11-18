<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyLegacyInteroperabilityHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyLegacyInteroperability
     */
    public static function fromArray(array $data): ShopifyLegacyInteroperability
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate LegacyInteroperability: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'Customer':
                return ShopifyCustomer::fromArray($data);
            case 'DraftOrder':
                return ShopifyDraftOrder::fromArray($data);
            case 'Fulfillment':
                return ShopifyFulfillment::fromArray($data);
            case 'InventoryItem':
                return ShopifyInventoryItem::fromArray($data);
            case 'Location':
                return ShopifyLocation::fromArray($data);
            case 'MarketingEvent':
                return ShopifyMarketingEvent::fromArray($data);
            case 'Metafield':
                return ShopifyMetafield::fromArray($data);
            case 'Order':
                return ShopifyOrder::fromArray($data);
            case 'PriceRule':
                return ShopifyPriceRule::fromArray($data);
            case 'Product':
                return ShopifyProduct::fromArray($data);
            case 'ProductVariant':
                return ShopifyProductVariant::fromArray($data);
            case 'Refund':
                return ShopifyRefund::fromArray($data);
            case 'SavedSearch':
                return ShopifySavedSearch::fromArray($data);
            case 'ScriptTag':
                return ShopifyScriptTag::fromArray($data);
            case 'ShopifyPaymentsDispute':
                return ShopifyShopifyPaymentsDispute::fromArray($data);
            case 'ShopifyPaymentsPayout':
                return ShopifyShopifyPaymentsPayout::fromArray($data);
            case 'WebhookSubscription':
                return ShopifyWebhookSubscription::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate LegacyInteroperability: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyLegacyInteroperability $object
     * @return array
     */
    public static function toArray(ShopifyLegacyInteroperability $object): array
    {
        if ($object instanceof ShopifyCustomer) {
            return ['__typename' => 'Customer'] + $object->asArray();
        }
        if ($object instanceof ShopifyDraftOrder) {
            return ['__typename' => 'DraftOrder'] + $object->asArray();
        }
        if ($object instanceof ShopifyFulfillment) {
            return ['__typename' => 'Fulfillment'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryItem) {
            return ['__typename' => 'InventoryItem'] + $object->asArray();
        }
        if ($object instanceof ShopifyLocation) {
            return ['__typename' => 'Location'] + $object->asArray();
        }
        if ($object instanceof ShopifyMarketingEvent) {
            return ['__typename' => 'MarketingEvent'] + $object->asArray();
        }
        if ($object instanceof ShopifyMetafield) {
            return ['__typename' => 'Metafield'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrder) {
            return ['__typename' => 'Order'] + $object->asArray();
        }
        if ($object instanceof ShopifyPriceRule) {
            return ['__typename' => 'PriceRule'] + $object->asArray();
        }
        if ($object instanceof ShopifyProduct) {
            return ['__typename' => 'Product'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductVariant) {
            return ['__typename' => 'ProductVariant'] + $object->asArray();
        }
        if ($object instanceof ShopifyRefund) {
            return ['__typename' => 'Refund'] + $object->asArray();
        }
        if ($object instanceof ShopifySavedSearch) {
            return ['__typename' => 'SavedSearch'] + $object->asArray();
        }
        if ($object instanceof ShopifyScriptTag) {
            return ['__typename' => 'ScriptTag'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopifyPaymentsDispute) {
            return ['__typename' => 'ShopifyPaymentsDispute'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopifyPaymentsPayout) {
            return ['__typename' => 'ShopifyPaymentsPayout'] + $object->asArray();
        }
        if ($object instanceof ShopifyWebhookSubscription) {
            return ['__typename' => 'WebhookSubscription'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of LegacyInteroperability');
    }
}

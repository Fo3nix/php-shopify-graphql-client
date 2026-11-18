<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyMetafieldReferenceHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyArticle|ShopifyCollection|ShopifyCompany|ShopifyCustomer|ShopifyGenericFile|ShopifyMediaImage|ShopifyMetaobject|ShopifyModel3d|ShopifyOrder|ShopifyPage|ShopifyProduct|ShopifyProductVariant|ShopifyTaxonomyValue|ShopifyVideo
     */
    public static function fromArray(array $data): ShopifyArticle|ShopifyCollection|ShopifyCompany|ShopifyCustomer|ShopifyGenericFile|ShopifyMediaImage|ShopifyMetaobject|ShopifyModel3d|ShopifyOrder|ShopifyPage|ShopifyProduct|ShopifyProductVariant|ShopifyTaxonomyValue|ShopifyVideo
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate MetafieldReference: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'Article':
                return ShopifyArticle::fromArray($data);
            case 'Collection':
                return ShopifyCollection::fromArray($data);
            case 'Company':
                return ShopifyCompany::fromArray($data);
            case 'Customer':
                return ShopifyCustomer::fromArray($data);
            case 'GenericFile':
                return ShopifyGenericFile::fromArray($data);
            case 'MediaImage':
                return ShopifyMediaImage::fromArray($data);
            case 'Metaobject':
                return ShopifyMetaobject::fromArray($data);
            case 'Model3d':
                return ShopifyModel3d::fromArray($data);
            case 'Order':
                return ShopifyOrder::fromArray($data);
            case 'Page':
                return ShopifyPage::fromArray($data);
            case 'Product':
                return ShopifyProduct::fromArray($data);
            case 'ProductVariant':
                return ShopifyProductVariant::fromArray($data);
            case 'TaxonomyValue':
                return ShopifyTaxonomyValue::fromArray($data);
            case 'Video':
                return ShopifyVideo::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate MetafieldReference: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyArticle|ShopifyCollection|ShopifyCompany|ShopifyCustomer|ShopifyGenericFile|ShopifyMediaImage|ShopifyMetaobject|ShopifyModel3d|ShopifyOrder|ShopifyPage|ShopifyProduct|ShopifyProductVariant|ShopifyTaxonomyValue|ShopifyVideo $object
     * @return array
     */
    public static function toArray(ShopifyArticle|ShopifyCollection|ShopifyCompany|ShopifyCustomer|ShopifyGenericFile|ShopifyMediaImage|ShopifyMetaobject|ShopifyModel3d|ShopifyOrder|ShopifyPage|ShopifyProduct|ShopifyProductVariant|ShopifyTaxonomyValue|ShopifyVideo $object): array
    {
        if ($object instanceof ShopifyArticle) {
            return ['__typename' => 'Article'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollection) {
            return ['__typename' => 'Collection'] + $object->asArray();
        }
        if ($object instanceof ShopifyCompany) {
            return ['__typename' => 'Company'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomer) {
            return ['__typename' => 'Customer'] + $object->asArray();
        }
        if ($object instanceof ShopifyGenericFile) {
            return ['__typename' => 'GenericFile'] + $object->asArray();
        }
        if ($object instanceof ShopifyMediaImage) {
            return ['__typename' => 'MediaImage'] + $object->asArray();
        }
        if ($object instanceof ShopifyMetaobject) {
            return ['__typename' => 'Metaobject'] + $object->asArray();
        }
        if ($object instanceof ShopifyModel3d) {
            return ['__typename' => 'Model3d'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrder) {
            return ['__typename' => 'Order'] + $object->asArray();
        }
        if ($object instanceof ShopifyPage) {
            return ['__typename' => 'Page'] + $object->asArray();
        }
        if ($object instanceof ShopifyProduct) {
            return ['__typename' => 'Product'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductVariant) {
            return ['__typename' => 'ProductVariant'] + $object->asArray();
        }
        if ($object instanceof ShopifyTaxonomyValue) {
            return ['__typename' => 'TaxonomyValue'] + $object->asArray();
        }
        if ($object instanceof ShopifyVideo) {
            return ['__typename' => 'Video'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of MetafieldReference');
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\UnionObject;

/**
 * The resource referenced by the metafield value.
 */
class ShopifyMetafieldReferenceUnionObject extends UnionObject
{
    public function onShopifyArticle(): ShopifyArticleQueryObject
    {
        $object = new ShopifyArticleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCollection(): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCompany(): ShopifyCompanyQueryObject
    {
        $object = new ShopifyCompanyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCustomer(): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyGenericFile(): ShopifyGenericFileQueryObject
    {
        $object = new ShopifyGenericFileQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyMediaImage(): ShopifyMediaImageQueryObject
    {
        $object = new ShopifyMediaImageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyMetaobject(): ShopifyMetaobjectQueryObject
    {
        $object = new ShopifyMetaobjectQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyModel3d(): ShopifyModel3dQueryObject
    {
        $object = new ShopifyModel3dQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyOrder(): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPage(): ShopifyPageQueryObject
    {
        $object = new ShopifyPageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyProduct(): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyProductVariant(): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyTaxonomyValue(): ShopifyTaxonomyValueQueryObject
    {
        $object = new ShopifyTaxonomyValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyVideo(): ShopifyVideoQueryObject
    {
        $object = new ShopifyVideoQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}

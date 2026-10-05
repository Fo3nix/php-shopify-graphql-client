<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\UnionObject;

class ShopifyMetafieldReferenceUnionObject extends UnionObject
{
    public function onShopifyArticle()
    {
        $object = new ShopifyArticleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCollection()
    {
        $object = new ShopifyCollectionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCompany()
    {
        $object = new ShopifyCompanyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCustomer()
    {
        $object = new ShopifyCustomerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyGenericFile()
    {
        $object = new ShopifyGenericFileQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyMediaImage()
    {
        $object = new ShopifyMediaImageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyMetaobject()
    {
        $object = new ShopifyMetaobjectQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyModel3d()
    {
        $object = new ShopifyModel3dQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyOrder()
    {
        $object = new ShopifyOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPage()
    {
        $object = new ShopifyPageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyProduct()
    {
        $object = new ShopifyProductQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyProductVariant()
    {
        $object = new ShopifyProductVariantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyTaxonomyValue()
    {
        $object = new ShopifyTaxonomyValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyVideo()
    {
        $object = new ShopifyVideoQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}

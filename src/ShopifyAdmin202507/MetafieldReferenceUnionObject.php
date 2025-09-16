<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class MetafieldReferenceUnionObject extends UnionObject
{
    public function onCollection()
    {
        $object = new CollectionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCompany()
    {
        $object = new CompanyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomer()
    {
        $object = new CustomerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGenericFile()
    {
        $object = new GenericFileQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMediaImage()
    {
        $object = new MediaImageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMetaobject()
    {
        $object = new MetaobjectQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onModel3d()
    {
        $object = new Model3dQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrder()
    {
        $object = new OrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPage()
    {
        $object = new PageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProduct()
    {
        $object = new ProductQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductVariant()
    {
        $object = new ProductVariantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onTaxonomyValue()
    {
        $object = new TaxonomyValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onVideo()
    {
        $object = new VideoQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}

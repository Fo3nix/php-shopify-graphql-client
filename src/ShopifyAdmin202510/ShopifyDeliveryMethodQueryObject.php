<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryMethodQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryMethod";

    public function selectAdditionalInformation(ShopifyDeliveryMethodAdditionalInformationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryMethodAdditionalInformationQueryObject("additionalInformation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectBrandedPromise(ShopifyDeliveryMethodBrandedPromiseArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryBrandedPromiseQueryObject("brandedPromise");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectMaxDeliveryDateTime()
    {
        $this->selectField("maxDeliveryDateTime");

        return $this;
    }

    public function selectMethodType()
    {
        $this->selectField("methodType");

        return $this;
    }

    public function selectMinDeliveryDateTime()
    {
        $this->selectField("minDeliveryDateTime");

        return $this;
    }

    public function selectPresentedName()
    {
        $this->selectField("presentedName");

        return $this;
    }

    public function selectServiceCode()
    {
        $this->selectField("serviceCode");

        return $this;
    }

    public function selectSourceReference()
    {
        $this->selectField("sourceReference");

        return $this;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeliveryParticipantQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryParticipant";

    public function selectAdaptToNewServicesFlag()
    {
        $this->selectField("adaptToNewServicesFlag");

        return $this;
    }

    public function selectCarrierService(ShopifyDeliveryParticipantCarrierServiceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryCarrierServiceQueryObject("carrierService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFixedFee(ShopifyDeliveryParticipantFixedFeeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("fixedFee");
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

    public function selectParticipantServices(ShopifyDeliveryParticipantParticipantServicesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDeliveryParticipantServiceQueryObject("participantServices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPercentageOfRateFee()
    {
        $this->selectField("percentageOfRateFee");

        return $this;
    }
}

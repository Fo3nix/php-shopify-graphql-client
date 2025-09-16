<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryParticipantQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryParticipant";

    public function selectAdaptToNewServicesFlag()
    {
        $this->selectField("adaptToNewServicesFlag");

        return $this;
    }

    public function selectCarrierService(DeliveryParticipantCarrierServiceArgumentsObject $argsObject = null)
    {
        $object = new DeliveryCarrierServiceQueryObject("carrierService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFixedFee(DeliveryParticipantFixedFeeArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("fixedFee");
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

    public function selectParticipantServices(DeliveryParticipantParticipantServicesArgumentsObject $argsObject = null)
    {
        $object = new DeliveryParticipantServiceQueryObject("participantServices");
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

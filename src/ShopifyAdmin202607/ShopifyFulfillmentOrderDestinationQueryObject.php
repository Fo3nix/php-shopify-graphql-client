<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents the destination where the items should be sent upon fulfillment.
 */
class ShopifyFulfillmentOrderDestinationQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderDestination";

    /**
     * The first line of the address of the destination.
     */
    public function selectAddress1(): static
    {
        $this->selectField("address1");

        return $this;
    }

    /**
     * The second line of the address of the destination.
     */
    public function selectAddress2(): static
    {
        $this->selectField("address2");

        return $this;
    }

    /**
     * The city of the destination.
     */
    public function selectCity(): static
    {
        $this->selectField("city");

        return $this;
    }

    /**
     * The company of the destination.
     */
    public function selectCompany(): static
    {
        $this->selectField("company");

        return $this;
    }

    /**
     * The two-letter country code of the destination.
     */
    public function selectCountryCode(): static
    {
        $this->selectField("countryCode");

        return $this;
    }

    /**
     * The email of the customer at the destination.
     */
    public function selectEmail(): static
    {
        $this->selectField("email");

        return $this;
    }

    /**
     * The first name of the customer at the destination.
     */
    public function selectFirstName(): static
    {
        $this->selectField("firstName");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The last name of the customer at the destination.
     */
    public function selectLastName(): static
    {
        $this->selectField("lastName");

        return $this;
    }

    /**
     * The location designated for the pick-up of the fulfillment order.
     */
    public function selectLocation(?ShopifyFulfillmentOrderDestinationLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The phone number of the customer at the destination.
     */
    public function selectPhone(): static
    {
        $this->selectField("phone");

        return $this;
    }

    /**
     * The province of the destination.
     */
    public function selectProvince(): static
    {
        $this->selectField("province");

        return $this;
    }

    /**
     * The ZIP code of the destination.
     */
    public function selectZip(): static
    {
        $this->selectField("zip");

        return $this;
    }
}

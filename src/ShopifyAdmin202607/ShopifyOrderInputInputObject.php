<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for specifying the information to be updated on an order when using the orderUpdate mutation.
 */
class ShopifyOrderInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $email;
    protected $phone;
    protected $note;
    protected $tags;
    protected $shippingAddress;
    protected $customAttributes;
    protected $metafields;
    protected $localizedFields;
    protected $poNumber;

    /**
     * The ID of the order to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * A new customer email address for the order. Overwrites the existing email address.
     */
    public function setEmail($email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A new customer phone number for the order. Overwrites the existing phone number.
     */
    public function setPhone($phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * The new contents for the note associated with the order. Overwrites the existing note.
     */
    public function setNote($note): static
    {
        $this->note = $note;

        return $this;
    }

    /**
     * A new list of tags for the order. Overwrites the existing tags.
     */
    public function setTags(array $tags): static
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * The new shipping address for the order. Overwrites the existing shipping address.
     */
    public function setShippingAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject): static
    {
        $this->shippingAddress = $shopifyMailingAddressInputInputObject;

        return $this;
    }

    /**
     * A new list of custom attributes for the order. Overwrites the existing custom attributes.
     */
    public function setCustomAttributes(array $customAttributes): static
    {
        $this->customAttributes = $customAttributes;

        return $this;
    }

    /**
     * A list of new metafields to add to the existing metafields for the order.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }

    /**
     * A list of new [localized fields](https://shopify.dev/api/admin-graphql/latest/objects/localizedfield) to add to the existing list of localized fields for the order.
     */
    public function setLocalizedFields(array $localizedFields): static
    {
        $this->localizedFields = $localizedFields;

        return $this;
    }

    /**
     * The new purchase order number for the order.
     */
    public function setPoNumber($poNumber): static
    {
        $this->poNumber = $poNumber;

        return $this;
    }
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Policy that a merchant has configured for their store, such as their refund or privacy policy.
 */
class ShopifyShopPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPolicy";

    /**
     * The text of the policy. The maximum size is 512kb.
     */
    public function selectBody(): static
    {
        $this->selectField("body");

        return $this;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the policy was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

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
     * The translated title of the policy. For example, Refund Policy or Politique de remboursement.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyShopPolicyTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The shop policy type.
     */
    public function selectType(): static
    {
        $this->selectField("type");

        return $this;
    }

    /**
     * The date and time ([ISO 8601 format](http://en.wikipedia.org/wiki/ISO_8601)) when the policy was last modified.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * The public URL of the policy.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}

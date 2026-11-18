<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A link to direct users to.
 */
class ShopifyLinkQueryObject extends QueryObject
{
    const OBJECT_NAME = "Link";

    /**
     * A context-sensitive label for the link.
     */
    public function selectLabel(): static
    {
        $this->selectField("label");

        return $this;
    }

    /**
     * The published translations associated with the resource.
     */
    public function selectTranslations(ShopifyLinkTranslationsArgumentsObject $argsObject): ShopifyTranslationQueryObject
    {
        $object = new ShopifyTranslationQueryObject("translations");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The URL that the link visits.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}

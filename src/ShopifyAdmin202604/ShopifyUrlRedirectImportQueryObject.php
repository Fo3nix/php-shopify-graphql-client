<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A request to import a [`URLRedirect`](https://shopify.dev/api/admin-graphql/latest/objects/UrlRedirect) object
 * into the Online Store channel. Apps can use this to query the state of an `UrlRedirectImport` request.
 *
 * For more information, see [`url-redirect`](https://help.shopify.com/en/manual/online-store/menus-and-links/url-redirect)s.
 */
class ShopifyUrlRedirectImportQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectImport";

    /**
     * The number of rows in the file.
     */
    public function selectCount(): static
    {
        $this->selectField("count");

        return $this;
    }

    /**
     * The number of redirects created from the import.
     */
    public function selectCreatedCount(): static
    {
        $this->selectField("createdCount");

        return $this;
    }

    /**
     * The number of redirects that failed to be imported.
     */
    public function selectFailedCount(): static
    {
        $this->selectField("failedCount");

        return $this;
    }

    /**
     * Whether the import is finished.
     */
    public function selectFinished(): static
    {
        $this->selectField("finished");

        return $this;
    }

    /**
     * The date and time when the import finished.
     */
    public function selectFinishedAt(): static
    {
        $this->selectField("finishedAt");

        return $this;
    }

    /**
     * The ID of the `UrlRedirectImport` object.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * A list of up to three previews of the URL redirects to be imported.
     */
    public function selectPreviewRedirects(?ShopifyUrlRedirectImportPreviewRedirectsArgumentsObject $argsObject = null): ShopifyUrlRedirectImportPreviewQueryObject
    {
        $object = new ShopifyUrlRedirectImportPreviewQueryObject("previewRedirects");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of redirects updated during the import.
     */
    public function selectUpdatedCount(): static
    {
        $this->selectField("updatedCount");

        return $this;
    }
}

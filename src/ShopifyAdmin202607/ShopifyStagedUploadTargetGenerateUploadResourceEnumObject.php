<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\EnumObject;

/**
 * The resource type to receive.
 */
class ShopifyStagedUploadTargetGenerateUploadResourceEnumObject extends EnumObject
{
    /**
     * An image associated with a collection.
     *
     * For example, after uploading an image, you can use the
     * [collectionUpdate mutation](https://shopify.dev/api/admin-graphql/latest/mutations/collectionUpdate)
     * to add the image to a collection.
     */
    const COLLECTION_IMAGE = "COLLECTION_IMAGE";
    /**
     * Represents any file other than HTML.
     *
     * For example, after uploading the file, you can add the file to the
     * [Files page](https://shopify.com/admin/settings/files) in Shopify admin using the
     * [fileCreate mutation](https://shopify.dev/api/admin-graphql/latest/mutations/fileCreate).
     */
    const FILE = "FILE";
    /**
     * An image.
     *
     * For example, after uploading an image, you can add the image to a product using the
     * [productCreateMedia mutation](https://shopify.dev/api/admin-graphql/latest/mutations/productCreateMedia)
     * or to the [Files page](https://shopify.com/admin/settings/files) in Shopify admin using the
     * [fileCreate mutation](https://shopify.dev/api/admin-graphql/latest/mutations/fileCreate).
     */
    const IMAGE = "IMAGE";
    /**
     * A Shopify hosted 3d model.
     *
     * For example, after uploading the 3d model, you can add the 3d model to a product using the
     * [productCreateMedia mutation](https://shopify.dev/api/admin-graphql/latest/mutations/productCreateMedia).
     */
    const MODEL_3D = "MODEL_3D";
    /**
     * A Shopify-hosted video.
     *
     * For example, after uploading the video, you can add the video to a product using the
     * [productCreateMedia mutation](https://shopify.dev/api/admin-graphql/latest/mutations/productCreateMedia)
     * or to the [Files page](https://shopify.com/admin/settings/files) in Shopify admin using the
     * [fileCreate mutation](https://shopify.dev/api/admin-graphql/latest/mutations/fileCreate).
     */
    const VIDEO = "VIDEO";
    /**
     * Represents bulk mutation variables.
     *
     * For example, bulk mutation variables can be used for bulk operations using the
     * [bulkOperationRunMutation mutation](https://shopify.dev/api/admin-graphql/latest/mutations/bulkOperationRunMutation).
     */
    const BULK_MUTATION_VARIABLES = "BULK_MUTATION_VARIABLES";
    /**
     * Represents a label associated with a return.
     *
     * For example, once uploaded, this resource can be used to [create a
     * ReverseDelivery](https://shopify.dev/api/admin-graphql/unstable/mutations/reverseDeliveryCreateWithShipping).
     */
    const RETURN_LABEL = "RETURN_LABEL";
    /**
     * Represents a redirect CSV file.
     *
     * Example usage: This resource can be used for creating a
     * [UrlRedirectImport](https://shopify.dev/api/admin-graphql/2022-04/objects/UrlRedirectImport)
     * object for use in the
     * [urlRedirectImportCreate mutation](https://shopify.dev/api/admin-graphql/latest/mutations/urlRedirectImportCreate).
     */
    const URL_REDIRECT_IMPORT = "URL_REDIRECT_IMPORT";
    /**
     * Represents a file associated with a dispute.
     *
     * For example, after uploading the file, you can add the file to a dispute using the
     * [disputeEvidenceUpdate mutation](https://shopify.dev/api/admin-graphql/latest/mutations/disputeEvidenceUpdate).
     */
    const DISPUTE_FILE_UPLOAD = "DISPUTE_FILE_UPLOAD";
}

<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\MutationObject;

/**
 * The schema's entry point for all mutation operations.
 */
class ShopifyRootMutationQueryObject extends MutationObject
{
    const OBJECT_NAME = "";

    /**
     * Updates the email state value for an abandonment.
     *
     * @deprecated Use `abandonmentUpdateActivitiesDeliveryStatuses` instead.
     */
    public function selectAbandonmentEmailStateUpdate(ShopifyRootMutationAbandonmentEmailStateUpdateArgumentsObject $argsObject): ShopifyAbandonmentEmailStateUpdatePayloadQueryObject
    {
        $object = new ShopifyAbandonmentEmailStateUpdatePayloadQueryObject("abandonmentEmailStateUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates the marketing activities delivery statuses for an abandonment.
     */
    public function selectAbandonmentUpdateActivitiesDeliveryStatuses(ShopifyRootMutationAbandonmentUpdateActivitiesDeliveryStatusesArgumentsObject $argsObject): ShopifyAbandonmentUpdateActivitiesDeliveryStatusesPayloadQueryObject
    {
        $object = new ShopifyAbandonmentUpdateActivitiesDeliveryStatusesPayloadQueryObject("abandonmentUpdateActivitiesDeliveryStatuses");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates an [analytics annotation](https://shopify.dev/docs/api/admin-graphql/latest/objects/AnalyticsAnnotation)
     * on the shop. Annotations are notable events that can be overlaid on analytics charts to provide context for
     * changes in metrics. The annotation is attributed to the app that calls the mutation.
     *
     * Shopify limits how many annotations an app can have for a shop. If the app reaches this limit, then the
     * mutation returns a `LIMIT_REACHED` error. Delete existing annotations or contact Shopify Support to request
     * a higher limit.
     *
     * Use [`analyticsAnnotationUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsAnnotationUpdate)
     * to modify existing annotations or
     * [`analyticsAnnotationDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsAnnotationDelete)
     * to remove them.
     *
     * The `type` field must specify a supported type for app-created annotations. Refer to the list of
     * [supported types](https://shopify.dev/docs/api/shopifyql/latest/syntax/annotate#annotation-categories-and-types).
     */
    public function selectAnalyticsAnnotationCreate(ShopifyRootMutationAnalyticsAnnotationCreateArgumentsObject $argsObject): ShopifyAnalyticsAnnotationCreatePayloadQueryObject
    {
        $object = new ShopifyAnalyticsAnnotationCreatePayloadQueryObject("analyticsAnnotationCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes an [analytics annotation](https://shopify.dev/docs/api/admin-graphql/latest/objects/AnalyticsAnnotation).
     * An app can delete only annotations that it created. If an app attempts to delete an annotation that it
     * didn't create, then the mutation returns a `NOT_FOUND` error.
     * Use [`analyticsAnnotationCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsAnnotationCreate)
     * to create a new annotation, or
     * [`analyticsAnnotationUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsAnnotationUpdate)
     * to modify existing ones.
     */
    public function selectAnalyticsAnnotationDelete(ShopifyRootMutationAnalyticsAnnotationDeleteArgumentsObject $argsObject): ShopifyAnalyticsAnnotationDeletePayloadQueryObject
    {
        $object = new ShopifyAnalyticsAnnotationDeletePayloadQueryObject("analyticsAnnotationDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates an existing [analytics annotation](https://shopify.dev/docs/api/admin-graphql/latest/objects/AnalyticsAnnotation).
     * Only the fields provided in the `input` argument are modified; omitted fields remain unchanged.
     * Setting `endedAt` to `null` makes the annotation open-ended.
     *
     * An app can update only annotations that it created. If an app attempts to update an annotation that it
     * didn't create, then the mutation returns a `NOT_FOUND` error.
     *
     * Use [`analyticsAnnotationCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsAnnotationCreate)
     * to create a new annotation, or
     * [`analyticsAnnotationDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsAnnotationDelete)
     * to remove it.
     *
     * If provided, the `type` field must specify a supported type for app-created annotations. Refer to the list of
     * [supported types](https://shopify.dev/docs/api/shopifyql/latest/syntax/annotate#annotation-categories-and-types).
     */
    public function selectAnalyticsAnnotationUpdate(ShopifyRootMutationAnalyticsAnnotationUpdateArgumentsObject $argsObject): ShopifyAnalyticsAnnotationUpdatePayloadQueryObject
    {
        $object = new ShopifyAnalyticsAnnotationUpdatePayloadQueryObject("analyticsAnnotationUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates an [analytics target](https://shopify.dev/docs/api/admin-graphql/latest/objects/AnalyticsTarget) that
     * defines a merchant's goal for a specific metric over a date range. For example, a merchant
     * can set a target of $50,000 in total sales for a quarter, or 1,000 orders in a month.
     *
     * Provide the target attributes through the `input` argument. The target's currency is set to
     * the shop's currency. A target is uniquely identified by the combination of `metric`, `startDate`,
     * `endDate`, and `filters` — attempting to create a duplicate returns a user error.
     *
     * Use [`analyticsTargetUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsTargetUpdate)
     * to modify an existing target, or
     * [`analyticsTargetsDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsTargetsDelete)
     * to remove targets.
     */
    public function selectAnalyticsTargetCreate(ShopifyRootMutationAnalyticsTargetCreateArgumentsObject $argsObject): ShopifyAnalyticsTargetCreatePayloadQueryObject
    {
        $object = new ShopifyAnalyticsTargetCreatePayloadQueryObject("analyticsTargetCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates an existing [analytics target](https://shopify.dev/docs/api/admin-graphql/latest/objects/AnalyticsTarget).
     * Only the fields provided in the `input` argument are modified; omitted fields remain unchanged.
     * Setting a nullable field to `null` clears its value.
     *
     * Use [`analyticsTargetCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsTargetCreate)
     * to create a new target, or
     * [`analyticsTargetsDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsTargetsDelete)
     * to remove targets.
     */
    public function selectAnalyticsTargetUpdate(ShopifyRootMutationAnalyticsTargetUpdateArgumentsObject $argsObject): ShopifyAnalyticsTargetUpdatePayloadQueryObject
    {
        $object = new ShopifyAnalyticsTargetUpdatePayloadQueryObject("analyticsTargetUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes one or more [analytics targets](https://shopify.dev/docs/api/admin-graphql/latest/objects/AnalyticsTarget).
     * Accepts a list of target IDs and returns the IDs that were successfully deleted. If any ID
     * is not found, a user error is returned for that ID while the remaining valid targets are still deleted.
     *
     * Use [`analyticsTargetCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsTargetCreate)
     * to create new targets, or
     * [`analyticsTargetUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/analyticsTargetUpdate)
     * to modify existing ones.
     */
    public function selectAnalyticsTargetsDelete(ShopifyRootMutationAnalyticsTargetsDeleteArgumentsObject $argsObject): ShopifyAnalyticsTargetsDeletePayloadQueryObject
    {
        $object = new ShopifyAnalyticsTargetsDeletePayloadQueryObject("analyticsTargetsDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a one-time charge for app features or services that don't require recurring billing. This mutation is ideal for apps that sell individual features, premium content, or services on a per-use basis rather than subscription models.
     *
     * For example, a design app might charge merchants once for premium templates, or a marketing app could bill for individual campaign setups without ongoing monthly fees.
     *
     * Use the `AppPurchaseOneTimeCreate` mutation to:
     * - Charge for premium features or content purchases
     * - Bill for professional services or setup fees
     * - Generate revenue from one-time digital product sales
     *
     * The mutation returns a confirmation URL that merchants must visit to approve the charge. Test and development stores are not charged, allowing safe testing of billing flows.
     *
     * Explore one-time billing options on the [app purchases page](https://shopify.dev/docs/apps/launch/billing/support-one-time-purchases).
     */
    public function selectAppPurchaseOneTimeCreate(ShopifyRootMutationAppPurchaseOneTimeCreateArgumentsObject $argsObject): ShopifyAppPurchaseOneTimeCreatePayloadQueryObject
    {
        $object = new ShopifyAppPurchaseOneTimeCreatePayloadQueryObject("appPurchaseOneTimeCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Revokes previously granted access scopes from an app installation, allowing merchants to reduce an app's permissions without completely uninstalling it. This provides granular control over what data and functionality apps can access.
     *
     * For example, if a merchant no longer wants an app to access customer information but still wants to use its inventory features, they can revoke the customer-related scopes while keeping inventory permissions active.
     *
     * Use the `appRevokeAccessScopes` mutation to:
     * - Remove specific permissions from installed apps
     * - Maintain app functionality while minimizing data exposure
     *
     * The mutation returns details about which scopes were successfully revoked and any errors that prevented certain permissions from being removed.
     *
     * Learn more about [managing app permissions](https://shopify.dev/docs/apps/build/authentication-authorization/app-installation/manage-access-scopes#revoke-granted-scopes-dynamically).
     */
    public function selectAppRevokeAccessScopes(ShopifyRootMutationAppRevokeAccessScopesArgumentsObject $argsObject): ShopifyAppRevokeAccessScopesPayloadQueryObject
    {
        $object = new ShopifyAppRevokeAccessScopesPayloadQueryObject("appRevokeAccessScopes");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Cancels an active app subscription, stopping future billing cycles. The cancellation behavior depends on the `replacementBehavior` setting - it can either disable auto-renewal (allowing the subscription to continue until the end of the current billing period) or immediately cancel with prorated refunds.
     *
     * When a merchant decides to discontinue using subscription features, this mutation provides a clean cancellation workflow that respects billing periods and merchant expectations.
     *
     * Use the `AppSubscriptionCancel` mutation to:
     * - Process merchant-initiated subscription cancellations
     * - Terminate subscriptions due to policy violations or account issues
     * - Handle subscription cancellations during app uninstallation workflows
     *
     * The cancellation timing and merchant access depends on the `replacementBehavior` setting and the app's specific implementation of subscription management.
     *
     * For subscription lifecycle management and cancellation best practices, consult the [subscription management guide](https://shopify.dev/docs/apps/launch/billing/subscription-billing).
     */
    public function selectAppSubscriptionCancel(ShopifyRootMutationAppSubscriptionCancelArgumentsObject $argsObject): ShopifyAppSubscriptionCancelPayloadQueryObject
    {
        $object = new ShopifyAppSubscriptionCancelPayloadQueryObject("appSubscriptionCancel");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a recurring or usage-based [`AppSubscription`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppSubscription) that charges merchants for app features and services. The subscription includes one or more [`AppSubscriptionLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppSubscriptionLineItem) objects that define the pricing structure, billing intervals, and optional [`AppSubscriptionDiscount`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppSubscriptionDiscount) values.
     *
     * Returns a [confirmation URL](https://shopify.dev/docs/api/admin-graphql/latest/mutations/appSubscriptionCreate#returns-confirmationUrl) where the merchant approves or declines the charges. After approval, the subscription becomes active and billing begins after any trial period expires. You can specify [`AppSubscriptionReplacementBehavior`](https://shopify.dev/docs/api/admin-graphql/latest/enums/AppSubscriptionReplacementBehavior) to control how this subscription interacts with existing active subscriptions.
     *
     * Learn more about [creating app subscriptions](https://shopify.dev/docs/apps/launch/billing/subscription-billing/create-time-based-subscriptions).
     */
    public function selectAppSubscriptionCreate(ShopifyRootMutationAppSubscriptionCreateArgumentsObject $argsObject): ShopifyAppSubscriptionCreatePayloadQueryObject
    {
        $object = new ShopifyAppSubscriptionCreatePayloadQueryObject("appSubscriptionCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates the capped amount on usage-based billing for an [`AppSubscriptionLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppSubscriptionLineItem). Enables you to modify the maximum charge limit that prevents merchants from exceeding a specified threshold during their billing period.
     *
     * The mutation returns a [confirmation URL](https://shopify.dev/docs/api/admin-graphql/latest/mutations/appSubscriptionCreate#returns-confirmationUrl) where the merchant must approve the new pricing limit before it takes effect. Use this when adjusting usage limits based on merchant needs or changing pricing models.
     *
     * Learn more about [updating the maximum charge for a subscription](https://shopify.dev/docs/apps/launch/billing/subscription-billing/update-max-charge).
     */
    public function selectAppSubscriptionLineItemUpdate(ShopifyRootMutationAppSubscriptionLineItemUpdateArgumentsObject $argsObject): ShopifyAppSubscriptionLineItemUpdatePayloadQueryObject
    {
        $object = new ShopifyAppSubscriptionLineItemUpdatePayloadQueryObject("appSubscriptionLineItemUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Extends the trial period for an existing app subscription. Trial extensions give merchants additional time to use the app before committing to paid billing.
     *
     * Requires the subscription ID and the number of days to extend (between one and 1000). The extension modifies the existing trial end date, allowing continued access to subscription features without immediate billing. Returns the updated [`AppSubscription`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppSubscription).
     *
     * Learn more about [offering free trials](https://shopify.dev/docs/apps/launch/billing/offer-free-trials).
     */
    public function selectAppSubscriptionTrialExtend(ShopifyRootMutationAppSubscriptionTrialExtendArgumentsObject $argsObject): ShopifyAppSubscriptionTrialExtendPayloadQueryObject
    {
        $object = new ShopifyAppSubscriptionTrialExtendPayloadQueryObject("appSubscriptionTrialExtend");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Uninstalls an [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) from a shop. Apps use this mutation to uninstall themselves programmatically, removing their [`AppInstallation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppInstallation) from the merchant's store.
     *
     * When an app uninstalls, Shopify automatically performs cleanup tasks, such as deleting [`WebhookSubscription`](https://shopify.dev/docs/api/admin-graphql/latest/objects/WebhookSubscription) objects and [admin links](https://shopify.dev/docs/apps/build/admin/admin-links) associated with the app.
     *
     * Learn more about [app lifecycle management](https://shopify.dev/docs/apps/build/authentication-authorization/app-installation/uninstall-app-api-request).
     *
     * > Caution:
     * > This action is irreversible. You can't restore an uninstalled app's configuration or data. Before you uninstall an app, make sure that you no longer need to make API calls for the store in which the app has been installed.
     */
    public function selectAppUninstall(?ShopifyRootMutationAppUninstallArgumentsObject $argsObject = null): ShopifyAppUninstallPayloadQueryObject
    {
        $object = new ShopifyAppUninstallPayloadQueryObject("appUninstall");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a usage charge for an app subscription with usage-based pricing. The charge counts toward the capped amount limit set when creating the subscription.
     *
     * Usage records track consumption of app features or services on a per-use basis. You provide the charge amount, a description of what you consumed, and the subscription line item ID. The optional [`idempotencyKey`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AppUsageRecord#field-idempotencyKey) parameter prevents duplicate charges if you send the same request multiple times.
     *
     * If the new charge would cause total usage charges in the current billing interval to exceed the capped amount, then the mutation returns an error.
     *
     * Learn more about [creating usage-based subscriptions](https://shopify.dev/docs/apps/launch/billing/subscription-billing/create-usage-based-subscriptions).
     */
    public function selectAppUsageRecordCreate(ShopifyRootMutationAppUsageRecordCreateArgumentsObject $argsObject): ShopifyAppUsageRecordCreatePayloadQueryObject
    {
        $object = new ShopifyAppUsageRecordCreatePayloadQueryObject("appUsageRecordCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates an [`Article`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Article). Articles are content pieces that include a title, body text, and author information.
     *
     * You can publish the article immediately or schedule it with a specific publish date. You can customize the article's URL handle, apply custom templates for rendering, and add optional fields like [tags](https://shopify.dev/docs/api/admin-graphql/latest/mutations/articleCreate#arguments-article.fields.tags), an [image](https://shopify.dev/docs/api/admin-graphql/latest/mutations/articleCreate#arguments-article.fields.image), and [`Metafield`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metafield) objects.
     *
     * The mutation validates article content and ensures proper blog association. Error handling provides specific feedback for content requirements.
     */
    public function selectArticleCreate(ShopifyRootMutationArticleCreateArgumentsObject $argsObject): ShopifyArticleCreatePayloadQueryObject
    {
        $object = new ShopifyArticleCreatePayloadQueryObject("articleCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Permanently deletes a blog article from a shop's blog. This mutation removes the article and all associated metadata.
     *
     * For example, when outdated product information or seasonal content needs removal, merchants can use this mutation to clean up their blog.
     *
     * Use the `articleDelete` mutation to:
     * - Remove outdated or incorrect blog content
     * - Clean up seasonal or time-sensitive articles
     * - Maintain blog organization
     *
     * The deletion is permanent and returns the deleted article's ID for confirmation.
     */
    public function selectArticleDelete(ShopifyRootMutationArticleDeleteArgumentsObject $argsObject): ShopifyArticleDeletePayloadQueryObject
    {
        $object = new ShopifyArticleDeletePayloadQueryObject("articleDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates an existing [`Article`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Article). You can modify the article's content, metadata, publication status, and associated properties like author information and tags.
     *
     * If you update the [`handle`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/articleUpdate#arguments-article.fields.handle), then you can optionally create a redirect from the old URL to the new one by setting [`redirectNewHandle`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/articleUpdate#arguments-article.fields.redirectNewHandle) to `true`.
     */
    public function selectArticleUpdate(ShopifyRootMutationArticleUpdateArgumentsObject $argsObject): ShopifyArticleUpdatePayloadQueryObject
    {
        $object = new ShopifyArticleUpdatePayloadQueryObject("articleUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Update the backup region that is used when we have no better signal of what region a buyer is in.
     */
    public function selectBackupRegionUpdate(?ShopifyRootMutationBackupRegionUpdateArgumentsObject $argsObject = null): ShopifyBackupRegionUpdatePayloadQueryObject
    {
        $object = new ShopifyBackupRegionUpdatePayloadQueryObject("backupRegionUpdate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a new blog within a shop, establishing a container for organizing articles.
     *
     * For example, a fitness equipment retailer launching a wellness blog would use this mutation to create the blog, enabling them to publish workout guides and nutrition tips.
     *
     * Use the `blogCreate` mutation to:
     * - Launch new content marketing initiatives
     * - Create separate blogs for different content themes
     * - Establish spaces for article organization
     *
     * The mutation validates blog settings and establishes the structure for article publishing.
     */
    public function selectBlogCreate(ShopifyRootMutationBlogCreateArgumentsObject $argsObject): ShopifyBlogCreatePayloadQueryObject
    {
        $object = new ShopifyBlogCreatePayloadQueryObject("blogCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Permanently deletes a blog from a shop. This mutation removes the blog container and its organizational structure.
     *
     * For example, when consolidating multiple seasonal blogs into a single year-round content strategy, merchants can use this mutation to remove unused blogs.
     *
     * Use the `blogDelete` mutation to:
     * - Remove unused or outdated blogs
     * - Consolidate content organization
     * - Clean up blog structure
     *
     * The deletion is permanent and returns the deleted blog's ID for confirmation.
     */
    public function selectBlogDelete(ShopifyRootMutationBlogDeleteArgumentsObject $argsObject): ShopifyBlogDeletePayloadQueryObject
    {
        $object = new ShopifyBlogDeletePayloadQueryObject("blogDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates an existing blog's configuration and settings. This mutation allows merchants to modify blog properties to keep their content strategy current.
     *
     * For example, a merchant might update their blog's title from "Company News" to "Sustainability Stories" when shifting their content focus, or modify the handle to improve URL structure.
     *
     * Use the `blogUpdate` mutation to:
     * - Change blog titles for rebranding
     * - Modify blog handles for better URLs
     * - Adjust comment settings and moderation preferences
     *
     * The mutation returns the updated blog with any validation errors.
     */
    public function selectBlogUpdate(ShopifyRootMutationBlogUpdateArgumentsObject $argsObject): ShopifyBlogUpdatePayloadQueryObject
    {
        $object = new ShopifyBlogUpdatePayloadQueryObject("blogUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Starts the cancelation process of a running bulk operation.
     *
     * There may be a short delay from when a cancelation starts until the operation is actually canceled.
     */
    public function selectBulkOperationCancel(ShopifyRootMutationBulkOperationCancelArgumentsObject $argsObject): ShopifyBulkOperationCancelPayloadQueryObject
    {
        $object = new ShopifyBulkOperationCancelPayloadQueryObject("bulkOperationCancel");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates and runs a [bulk operation](https://shopify.dev/docs/api/admin-graphql/latest/objects/BulkOperation) to import data asynchronously. This mutation executes a specified GraphQL mutation multiple times using input data from a [JSONL](http://jsonlines.org/) file that you've uploaded to Shopify.
     *
     * The operation processes each line in your JSONL file as a separate mutation execution. The operation delivers results in a JSONL file when it completes. Bulk mutation operations and [`bulkOperationRunQuery`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/bulkoperationrunquery) operations can run at the same time per shop. The number of concurrent operations that an app can run depends on the API version. For the applicable concurrency limits, refer to the [bulk operations guide](https://shopify.dev/docs/api/usage/bulk-operations/imports).
     *
     * Learn more about [bulk importing data](https://shopify.dev/docs/api/usage/bulk-operations/imports).
     */
    public function selectBulkOperationRunMutation(ShopifyRootMutationBulkOperationRunMutationArgumentsObject $argsObject): ShopifyBulkOperationRunMutationPayloadQueryObject
    {
        $object = new ShopifyBulkOperationRunMutationPayloadQueryObject("bulkOperationRunMutation");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates and runs a [bulk operation](https://shopify.dev/docs/api/admin-graphql/latest/objects/BulkOperation) to fetch data asynchronously. The operation processes your GraphQL query in the background and returns results in a [JSONL](http://jsonlines.org/) file when complete.
     *
     * Bulk query and bulk mutation operations can run at the same time per shop. The number of concurrent operations that an app can run depends on the API version. For the applicable concurrency limits, refer to the [bulk operations guide](https://shopify.dev/docs/api/usage/bulk-operations/queries). The query must include at least one connection field and supports up to five connections with a maximum nesting depth of two levels.
     *
     * > Note: Results remain available for seven days after completion.
     *
     * For more information, see the [bulk operations guide](https://shopify.dev/docs/api/usage/bulk-operations/queries).
     */
    public function selectBulkOperationRunQuery(ShopifyRootMutationBulkOperationRunQueryArgumentsObject $argsObject): ShopifyBulkOperationRunQueryPayloadQueryObject
    {
        $object = new ShopifyBulkOperationRunQueryPayloadQueryObject("bulkOperationRunQuery");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates product feedback for multiple products.
     */
    public function selectBulkProductResourceFeedbackCreate(ShopifyRootMutationBulkProductResourceFeedbackCreateArgumentsObject $argsObject): ShopifyBulkProductResourceFeedbackCreatePayloadQueryObject
    {
        $object = new ShopifyBulkProductResourceFeedbackCreatePayloadQueryObject("bulkProductResourceFeedbackCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a carrier service that provides real-time shipping rates to Shopify. Carrier services provide real-time shipping rates from external providers like FedEx, UPS, or custom shipping solutions. The carrier service connects to your external shipping rate calculation system through a callback URL.
     *
     * When customers reach checkout, Shopify sends order details to your callback URL and displays the returned shipping rates. The service must be active to provide rates during checkout.
     */
    public function selectCarrierServiceCreate(ShopifyRootMutationCarrierServiceCreateArgumentsObject $argsObject): ShopifyCarrierServiceCreatePayloadQueryObject
    {
        $object = new ShopifyCarrierServiceCreatePayloadQueryObject("carrierServiceCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes an existing carrier service.
     */
    public function selectCarrierServiceDelete(ShopifyRootMutationCarrierServiceDeleteArgumentsObject $argsObject): ShopifyCarrierServiceDeletePayloadQueryObject
    {
        $object = new ShopifyCarrierServiceDeletePayloadQueryObject("carrierServiceDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a carrier service. Only the app that creates a carrier service can update it.
     */
    public function selectCarrierServiceUpdate(ShopifyRootMutationCarrierServiceUpdateArgumentsObject $argsObject): ShopifyCarrierServiceUpdatePayloadQueryObject
    {
        $object = new ShopifyCarrierServiceUpdatePayloadQueryObject("carrierServiceUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a cart transform function that lets merchants customize how products are bundled and presented during checkout. This gives merchants powerful control over their merchandising strategy by allowing apps to modify cart line items programmatically, supporting advanced approaches like dynamic bundles or personalized product recommendations.
     *
     * For example, a bundle app might create a cart transform that automatically groups related products (like a camera, lens, and case) into a single bundle line item when customers add them to their cart, complete with bundle pricing and unified presentation.
     *
     * Use `CartTransformCreate` to:
     * - Deploy custom bundling logic to merchant stores
     * - Enable dynamic product grouping during checkout
     * - Implement personalized product recommendations
     * - Create conditional offers based on cart contents
     * - Support complex pricing strategies for product combinations
     *
     * The mutation processes synchronously and returns the created cart transform along with any validation errors. Once created, the cart transform function becomes active for the shop and will process cart modifications according to your defined logic. Cart transforms integrate with [Shopify Functions](https://shopify.dev/docs/api/functions) to provide powerful customization capabilities while maintaining checkout performance.
     *
     * Cart Transform functions can be configured to block checkout on failure or allow graceful degradation, giving you control over how errors are handled in the customer experience.
     *
     * Learn more about [customized bundles](https://shopify.dev/docs/apps/selling-strategies/bundles/add-a-customized-bundle).
     */
    public function selectCartTransformCreate(?ShopifyRootMutationCartTransformCreateArgumentsObject $argsObject = null): ShopifyCartTransformCreatePayloadQueryObject
    {
        $object = new ShopifyCartTransformCreatePayloadQueryObject("cartTransformCreate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes an existing cart transform function from the merchant's store, disabling any customized bundle or cart modification logic it provided. This mutation persistently deletes the transform configuration and stops all associated cart processing.
     *
     * For example, when discontinuing a bundle app or removing specific merchandising features, you would delete the corresponding cart transform to ensure customers no longer see the bundled products or modified cart behavior.
     *
     * Use `CartTransformDelete` to:
     * - Deactivate customized bundle logic when removing app features
     * - Clean up unused transform functions
     * - Disable cart modifications during app uninstallation
     * - Remove outdated merchandising strategies
     * - Restore default cart behavior for merchants
     *
     * The deletion processes immediately and returns the ID of the removed cart transform for confirmation. Once deleted, the transform function stops processing new cart operations, though existing cart sessions may retain their current state until refresh. This ensures a clean transition without disrupting active customer sessions.
     *
     * Consider the timing of deletions carefully, as removing transforms during peak shopping periods could affect customer experience if they have active carts with transformed items.
     *
     * Learn more about [managing cart transforms](https://shopify.dev/docs/apps/selling-strategies/bundles).
     */
    public function selectCartTransformDelete(ShopifyRootMutationCartTransformDeleteArgumentsObject $argsObject): ShopifyCartTransformDeletePayloadQueryObject
    {
        $object = new ShopifyCartTransformDeletePayloadQueryObject("cartTransformDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a cash drawer in a provided location.
     */
    public function selectCashDrawerCreate(ShopifyRootMutationCashDrawerCreateArgumentsObject $argsObject): ShopifyCashDrawerCreatePayloadQueryObject
    {
        $object = new ShopifyCashDrawerCreatePayloadQueryObject("cashDrawerCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Finds or creates a cash drawer for cash management. Also ensures the provided device is assigned to the drawer.
     */
    public function selectCashDrawerFindOrCreate(ShopifyRootMutationCashDrawerFindOrCreateArgumentsObject $argsObject): ShopifyCashDrawerFindOrCreatePayloadQueryObject
    {
        $object = new ShopifyCashDrawerFindOrCreatePayloadQueryObject("cashDrawerFindOrCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a cash drawer.
     */
    public function selectCashDrawerUpdate(ShopifyRootMutationCashDrawerUpdateArgumentsObject $argsObject): ShopifyCashDrawerUpdatePayloadQueryObject
    {
        $object = new ShopifyCashDrawerUpdatePayloadQueryObject("cashDrawerUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Create a cash management reason code.
     */
    public function selectCashManagementReasonCodeCreate(ShopifyRootMutationCashManagementReasonCodeCreateArgumentsObject $argsObject): ShopifyCashManagementReasonCodeCreatePayloadQueryObject
    {
        $object = new ShopifyCashManagementReasonCodeCreatePayloadQueryObject("cashManagementReasonCodeCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a cash management reason code.
     */
    public function selectCashManagementReasonCodeDelete(ShopifyRootMutationCashManagementReasonCodeDeleteArgumentsObject $argsObject): ShopifyCashManagementReasonCodeDeletePayloadQueryObject
    {
        $object = new ShopifyCashManagementReasonCodeDeletePayloadQueryObject("cashManagementReasonCodeDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Modifies which contexts, like [markets](https://shopify.dev/docs/api/admin-graphql/latest/objects/Market) or B2B [company locations](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyLocation), can access a [`Catalog`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Catalog). You can add or remove contexts to control where the catalog's products and prices are available.
     *
     * Learn more about [managing catalog contexts](https://shopify.dev/docs/apps/build/markets/new-markets/catalogs) and [managing B2B catalogs](https://shopify.dev/docs/apps/build/b2b/manage-catalogs).
     */
    public function selectCatalogContextUpdate(ShopifyRootMutationCatalogContextUpdateArgumentsObject $argsObject): ShopifyCatalogContextUpdatePayloadQueryObject
    {
        $object = new ShopifyCatalogContextUpdatePayloadQueryObject("catalogContextUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a [`Catalog`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Catalog) that controls product availability and pricing for specific contexts like [markets](https://shopify.dev/docs/api/admin-graphql/latest/objects/Market) or B2B [company locations](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyLocation).
     *
     * ### Publications and Price Lists
     *
     * - **[`Publication`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication)** objects control which products are visible in a catalog. Publications are **optional**. When a publication isn't associated with a catalog, product availability is determined by the sales channel.
     * - **[`PriceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceList)** objects define custom pricing for products in a catalog.
     *
     * You can optionally associate a publication and price list when creating the catalog, or add them later using separate mutations.
     *
     * ### When to use Publications
     *
     * **Create a publication only if you need to:**
     * - Limit which products are visible in a specific context (e.g., show different products to different company locations or markets)
     * - Publish a curated subset of your product catalog
     *
     * **Do NOT create a publication if:**
     * - You want product availability determined by the sales channel
     * - You only need to customize pricing (use a price list without a publication)
     *
     * > **Important:** For company location catalogs that only require custom pricing, create the catalog with a price list but without a publication.
     *
     * Learn more about [managing catalog contexts](https://shopify.dev/docs/apps/build/markets/new-markets/catalogs) and [using catalogs for different markets](https://shopify.dev/docs/apps/build/markets/catalogs-different-markets).
     */
    public function selectCatalogCreate(ShopifyRootMutationCatalogCreateArgumentsObject $argsObject): ShopifyCatalogCreatePayloadQueryObject
    {
        $object = new ShopifyCatalogCreatePayloadQueryObject("catalogCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Delete a catalog.
     */
    public function selectCatalogDelete(ShopifyRootMutationCatalogDeleteArgumentsObject $argsObject): ShopifyCatalogDeletePayloadQueryObject
    {
        $object = new ShopifyCatalogDeletePayloadQueryObject("catalogDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates an existing [catalog's](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Catalog) configuration. Catalogs control product publishing and pricing for specific contexts like [markets](https://shopify.dev/docs/api/admin-graphql/latest/objects/Market) or B2B [company locations](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyLocation).
     *
     * You can modify the catalog's title, status, and associated context. You can also update the [`PriceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceList) that determines pricing adjustments or the [`Publication`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication) that controls which products customers see.
     */
    public function selectCatalogUpdate(ShopifyRootMutationCatalogUpdateArgumentsObject $argsObject): ShopifyCatalogUpdatePayloadQueryObject
    {
        $object = new ShopifyCatalogUpdatePayloadQueryObject("catalogUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel) representing a connection between the shop and an external selling platform account. Use this mutation after a merchant authenticates with an external platform to establish the publishing destination for product syndication and, for order-generating channels, order import.
     *
     * The platform resolves the [channel specification](https://shopify.dev/docs/apps/build/sales-channels/channel-config-extension) identified by `specificationHandle`, determines its country coverage, intersects with the shop's available region markets, and establishes product feeds for all matching regions. Product feeds immediately begin emitting events to the application's webhook or event subscription.
     *
     * If the specification sets `expects_online_store_parity` and no matching region markets exist, the mutation returns an error. If the specification doesn't require online store parity and no matching region markets exist, a channel subordinate to shop defaults is created automatically.
     */
    public function selectChannelCreate(ShopifyRootMutationChannelCreateArgumentsObject $argsObject): ShopifyChannelCreatePayloadQueryObject
    {
        $object = new ShopifyChannelCreatePayloadQueryObject("channelCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel) from the shop. All associated product feeds are removed. Existing orders attributed to the channel are preserved. The channel must have been created via [`channelCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/channelCreate).
     */
    public function selectChannelDelete(ShopifyRootMutationChannelDeleteArgumentsObject $argsObject): ShopifyChannelDeletePayloadQueryObject
    {
        $object = new ShopifyChannelDeletePayloadQueryObject("channelDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Triggers a full product resync for the specified [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel). All published products are added to the channel's product feed attention set, causing the next poll or event-triggered consumption to receive current state for the complete catalog. Use this mutation after initial channel setup, after recovering from a prolonged outage, or when the channel's external catalog has drifted from Shopify's state.
     *
     * The sync can be scoped to a specific country and language. When neither is specified, all country-language combinations covered by the channel's specification are triggered.
     */
    public function selectChannelFullSync(ShopifyRootMutationChannelFullSyncArgumentsObject $argsObject): ShopifyChannelFullSyncPayloadQueryObject
    {
        $object = new ShopifyChannelFullSyncPayloadQueryObject("channelFullSync");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates the properties of an existing [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel). Use this mutation to update account information — such as the display name shown in Shopify Admin — or to bind the channel to a different channel specification.
     *
     * Updating the `specificationHandle` triggers re-evaluation of the specification's country coverage against the shop's region markets, reconciling product feeds accordingly. This is also the mechanism for migrating legacy channel records to the multi-channel model by assigning a specification handle.
     */
    public function selectChannelUpdate(ShopifyRootMutationChannelUpdateArgumentsObject $argsObject): ShopifyChannelUpdatePayloadQueryObject
    {
        $object = new ShopifyChannelUpdatePayloadQueryObject("channelUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a checkout and accounts configuration.
     */
    public function selectCheckoutAndAccountsConfigurationUpdate(ShopifyRootMutationCheckoutAndAccountsConfigurationUpdateArgumentsObject $argsObject): ShopifyCheckoutAndAccountsConfigurationUpdatePayloadQueryObject
    {
        $object = new ShopifyCheckoutAndAccountsConfigurationUpdatePayloadQueryObject("checkoutAndAccountsConfigurationUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates the visual branding for a [`CheckoutProfile`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CheckoutProfile), customizing how checkout displays to customers. Creates new branding settings if none exist, or modifies existing settings.
     *
     * The mutation accepts two levels of customization through the [`CheckoutBrandingInput`](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/CheckoutBrandingInput) input object. [`designSystem`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/checkoutBrandingUpsert#arguments-checkoutBrandingInput.fields.designSystem) defines foundational brand attributes like colors, typography, and corner radius that apply consistently throughout checkout. [`customizations`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/checkoutBrandingUpsert#arguments-checkoutBrandingInput.fields.customizations) defines styles for specific parts of the UI, individual components, or groups of components like the header, buttons, form fields, and sections.
     *
     * Changes to a published checkout profile display immediately in the store's checkout. You can preview draft profiles in the Shopify admin's checkout editor before publishing.
     *
     * Learn more about [checkout styling](https://shopify.dev/docs/apps/checkout/styling).
     *
     * @deprecated Use `checkoutAndAccountsConfigurationUpdate` instead.
     */
    public function selectCheckoutBrandingUpsert(ShopifyRootMutationCheckoutBrandingUpsertArgumentsObject $argsObject): ShopifyCheckoutBrandingUpsertPayloadQueryObject
    {
        $object = new ShopifyCheckoutBrandingUpsertPayloadQueryObject("checkoutBrandingUpsert");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds multiple products to an existing collection in a single operation. This mutation provides an efficient way to bulk-manage collection membership without individual product updates.
     *
     * For example, when merchants create seasonal collections, they can add dozens of related products at once rather than updating each product individually. A clothing store might add all winter jackets to a "Winter Collection" in one operation.
     *
     * Use `CollectionAddProducts` to:
     * - Bulk-add products to collections for efficient catalog management
     * - Implement collection building tools in admin interfaces
     * - Organize collection membership during bulk product operations
     * - Reduce API calls when managing large product sets
     *
     * The mutation processes multiple product additions and returns success status along with any errors encountered during the operation. Products are added to the collection while preserving existing collection settings.
     *
     * Learn more about [collection management](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection).
     *
     * @deprecated Use `collectionUpdate` with inclusion.selectionsToAdd instead.
     */
    public function selectCollectionAddProducts(ShopifyRootMutationCollectionAddProductsArgumentsObject $argsObject): ShopifyCollectionAddProductsPayloadQueryObject
    {
        $object = new ShopifyCollectionAddProductsPayloadQueryObject("collectionAddProducts");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds products to a [`Collection`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection) asynchronously and returns a [`Job`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Job) to track the operation's progress. This mutation handles large product sets efficiently by processing them in the background.
     *
     * You can poll the returned job using the [`job`](https://shopify.dev/docs/api/admin-graphql/latest/queries/job) query to monitor completion status.
     *
     * > Note:
     * > This mutation adds products in the order specified in the [`productIds`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/collectionAddProducts#arguments-productIds) argument.
     *
     * @deprecated Use `collectionUpdate` with inclusion.selectionsToAdd instead.
     */
    public function selectCollectionAddProductsV2(ShopifyRootMutationCollectionAddProductsV2ArgumentsObject $argsObject): ShopifyCollectionAddProductsV2PayloadQueryObject
    {
        $object = new ShopifyCollectionAddProductsV2PayloadQueryObject("collectionAddProductsV2");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a shareable collection source that can later be linked to one or more collections.
     */
    public function selectCollectionConditionsSourceCreate(ShopifyRootMutationCollectionConditionsSourceCreateArgumentsObject $argsObject): ShopifyCollectionConditionsSourceCreatePayloadQueryObject
    {
        $object = new ShopifyCollectionConditionsSourceCreatePayloadQueryObject("collectionConditionsSourceCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a shareable collection source owned by the calling app.
     */
    public function selectCollectionConditionsSourceDelete(ShopifyRootMutationCollectionConditionsSourceDeleteArgumentsObject $argsObject): ShopifyCollectionConditionsSourceDeletePayloadQueryObject
    {
        $object = new ShopifyCollectionConditionsSourceDeletePayloadQueryObject("collectionConditionsSourceDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a shareable collection source owned by the calling app.
     */
    public function selectCollectionConditionsSourceUpdate(ShopifyRootMutationCollectionConditionsSourceUpdateArgumentsObject $argsObject): ShopifyCollectionConditionsSourceUpdatePayloadQueryObject
    {
        $object = new ShopifyCollectionConditionsSourceUpdatePayloadQueryObject("collectionConditionsSourceUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a [collection](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection)
     * to group [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) together
     * in the [online store](https://shopify.dev/docs/apps/build/online-store) and
     * other [sales channels](https://shopify.dev/docs/apps/build/sales-channels).
     * For example, an athletics store might create different collections for running attire, shoes, and accessories.
     *
     * Use the `collectionCreate` mutation when you need to:
     *
     * - Create a new collection for a product launch or campaign
     * - Organize products by category, season, or promotion
     * - Automate product grouping using conditions (for example, by tag, type, or price)
     *
     * Collections can include products manually and can also include products automatically based on rules, sources,
     * or conditions.
     *
     * **Defining a collection's membership**
     *
     * Define membership with `sources` on the `collection` argument
     * ([`CollectionCreateInput`](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/CollectionCreateInput)).
     * Each source adds products through `conditions` (such as product tag, title, or metafield—see
     * [`CollectionSourceInclusionConditionInput`](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/CollectionSourceInclusionConditionInput)
     * for the full list) and through manual `selections`.
     *
     * > Note:
     * > The `input` argument and its `ruleSet` field are deprecated. Existing integrations should migrate to
     * `collection` and `sources` — a `ruleSet` rule maps to an equivalent source `condition` (for example, a
     * tag rule becomes a `productTag` condition). If both `collection` and `input` are provided, `collection`
     * is used.
     *
     * > Note:
     * > The created collection is unpublished by default. To make it available to customers,
     * use the [`publishablePublish`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/publishablePublish)
     * mutation after creation.
     *
     * Learn more about [using metafields with collection conditions](https://shopify.dev/docs/apps/build/custom-data/metafields/use-metafield-capabilities).
     */
    public function selectCollectionCreate(?ShopifyRootMutationCollectionCreateArgumentsObject $argsObject = null): ShopifyCollectionCreatePayloadQueryObject
    {
        $object = new ShopifyCollectionCreatePayloadQueryObject("collectionCreate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a collection and removes it permanently from the store. This operation cannot be undone and will remove the collection from all sales channels where it was published.
     *
     * For example, when merchants discontinue seasonal promotions or reorganize their catalog structure, they can delete outdated collections like "Back to School 2023" to keep their store organized.
     *
     * Use `CollectionDelete` to:
     * - Remove outdated or unused collections from stores
     * - Clean up collection structures during catalog reorganization
     * - Implement collection management tools with deletion capabilities
     *
     * Products within the deleted collection remain in the store but are no longer grouped under that collection.
     *
     * Learn more about [collection management](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection).
     */
    public function selectCollectionDelete(ShopifyRootMutationCollectionDeleteArgumentsObject $argsObject): ShopifyCollectionDeletePayloadQueryObject
    {
        $object = new ShopifyCollectionDeletePayloadQueryObject("collectionDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Duplicates a [collection](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection).
     *
     * An existing collection ID and new title are required.
     *
     * ## Publication Duplication
     *
     * Publications may be excluded by passing `copyPublications: false` in the input.
     *
     * ## Metafields
     * Metafield values are not duplicated if the unique values capability is enabled.
     */
    public function selectCollectionDuplicate(ShopifyRootMutationCollectionDuplicateArgumentsObject $argsObject): ShopifyCollectionDuplicatePayloadQueryObject
    {
        $object = new ShopifyCollectionDuplicatePayloadQueryObject("collectionDuplicate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Publishes a collection to a channel.
     *
     * @deprecated Use `publishablePublish` instead.
     */
    public function selectCollectionPublish(ShopifyRootMutationCollectionPublishArgumentsObject $argsObject): ShopifyCollectionPublishPayloadQueryObject
    {
        $object = new ShopifyCollectionPublishPayloadQueryObject("collectionPublish");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes multiple manually included products from a collection in a single operation. This mutation can process large product sets (up to 250 products) and may take significant time to complete for collections with many products.
     *
     * For example, when ending a seasonal promotion, merchants can remove all sale items from a "Summer Clearance" collection at once rather than editing each product individually.
     *
     * Use `CollectionRemoveProducts` to:
     * - Bulk-remove products from collections efficiently
     * - Clean up collection membership during catalog updates
     * - Implement automated collection management workflows
     *
     * The operation processes asynchronously to avoid timeouts and performance issues, especially for large product sets.
     *
     * Learn more about [collection management](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection).
     *
     * @deprecated Use `collectionUpdate` with inclusions.selectionsToRemove instead.
     */
    public function selectCollectionRemoveProducts(ShopifyRootMutationCollectionRemoveProductsArgumentsObject $argsObject): ShopifyCollectionRemoveProductsPayloadQueryObject
    {
        $object = new ShopifyCollectionRemoveProductsPayloadQueryObject("collectionRemoveProducts");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Asynchronously reorders products within a specified collection. Instead of returning an updated collection, this mutation returns a job, which should be [polled](https://shopify.dev/api/admin-graphql/latest/queries/job). The [`Collection.sortOrder`](https://shopify.dev/api/admin-graphql/latest/objects/Collection#field-collection-sortorder) must be `MANUAL`.
     *
     * How to use this mutation:
     * - Provide only the products that actually moved in the `moves` list; do not send the entire product list. For example: to move the product at index 1 to index N, send a single move for that product with `newPosition: N`.
     * - Each move is applied sequentially in the order provided.
     * - `newPosition` is a zero-based index within the collection at the moment the move is applied (after any prior moves in the list).
     * - Products not included in `moves` keep their relative order, aside from any displacement caused by the moves.
     * - If `newPosition` is greater than or equal to the number of products, the product is placed at the end.
     *
     * Example:
     * - Initial order: [A, B, C, D, E] (indices 0..4)
     * - Moves (applied in order):
     *   - E -> newPosition: 1
     *   - C -> newPosition: 4
     * - Result: [A, E, B, D, C]
     *
     * Displaced products will have their position altered in a consistent manner with no gaps.
     */
    public function selectCollectionReorderProducts(ShopifyRootMutationCollectionReorderProductsArgumentsObject $argsObject): ShopifyCollectionReorderProductsPayloadQueryObject
    {
        $object = new ShopifyCollectionReorderProductsPayloadQueryObject("collectionReorderProducts");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Unpublishes a collection.
     *
     * @deprecated Use `publishableUnpublish` instead.
     */
    public function selectCollectionUnpublish(ShopifyRootMutationCollectionUnpublishArgumentsObject $argsObject): ShopifyCollectionUnpublishPayloadQueryObject
    {
        $object = new ShopifyCollectionUnpublishPayloadQueryObject("collectionUnpublish");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a [collection](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection),
     * modifying its properties, products, or publication settings. Collections help organize
     * [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) together
     * in the [online store](https://shopify.dev/docs/apps/build/online-store) and
     * other [sales channels](https://shopify.dev/docs/apps/build/sales-channels).
     *
     * Use the `collectionUpdate` mutation to programmatically modify collections in scenarios such as:
     *
     * - Updating collection details, like title, description, or image
     * - Modifying SEO metadata for better search visibility
     * - Changing which products are included in a collection by updating its rules, sources, or conditions
     * - Updating custom data using [metafields](https://shopify.dev/docs/apps/build/custom-data/metafields)
     *
     * Collections can include products manually and can also include products automatically based on rules, sources,
     * or conditions. When product membership is updated through rules, sources, or conditions, the operation might
     * be processed asynchronously. In these cases, the mutation returns a [`job`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Job) object
     * that you can use to track the progress of the update.
     *
     * To publish or unpublish collections to specific sales channels, use the dedicated
     * [`publishablePublish`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/publishablePublish) and
     * [`publishableUnpublish`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/publishableUnpublish) mutations.
     *
     * Learn more about [using metafields with collection conditions](https://shopify.dev/docs/apps/build/custom-data/metafields/use-metafield-capabilities).
     */
    public function selectCollectionUpdate(?ShopifyRootMutationCollectionUpdateArgumentsObject $argsObject = null): ShopifyCollectionUpdatePayloadQueryObject
    {
        $object = new ShopifyCollectionUpdatePayloadQueryObject("collectionUpdate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Add, remove and update `CombinedListing`s of a given Product.
     *
     * `CombinedListing`s are comprised of multiple products to create a single listing. There are two kinds of products used in a `CombinedListing`:
     *
     * 1. Parent products
     * 2. Child products
     *
     * The parent product is created with a `productCreate` with a `CombinedListingRole` of `PARENT`. Once created, you can associate child products with the parent product using this mutation. Parent products represent the idea of a product (e.g. Shoe).
     *
     * Child products represent a particular option value (or combination of option values) of a parent product. For instance, with your Shoe parent product, you may have several child products representing specific colors of the shoe (e.g. Shoe - Blue). You could also have child products representing more than a single option (e.g. Shoe - Blue/Canvas, Shoe - Blue/Leather, etc...).
     *
     * The combined listing is the association of parent product to one or more child products.
     *
     * Learn more about [Combined Listings](https://shopify.dev/apps/selling-strategies/combined-listings).
     */
    public function selectCombinedListingUpdate(ShopifyRootMutationCombinedListingUpdateArgumentsObject $argsObject): ShopifyCombinedListingUpdatePayloadQueryObject
    {
        $object = new ShopifyCombinedListingUpdatePayloadQueryObject("combinedListingUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Approves a pending comment, making it visible to store visitors on the associated blog article.
     *
     * For example, when a customer submits a question about a product in a blog post, merchants can approve the comment to make it publicly visible.
     *
     * Use the `commentApprove` mutation to:
     * - Publish pending comments after review
     * - Enable customer discussions on blog articles
     * - Maintain quality control over comments
     *
     * Once approved, the comment becomes visible to all store visitors.
     */
    public function selectCommentApprove(ShopifyRootMutationCommentApproveArgumentsObject $argsObject): ShopifyCommentApprovePayloadQueryObject
    {
        $object = new ShopifyCommentApprovePayloadQueryObject("commentApprove");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Permanently removes a comment from a blog article.
     *
     * For example, when a comment contains spam links or inappropriate language that violates store policies, merchants can delete it entirely.
     *
     * Use the `commentDelete` mutation to:
     * - Remove spam or inappropriate comments permanently
     * - Clean up irrelevant discussions
     * - Maintain content standards on blog articles
     *
     * Deletion is permanent and can't be undone.
     */
    public function selectCommentDelete(ShopifyRootMutationCommentDeleteArgumentsObject $argsObject): ShopifyCommentDeletePayloadQueryObject
    {
        $object = new ShopifyCommentDeletePayloadQueryObject("commentDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Reverses a spam classification on a comment, restoring it to normal moderation status. This mutation allows merchants to change their decision when a comment has been manually marked as spam.
     *
     * For example, when a merchant reviews comments marked as spam and finds a legitimate customer question, they can use this mutation to restore the comment's normal status and make it eligible for approval.
     *
     * Use the `commentNotSpam` mutation to:
     * - Unmark comments that were marked as spam
     * - Restore comments to normal moderation status
     * - Move comments back to the approval queue
     *
     * This action changes the comment's status from spam back to pending, where it can then be approved or managed according to standard moderation practices.
     */
    public function selectCommentNotSpam(ShopifyRootMutationCommentNotSpamArgumentsObject $argsObject): ShopifyCommentNotSpamPayloadQueryObject
    {
        $object = new ShopifyCommentNotSpamPayloadQueryObject("commentNotSpam");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Marks a comment as spam, removing it from public view. This mutation enables merchants to quickly handle unwanted promotional content, malicious links, or other spam that appears in blog discussions.
     *
     * For example, when a comment contains suspicious links to unrelated products or services, merchants can mark it as spam to immediately hide it from customers.
     *
     * Use the `commentSpam` mutation to:
     * - Hide promotional or malicious comments from public view
     * - Protect customers from potentially harmful links
     * - Maintain professional discussion quality on blog articles
     *
     * Spam-marked comments can be reviewed later and potentially restored using the `commentNotSpam` mutation if they were incorrectly classified.
     */
    public function selectCommentSpam(ShopifyRootMutationCommentSpamArgumentsObject $argsObject): ShopifyCommentSpamPayloadQueryObject
    {
        $object = new ShopifyCommentSpamPayloadQueryObject("commentSpam");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a list of companies.
     */
    public function selectCompaniesDelete(ShopifyRootMutationCompaniesDeleteArgumentsObject $argsObject): ShopifyCompaniesDeletePayloadQueryObject
    {
        $object = new ShopifyCompaniesDeletePayloadQueryObject("companiesDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a company address.
     */
    public function selectCompanyAddressDelete(ShopifyRootMutationCompanyAddressDeleteArgumentsObject $argsObject): ShopifyCompanyAddressDeletePayloadQueryObject
    {
        $object = new ShopifyCompanyAddressDeletePayloadQueryObject("companyAddressDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds an existing [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) as a contact to a [`Company`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Company).  Companies are business entities that make purchases from the merchant's store. Use this mutation when you have a customer who needs to be associated with a B2B company to make purchases on behalf of that company.
     *
     * The mutation returns the newly created [`CompanyContact`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyContact) that links the customer to the company. After assignment, the customer becomes a company contact who can place orders on behalf of the company with access to any catalogs, pricing, and payment terms configured for the company's locations.
     */
    public function selectCompanyAssignCustomerAsContact(ShopifyRootMutationCompanyAssignCustomerAsContactArgumentsObject $argsObject): ShopifyCompanyAssignCustomerAsContactPayloadQueryObject
    {
        $object = new ShopifyCompanyAssignCustomerAsContactPayloadQueryObject("companyAssignCustomerAsContact");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Assigns the main contact for the company.
     */
    public function selectCompanyAssignMainContact(ShopifyRootMutationCompanyAssignMainContactArgumentsObject $argsObject): ShopifyCompanyAssignMainContactPayloadQueryObject
    {
        $object = new ShopifyCompanyAssignMainContactPayloadQueryObject("companyAssignMainContact");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Assigns a role to a contact for a location.
     */
    public function selectCompanyContactAssignRole(ShopifyRootMutationCompanyContactAssignRoleArgumentsObject $argsObject): ShopifyCompanyContactAssignRolePayloadQueryObject
    {
        $object = new ShopifyCompanyContactAssignRolePayloadQueryObject("companyContactAssignRole");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Assigns roles on a company contact.
     */
    public function selectCompanyContactAssignRoles(ShopifyRootMutationCompanyContactAssignRolesArgumentsObject $argsObject): ShopifyCompanyContactAssignRolesPayloadQueryObject
    {
        $object = new ShopifyCompanyContactAssignRolesPayloadQueryObject("companyContactAssignRoles");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a company contact and the associated customer.
     */
    public function selectCompanyContactCreate(ShopifyRootMutationCompanyContactCreateArgumentsObject $argsObject): ShopifyCompanyContactCreatePayloadQueryObject
    {
        $object = new ShopifyCompanyContactCreatePayloadQueryObject("companyContactCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a company contact.
     */
    public function selectCompanyContactDelete(ShopifyRootMutationCompanyContactDeleteArgumentsObject $argsObject): ShopifyCompanyContactDeletePayloadQueryObject
    {
        $object = new ShopifyCompanyContactDeletePayloadQueryObject("companyContactDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes a company contact from a Company.
     */
    public function selectCompanyContactRemoveFromCompany(ShopifyRootMutationCompanyContactRemoveFromCompanyArgumentsObject $argsObject): ShopifyCompanyContactRemoveFromCompanyPayloadQueryObject
    {
        $object = new ShopifyCompanyContactRemoveFromCompanyPayloadQueryObject("companyContactRemoveFromCompany");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Revokes a role on a company contact.
     */
    public function selectCompanyContactRevokeRole(ShopifyRootMutationCompanyContactRevokeRoleArgumentsObject $argsObject): ShopifyCompanyContactRevokeRolePayloadQueryObject
    {
        $object = new ShopifyCompanyContactRevokeRolePayloadQueryObject("companyContactRevokeRole");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Revokes roles on a company contact.
     */
    public function selectCompanyContactRevokeRoles(ShopifyRootMutationCompanyContactRevokeRolesArgumentsObject $argsObject): ShopifyCompanyContactRevokeRolesPayloadQueryObject
    {
        $object = new ShopifyCompanyContactRevokeRolesPayloadQueryObject("companyContactRevokeRoles");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sends the company contact a welcome email.
     */
    public function selectCompanyContactSendWelcomeEmail(ShopifyRootMutationCompanyContactSendWelcomeEmailArgumentsObject $argsObject): ShopifyCompanyContactSendWelcomeEmailPayloadQueryObject
    {
        $object = new ShopifyCompanyContactSendWelcomeEmailPayloadQueryObject("companyContactSendWelcomeEmail");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a company contact.
     */
    public function selectCompanyContactUpdate(ShopifyRootMutationCompanyContactUpdateArgumentsObject $argsObject): ShopifyCompanyContactUpdatePayloadQueryObject
    {
        $object = new ShopifyCompanyContactUpdatePayloadQueryObject("companyContactUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes one or more company contacts.
     */
    public function selectCompanyContactsDelete(ShopifyRootMutationCompanyContactsDeleteArgumentsObject $argsObject): ShopifyCompanyContactsDeletePayloadQueryObject
    {
        $object = new ShopifyCompanyContactsDeletePayloadQueryObject("companyContactsDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a [`Company`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Company) for B2B commerce. This mutation creates the company and can optionally create an initial [`CompanyContact`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyContact) and [`CompanyLocation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyLocation) in a single operation. Company contacts are people who place orders on behalf of the company. Company locations are branches or offices with their own billing and shipping addresses.
     *
     * > Note: Creating a company without a `name` [returns an error](https://shopify.dev/docs/api/admin-graphql/latest/mutations/companycreate?example=creating-a-company-without-a-name-returns-an-error).
     *
     * Learn more about [creating companies for B2B](https://shopify.dev/docs/apps/build/b2b/start-building#step-1-create-a-company).
     */
    public function selectCompanyCreate(ShopifyRootMutationCompanyCreateArgumentsObject $argsObject): ShopifyCompanyCreatePayloadQueryObject
    {
        $object = new ShopifyCompanyCreatePayloadQueryObject("companyCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a company.
     */
    public function selectCompanyDelete(ShopifyRootMutationCompanyDeleteArgumentsObject $argsObject): ShopifyCompanyDeletePayloadQueryObject
    {
        $object = new ShopifyCompanyDeletePayloadQueryObject("companyDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates an address on a company location.
     */
    public function selectCompanyLocationAssignAddress(ShopifyRootMutationCompanyLocationAssignAddressArgumentsObject $argsObject): ShopifyCompanyLocationAssignAddressPayloadQueryObject
    {
        $object = new ShopifyCompanyLocationAssignAddressPayloadQueryObject("companyLocationAssignAddress");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Assigns roles on a company location.
     */
    public function selectCompanyLocationAssignRoles(ShopifyRootMutationCompanyLocationAssignRolesArgumentsObject $argsObject): ShopifyCompanyLocationAssignRolesPayloadQueryObject
    {
        $object = new ShopifyCompanyLocationAssignRolesPayloadQueryObject("companyLocationAssignRoles");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates one or more mappings between a staff member at a shop and a company location.
     */
    public function selectCompanyLocationAssignStaffMembers(ShopifyRootMutationCompanyLocationAssignStaffMembersArgumentsObject $argsObject): ShopifyCompanyLocationAssignStaffMembersPayloadQueryObject
    {
        $object = new ShopifyCompanyLocationAssignStaffMembersPayloadQueryObject("companyLocationAssignStaffMembers");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Assigns tax exemptions to the company location.
     *
     * @deprecated Use `companyLocationTaxSettingsUpdate` instead.
     */
    public function selectCompanyLocationAssignTaxExemptions(ShopifyRootMutationCompanyLocationAssignTaxExemptionsArgumentsObject $argsObject): ShopifyCompanyLocationAssignTaxExemptionsPayloadQueryObject
    {
        $object = new ShopifyCompanyLocationAssignTaxExemptionsPayloadQueryObject("companyLocationAssignTaxExemptions");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a new location for a [`Company`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Company). Company locations are branches or offices where B2B customers can place orders with specific pricing, catalogs, and payment terms.
     *
     * Creates a company location. Each location can have its own billing and shipping addresses, tax settings, and [`buyer experience configuration`](https://shopify.dev/docs/api/admin-graphql/latest/objects/BuyerExperienceConfiguration). You can assign [staff members](https://shopify.dev/docs/api/admin-graphql/latest/objects/StaffMember) and [`CompanyContact`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyContact) objects to manage the location.
     */
    public function selectCompanyLocationCreate(ShopifyRootMutationCompanyLocationCreateArgumentsObject $argsObject): ShopifyCompanyLocationCreatePayloadQueryObject
    {
        $object = new ShopifyCompanyLocationCreatePayloadQueryObject("companyLocationCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a tax registration for a company location.
     *
     * @deprecated Use `companyLocationTaxSettingsUpdate` instead.
     */
    public function selectCompanyLocationCreateTaxRegistration(ShopifyRootMutationCompanyLocationCreateTaxRegistrationArgumentsObject $argsObject): ShopifyCompanyLocationCreateTaxRegistrationPayloadQueryObject
    {
        $object = new ShopifyCompanyLocationCreateTaxRegistrationPayloadQueryObject("companyLocationCreateTaxRegistration");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a company location.
     */
    public function selectCompanyLocationDelete(ShopifyRootMutationCompanyLocationDeleteArgumentsObject $argsObject): ShopifyCompanyLocationDeletePayloadQueryObject
    {
        $object = new ShopifyCompanyLocationDeletePayloadQueryObject("companyLocationDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes one or more existing mappings between a staff member at a shop and a company location.
     */
    public function selectCompanyLocationRemoveStaffMembers(ShopifyRootMutationCompanyLocationRemoveStaffMembersArgumentsObject $argsObject): ShopifyCompanyLocationRemoveStaffMembersPayloadQueryObject
    {
        $object = new ShopifyCompanyLocationRemoveStaffMembersPayloadQueryObject("companyLocationRemoveStaffMembers");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Revokes roles on a company location.
     */
    public function selectCompanyLocationRevokeRoles(ShopifyRootMutationCompanyLocationRevokeRolesArgumentsObject $argsObject): ShopifyCompanyLocationRevokeRolesPayloadQueryObject
    {
        $object = new ShopifyCompanyLocationRevokeRolesPayloadQueryObject("companyLocationRevokeRoles");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Revokes tax exemptions from the company location.
     *
     * @deprecated Use `companyLocationTaxSettingsUpdate` instead.
     */
    public function selectCompanyLocationRevokeTaxExemptions(ShopifyRootMutationCompanyLocationRevokeTaxExemptionsArgumentsObject $argsObject): ShopifyCompanyLocationRevokeTaxExemptionsPayloadQueryObject
    {
        $object = new ShopifyCompanyLocationRevokeTaxExemptionsPayloadQueryObject("companyLocationRevokeTaxExemptions");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Revokes tax registration on a company location.
     *
     * @deprecated Use `companyLocationTaxSettingsUpdate` instead.
     */
    public function selectCompanyLocationRevokeTaxRegistration(ShopifyRootMutationCompanyLocationRevokeTaxRegistrationArgumentsObject $argsObject): ShopifyCompanyLocationRevokeTaxRegistrationPayloadQueryObject
    {
        $object = new ShopifyCompanyLocationRevokeTaxRegistrationPayloadQueryObject("companyLocationRevokeTaxRegistration");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sets the tax settings for a company location.
     */
    public function selectCompanyLocationTaxSettingsUpdate(ShopifyRootMutationCompanyLocationTaxSettingsUpdateArgumentsObject $argsObject): ShopifyCompanyLocationTaxSettingsUpdatePayloadQueryObject
    {
        $object = new ShopifyCompanyLocationTaxSettingsUpdatePayloadQueryObject("companyLocationTaxSettingsUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a company location's information and B2B checkout settings. Company locations are branches or offices where [`CompanyContact`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyContact) members place orders on behalf of the company. Contacts must be assigned to a location through `roleAssignments` to place orders.
     *
     * The mutation modifies details such as the location's name, contact information, preferred locale, and internal notes. You can also configure the B2B checkout experience through [`BuyerExperienceConfiguration`](https://shopify.dev/docs/api/admin-graphql/latest/objects/BuyerExperienceConfiguration) settings that control whether orders require merchant review, [`PaymentTermsTemplate`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PaymentTermsTemplate) settings, shipping address editing permissions, and [`DepositConfiguration`](https://shopify.dev/docs/api/admin-graphql/latest/unions/DepositConfiguration) requirements.
     *
     * Learn more about [managing company locations](https://shopify.dev/docs/apps/build/b2b/manage-client-company-locations).
     */
    public function selectCompanyLocationUpdate(ShopifyRootMutationCompanyLocationUpdateArgumentsObject $argsObject): ShopifyCompanyLocationUpdatePayloadQueryObject
    {
        $object = new ShopifyCompanyLocationUpdatePayloadQueryObject("companyLocationUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a list of company locations.
     */
    public function selectCompanyLocationsDelete(ShopifyRootMutationCompanyLocationsDeleteArgumentsObject $argsObject): ShopifyCompanyLocationsDeletePayloadQueryObject
    {
        $object = new ShopifyCompanyLocationsDeletePayloadQueryObject("companyLocationsDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Revokes the main contact from the company.
     */
    public function selectCompanyRevokeMainContact(ShopifyRootMutationCompanyRevokeMainContactArgumentsObject $argsObject): ShopifyCompanyRevokeMainContactPayloadQueryObject
    {
        $object = new ShopifyCompanyRevokeMainContactPayloadQueryObject("companyRevokeMainContact");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a [`Company`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Company) with new information. Companies represent business customers that can have multiple contacts and locations with specific pricing, payment terms, and checkout settings.
     *
     * The mutation accepts the company's ID and an input object containing the fields to update. You can modify the company name, add or update internal notes, set an external ID for integration with other systems, or adjust the customer relationship start date.
     *
     * Learn more about [building B2B features](https://shopify.dev/docs/apps/build/b2b/start-building).
     */
    public function selectCompanyUpdate(ShopifyRootMutationCompanyUpdateArgumentsObject $argsObject): ShopifyCompanyUpdatePayloadQueryObject
    {
        $object = new ShopifyCompanyUpdatePayloadQueryObject("companyUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Update or create consent policies in bulk.
     */
    public function selectConsentPolicyUpdate(ShopifyRootMutationConsentPolicyUpdateArgumentsObject $argsObject): ShopifyConsentPolicyUpdatePayloadQueryObject
    {
        $object = new ShopifyConsentPolicyUpdatePayloadQueryObject("consentPolicyUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Add tax exemptions for the customer.
     */
    public function selectCustomerAddTaxExemptions(ShopifyRootMutationCustomerAddTaxExemptionsArgumentsObject $argsObject): ShopifyCustomerAddTaxExemptionsPayloadQueryObject
    {
        $object = new ShopifyCustomerAddTaxExemptionsPayloadQueryObject("customerAddTaxExemptions");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a new [`MailingAddress`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MailingAddress) for a [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer). You can optionally set the address as the customer's default address.
     *
     * You can only add addresses to existing customers. Each customer can have multiple addresses.
     */
    public function selectCustomerAddressCreate(ShopifyRootMutationCustomerAddressCreateArgumentsObject $argsObject): ShopifyCustomerAddressCreatePayloadQueryObject
    {
        $object = new ShopifyCustomerAddressCreatePayloadQueryObject("customerAddressCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a customer's address.
     */
    public function selectCustomerAddressDelete(ShopifyRootMutationCustomerAddressDeleteArgumentsObject $argsObject): ShopifyCustomerAddressDeletePayloadQueryObject
    {
        $object = new ShopifyCustomerAddressDeletePayloadQueryObject("customerAddressDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer)'s [`MailingAddress`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MailingAddress). You can modify any field of the address and optionally set it as the customer's default address.
     */
    public function selectCustomerAddressUpdate(ShopifyRootMutationCustomerAddressUpdateArgumentsObject $argsObject): ShopifyCustomerAddressUpdatePayloadQueryObject
    {
        $object = new ShopifyCustomerAddressUpdatePayloadQueryObject("customerAddressUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Cancels a pending erasure of a customer's data. Read more [here](https://help.shopify.com/manual/privacy-and-security/privacy/processing-customer-data-requests#cancel-customer-data-erasure).
     *
     * To request an erasure of a customer's data use the [customerRequestDataErasure mutation](https://shopify.dev/api/admin-graphql/unstable/mutations/customerRequestDataErasure).
     */
    public function selectCustomerCancelDataErasure(ShopifyRootMutationCustomerCancelDataErasureArgumentsObject $argsObject): ShopifyCustomerCancelDataErasurePayloadQueryObject
    {
        $object = new ShopifyCustomerCancelDataErasurePayloadQueryObject("customerCancelDataErasure");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a new [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) in the store.
     *
     * Accepts customer details including contact information, marketing consent preferences, and tax exemptions through the [`CustomerInput`](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/CustomerInput) input object. You can also associate [`metafields`](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/MetafieldInput) and tags to organize and extend customer data.
     *
     * Apps using protected customer data must meet Shopify's [protected customer data requirements](https://shopify.dev/docs/apps/launch/protected-customer-data#requirements).
     */
    public function selectCustomerCreate(ShopifyRootMutationCustomerCreateArgumentsObject $argsObject): ShopifyCustomerCreatePayloadQueryObject
    {
        $object = new ShopifyCustomerCreatePayloadQueryObject("customerCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) from the store. You can only delete customers who haven't placed any [orders](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order).
     *
     * Apps using protected customer data must meet Shopify's [protected customer data requirements](https://shopify.dev/docs/apps/launch/protected-customer-data#requirements).
     */
    public function selectCustomerDelete(ShopifyRootMutationCustomerDeleteArgumentsObject $argsObject): ShopifyCustomerDeletePayloadQueryObject
    {
        $object = new ShopifyCustomerDeletePayloadQueryObject("customerDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer)'s email marketing consent information. The customer must have an email address to update their consent. Records the [marketing state](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerEmailAddress#field-marketingState) (such as subscribed, pending, unsubscribed), [opt-in level](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerEmailAddress#field-marketingOptInLevel), and when and where the customer gave or withdrew consent.
     *
     * Only three values are accepted as input: SUBSCRIBED, UNSUBSCRIBED, and PENDING.
     * NOT_SUBSCRIBED, REDACTED, and INVALID cannot be set via this mutation; they are
     * read-only or internally-set states.
     */
    public function selectCustomerEmailMarketingConsentUpdate(ShopifyRootMutationCustomerEmailMarketingConsentUpdateArgumentsObject $argsObject): ShopifyCustomerEmailMarketingConsentUpdatePayloadQueryObject
    {
        $object = new ShopifyCustomerEmailMarketingConsentUpdatePayloadQueryObject("customerEmailMarketingConsentUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Generates a one-time activation URL for a [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) whose legacy customer account isn't yet enabled. Use this after importing customers or creating accounts that need activation.
     *
     * The generated URL expires after 30 days and becomes invalid if you generate a new one.
     *
     * > Note: The generated URL only works when legacy customer accounts are enabled on the shop. It only works for customers with disabled or invited [`account states`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer#field-Customer.fields.state). Attempting to generate a URL for an already-enabled customer returns an error.
     */
    public function selectCustomerGenerateAccountActivationUrl(ShopifyRootMutationCustomerGenerateAccountActivationUrlArgumentsObject $argsObject): ShopifyCustomerGenerateAccountActivationUrlPayloadQueryObject
    {
        $object = new ShopifyCustomerGenerateAccountActivationUrlPayloadQueryObject("customerGenerateAccountActivationUrl");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Merges two customers.
     *
     * The `customerOneId` and `customerTwoId` arguments don't guarantee which customer is kept. Shopify
     * selects the resulting customer in this order:
     * 1. If `overrideFields.customerIdOfEmailToKeep` is provided and valid, then the selected customer is kept.
     * 2. If exactly one customer has an email address, then that customer is kept.
     * 3. If both customers have email addresses, then account state and email marketing consent determine
     *    the customer that's kept: an `enabled` account wins over other account states; otherwise, an
     *    `invited` account can win when consent doesn't already prefer `subscribed` or `pending`; otherwise
     *    the consent result is used. If those rules don't prefer either customer, then `customerTwoId` is kept.
     * 4. If neither customer has an email address, then `customerTwoId` is kept.
     *
     * Use `customerMergePreview` and `resultingCustomerId` to check which customer will be kept before merging.
     */
    public function selectCustomerMerge(ShopifyRootMutationCustomerMergeArgumentsObject $argsObject): ShopifyCustomerMergePayloadQueryObject
    {
        $object = new ShopifyCustomerMergePayloadQueryObject("customerMerge");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a vaulted payment method for a customer from duplication data.
     *
     * This data must be obtained from another shop within the same organization.
     *
     * Currently, this only supports Shop Pay payment methods. This is only available for selected partner apps.
     */
    public function selectCustomerPaymentMethodCreateFromDuplicationData(ShopifyRootMutationCustomerPaymentMethodCreateFromDuplicationDataArgumentsObject $argsObject): ShopifyCustomerPaymentMethodCreateFromDuplicationDataPayloadQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodCreateFromDuplicationDataPayloadQueryObject("customerPaymentMethodCreateFromDuplicationData");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a credit card payment method for a customer using a session id.
     * These values are only obtained through card imports happening from a PCI compliant environment.
     * Please use customerPaymentMethodRemoteCreate if you are not managing credit cards directly.
     */
    public function selectCustomerPaymentMethodCreditCardCreate(ShopifyRootMutationCustomerPaymentMethodCreditCardCreateArgumentsObject $argsObject): ShopifyCustomerPaymentMethodCreditCardCreatePayloadQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodCreditCardCreatePayloadQueryObject("customerPaymentMethodCreditCardCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates an existing vaulted credit card payment method for a customer, including billing address and card details. Requires a valid cardserver session from a PCI-compliant environment. Use this when a customer's card details have changed (e.g., new expiration date or replacement card) and ongoing subscriptions or saved payment methods need to be updated.
     */
    public function selectCustomerPaymentMethodCreditCardUpdate(ShopifyRootMutationCustomerPaymentMethodCreditCardUpdateArgumentsObject $argsObject): ShopifyCustomerPaymentMethodCreditCardUpdatePayloadQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodCreditCardUpdatePayloadQueryObject("customerPaymentMethodCreditCardUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns encrypted data that can be used to duplicate the payment method in another shop within the same organization.
     *
     * Currently, this only supports Shop Pay payment methods. This is only available for selected partner apps.
     */
    public function selectCustomerPaymentMethodGetDuplicationData(ShopifyRootMutationCustomerPaymentMethodGetDuplicationDataArgumentsObject $argsObject): ShopifyCustomerPaymentMethodGetDuplicationDataPayloadQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodGetDuplicationDataPayloadQueryObject("customerPaymentMethodGetDuplicationData");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns a URL that allows the customer to update a specific payment method.
     *
     * Currently, `customerPaymentMethodGetUpdateUrl` only supports Shop Pay.
     */
    public function selectCustomerPaymentMethodGetUpdateUrl(ShopifyRootMutationCustomerPaymentMethodGetUpdateUrlArgumentsObject $argsObject): ShopifyCustomerPaymentMethodGetUpdateUrlPayloadQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodGetUpdateUrlPayloadQueryObject("customerPaymentMethodGetUpdateUrl");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a vaulted PayPal billing agreement for a customer, enabling recurring charges through PayPal. The billing agreement ID (starting with 'B-') must be obtained from PayPal. Once created, this payment method can be used for subscription billing or future order payments without requiring the customer to re-authenticate with PayPal.
     */
    public function selectCustomerPaymentMethodPaypalBillingAgreementCreate(ShopifyRootMutationCustomerPaymentMethodPaypalBillingAgreementCreateArgumentsObject $argsObject): ShopifyCustomerPaymentMethodPaypalBillingAgreementCreatePayloadQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodPaypalBillingAgreementCreatePayloadQueryObject("customerPaymentMethodPaypalBillingAgreementCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates the billing address associated with a customer's vaulted PayPal billing agreement. Use this when a customer's billing information has changed and their PayPal payment method record in Shopify needs to be updated accordingly.
     */
    public function selectCustomerPaymentMethodPaypalBillingAgreementUpdate(ShopifyRootMutationCustomerPaymentMethodPaypalBillingAgreementUpdateArgumentsObject $argsObject): ShopifyCustomerPaymentMethodPaypalBillingAgreementUpdatePayloadQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodPaypalBillingAgreementUpdatePayloadQueryObject("customerPaymentMethodPaypalBillingAgreementUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a customer payment method using identifiers from remote payment gateways like Stripe, Authorize.Net, or Braintree. Imports existing payment methods from external gateways and associates them with [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) objects in Shopify.
     *
     * The operation processes payment methods asynchronously. The returned [`CustomerPaymentMethod`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerPaymentMethod) initially has incomplete details while Shopify validates and processes the remote gateway information. Use the [`customerPaymentMethod`](https://shopify.dev/docs/api/admin-graphql/latest/queries/customerPaymentMethod) query to retrieve the payment method status until all details are available or the payment method is revoked.
     *
     * Learn more about [migrating customer payment methods from remote gateways](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/migrate-to-subscriptions-api/migrate-customer-information#step-2-import-payment-methods-for-customers).
     */
    public function selectCustomerPaymentMethodRemoteCreate(ShopifyRootMutationCustomerPaymentMethodRemoteCreateArgumentsObject $argsObject): ShopifyCustomerPaymentMethodRemoteCreatePayloadQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodRemoteCreatePayloadQueryObject("customerPaymentMethodRemoteCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Revokes a customer's vaulted payment method, preventing it from being used for future charges such as subscriptions, draft orders, or other payments. Revocation will fail if the payment method has active subscription contracts. Use this when a customer requests removal of their stored payment information or when a payment method is no longer valid.
     */
    public function selectCustomerPaymentMethodRevoke(ShopifyRootMutationCustomerPaymentMethodRevokeArgumentsObject $argsObject): ShopifyCustomerPaymentMethodRevokePayloadQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodRevokePayloadQueryObject("customerPaymentMethodRevoke");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sends an email to a customer containing a secure link to update a specific vaulted payment method. This is commonly used when a customer's credit card is expiring or has been declined, and they need to provide updated payment details for ongoing subscriptions. The email can be customized with sender and BCC fields.
     */
    public function selectCustomerPaymentMethodSendUpdateEmail(ShopifyRootMutationCustomerPaymentMethodSendUpdateEmailArgumentsObject $argsObject): ShopifyCustomerPaymentMethodSendUpdateEmailPayloadQueryObject
    {
        $object = new ShopifyCustomerPaymentMethodSendUpdateEmailPayloadQueryObject("customerPaymentMethodSendUpdateEmail");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Remove tax exemptions from a customer.
     */
    public function selectCustomerRemoveTaxExemptions(ShopifyRootMutationCustomerRemoveTaxExemptionsArgumentsObject $argsObject): ShopifyCustomerRemoveTaxExemptionsPayloadQueryObject
    {
        $object = new ShopifyCustomerRemoveTaxExemptionsPayloadQueryObject("customerRemoveTaxExemptions");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Replace tax exemptions for a customer.
     */
    public function selectCustomerReplaceTaxExemptions(ShopifyRootMutationCustomerReplaceTaxExemptionsArgumentsObject $argsObject): ShopifyCustomerReplaceTaxExemptionsPayloadQueryObject
    {
        $object = new ShopifyCustomerReplaceTaxExemptionsPayloadQueryObject("customerReplaceTaxExemptions");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Enqueues a request to erase customer's data. Read more [here](https://help.shopify.com/manual/privacy-and-security/privacy/processing-customer-data-requests#erase-customer-personal-data).
     *
     * To cancel the data erasure request use the [customerCancelDataErasure mutation](https://shopify.dev/api/admin-graphql/unstable/mutations/customerCancelDataErasure).
     */
    public function selectCustomerRequestDataErasure(ShopifyRootMutationCustomerRequestDataErasureArgumentsObject $argsObject): ShopifyCustomerRequestDataErasurePayloadQueryObject
    {
        $object = new ShopifyCustomerRequestDataErasurePayloadQueryObject("customerRequestDataErasure");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a customer segment members query.
     */
    public function selectCustomerSegmentMembersQueryCreate(ShopifyRootMutationCustomerSegmentMembersQueryCreateArgumentsObject $argsObject): ShopifyCustomerSegmentMembersQueryCreatePayloadQueryObject
    {
        $object = new ShopifyCustomerSegmentMembersQueryCreatePayloadQueryObject("customerSegmentMembersQueryCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sends an email invitation for a customer to create a legacy customer account. The invitation lets customers set up their password and activate their account in the online store.
     *
     * You can optionally customize the email content including the subject, sender, recipients, and message body. If you don't provide email customization, the store uses its default account invitation template.
     *
     * > Note: The invite only works when legacy customer accounts are enabled on the shop.
     */
    public function selectCustomerSendAccountInviteEmail(ShopifyRootMutationCustomerSendAccountInviteEmailArgumentsObject $argsObject): ShopifyCustomerSendAccountInviteEmailPayloadQueryObject
    {
        $object = new ShopifyCustomerSendAccountInviteEmailPayloadQueryObject("customerSendAccountInviteEmail");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates or updates a customer in a single mutation.
     *
     * Use this mutation when syncing information from an external data source into Shopify.
     *
     * This mutation can be used to create a new customer, update an existing customer by id, or
     * upsert a customer by a unique key (email or phone).
     *
     * To create a new customer omit the `identifier` argument.
     * To update an existing customer, include the `identifier` with the id of the customer to update.
     *
     * To perform an 'upsert' by unique key (email or phone)
     * use the `identifier` argument to upsert a customer by a unique key (email or phone). If a customer
     * with the specified unique key exists, it will be updated. If not, a new customer will be created with
     * that unique key.
     *
     * As of API version 2022-10, apps using protected customer data must meet the
     * protected customer data [requirements](https://shopify.dev/apps/store/data-protection/protected-customer-data)
     *
     * Any list field (e.g.
     * [addresses](https://shopify.dev/api/admin-graphql/unstable/input-objects/MailingAddressInput),
     * will be updated so that all included entries are either created or updated, and all existing entries not
     * included will be deleted.
     *
     * All other fields will be updated to the value passed. Omitted fields will not be updated.
     */
    public function selectCustomerSet(ShopifyRootMutationCustomerSetArgumentsObject $argsObject): ShopifyCustomerSetPayloadQueryObject
    {
        $object = new ShopifyCustomerSetPayloadQueryObject("customerSet");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a [customer](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer)'s SMS marketing consent information. The customer must have a phone number on their account to receive SMS marketing.
     *
     * You can set whether the customer subscribes or unsubscribes to SMS marketing and specify the [opt-in level](https://shopify.dev/docs/api/admin-graphql/latest/mutations/customerSmsMarketingConsentUpdate#arguments-input.fields.smsMarketingConsent.marketingOptInLevel). Optionally include when the consent was collected and which [location](https://shopify.dev/docs/api/admin-graphql/latest/mutations/customerSmsMarketingConsentUpdate#arguments-input.fields.smsMarketingConsent.sourceLocationId) collected it.
     */
    public function selectCustomerSmsMarketingConsentUpdate(ShopifyRootMutationCustomerSmsMarketingConsentUpdateArgumentsObject $argsObject): ShopifyCustomerSmsMarketingConsentUpdatePayloadQueryObject
    {
        $object = new ShopifyCustomerSmsMarketingConsentUpdatePayloadQueryObject("customerSmsMarketingConsentUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer)'s attributes including personal information and [`tax exemptions`](https://shopify.dev/docs/api/admin-graphql/latest/enums/TaxExemption).
     *
     * Apps using protected customer data must meet Shopify's [protected customer data requirements](https://shopify.dev/docs/apps/launch/protected-customer-data#requirements).
     */
    public function selectCustomerUpdate(ShopifyRootMutationCustomerUpdateArgumentsObject $argsObject): ShopifyCustomerUpdatePayloadQueryObject
    {
        $object = new ShopifyCustomerUpdatePayloadQueryObject("customerUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a customer's default address.
     */
    public function selectCustomerUpdateDefaultAddress(ShopifyRootMutationCustomerUpdateDefaultAddressArgumentsObject $argsObject): ShopifyCustomerUpdateDefaultAddressPayloadQueryObject
    {
        $object = new ShopifyCustomerUpdateDefaultAddressPayloadQueryObject("customerUpdateDefaultAddress");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a [customer](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer)'s WhatsApp marketing consent information. Shopify identifies the customer's WhatsApp account by their [phone number](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerPhoneNumber).
     *
     * You can subscribe or unsubscribe the customer from WhatsApp marketing and specify the [opt-in level](https://shopify.dev/docs/api/admin-graphql/latest/mutations/customerWhatsAppMarketingConsentUpdate#arguments-input.fields.whatsAppMarketingConsent.optInLevel). You can also include when and [where](https://shopify.dev/docs/api/admin-graphql/latest/mutations/customerWhatsAppMarketingConsentUpdate#arguments-input.fields.whatsAppMarketingConsent.sourceLocationId) the consent was collected.
     */
    public function selectCustomerWhatsAppMarketingConsentUpdate(ShopifyRootMutationCustomerWhatsAppMarketingConsentUpdateArgumentsObject $argsObject): ShopifyCustomerWhatsAppMarketingConsentUpdatePayloadQueryObject
    {
        $object = new ShopifyCustomerWhatsAppMarketingConsentUpdatePayloadQueryObject("customerWhatsAppMarketingConsentUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Opt out a customer from data sale.
     */
    public function selectDataSaleOptOut(ShopifyRootMutationDataSaleOptOutArgumentsObject $argsObject): ShopifyDataSaleOptOutPayloadQueryObject
    {
        $object = new ShopifyDataSaleOptOutPayloadQueryObject("dataSaleOptOut");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a [`DelegateAccessToken`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DelegateAccessToken) with a subset of the parent token's permissions.
     *
     * Delegate access tokens enable secure permission delegation to subsystems or services that need limited access to shop resources. Each token inherits only the scopes you specify, ensuring subsystems operate with minimal required permissions rather than full app access.
     *
     * Learn more about [delegating access tokens to subsystems](https://shopify.dev/docs/apps/build/authentication-authorization/access-tokens/use-delegate-tokens).
     */
    public function selectDelegateAccessTokenCreate(ShopifyRootMutationDelegateAccessTokenCreateArgumentsObject $argsObject): ShopifyDelegateAccessTokenCreatePayloadQueryObject
    {
        $object = new ShopifyDelegateAccessTokenCreatePayloadQueryObject("delegateAccessTokenCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Destroys a delegate access token.
     */
    public function selectDelegateAccessTokenDestroy(ShopifyRootMutationDelegateAccessTokenDestroyArgumentsObject $argsObject): ShopifyDelegateAccessTokenDestroyPayloadQueryObject
    {
        $object = new ShopifyDelegateAccessTokenDestroyPayloadQueryObject("delegateAccessTokenDestroy");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Activates and deactivates delivery customizations.
     */
    public function selectDeliveryCustomizationActivation(ShopifyRootMutationDeliveryCustomizationActivationArgumentsObject $argsObject): ShopifyDeliveryCustomizationActivationPayloadQueryObject
    {
        $object = new ShopifyDeliveryCustomizationActivationPayloadQueryObject("deliveryCustomizationActivation");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a delivery customization.
     */
    public function selectDeliveryCustomizationCreate(ShopifyRootMutationDeliveryCustomizationCreateArgumentsObject $argsObject): ShopifyDeliveryCustomizationCreatePayloadQueryObject
    {
        $object = new ShopifyDeliveryCustomizationCreatePayloadQueryObject("deliveryCustomizationCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a delivery customization.
     */
    public function selectDeliveryCustomizationDelete(ShopifyRootMutationDeliveryCustomizationDeleteArgumentsObject $argsObject): ShopifyDeliveryCustomizationDeletePayloadQueryObject
    {
        $object = new ShopifyDeliveryCustomizationDeletePayloadQueryObject("deliveryCustomizationDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a delivery customization.
     */
    public function selectDeliveryCustomizationUpdate(ShopifyRootMutationDeliveryCustomizationUpdateArgumentsObject $argsObject): ShopifyDeliveryCustomizationUpdatePayloadQueryObject
    {
        $object = new ShopifyDeliveryCustomizationUpdatePayloadQueryObject("deliveryCustomizationUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a [`DeliveryProfile`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DeliveryProfile) that defines shipping rates for specific products and locations.
     *
     * A delivery profile groups products with their shipping zones and rates. You can associate profiles with [`SellingPlanGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SellingPlanGroup) objects to customize shipping for subscriptions and pre-orders. Each profile contains [`DeliveryProfileLocationGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DeliveryProfileLocationGroup) objects that specify which [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) objects ship to which [`DeliveryZone`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DeliveryZone) objects with specific [`DeliveryMethodDefinition`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DeliveryMethodDefinition) objects and rates.
     *
     * **Shops that use market-driven shipping:** If the shop uses market-driven shipping (check it with `shop { features { marketDrivenShipping } }`, see [`ShopFeatures.marketDrivenShipping`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopFeatures)), checkout combines the shipping rates and options from the shop's market configuration and app-owned delivery profiles. Zones and rates from merchant-managed delivery profiles are ignored. In practice, merchant-managed profiles are the profiles that the [`merchantOwnedOnly`](https://shopify.dev/docs/api/admin-graphql/latest/queries/deliveryProfiles#arguments-merchantOwnedOnly) filter returns. A merchant-managed profile that you create is still saved, but its zones and rates have no effect on checkout while the merchant is using market-driven shipping. They apply again if the shop reverts to the legacy shipping profile system and stops using market-driven shipping. To set shipping options for a market-driven shipping shop, use [`marketUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/marketUpdate) or [`marketCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/marketCreate) and set the `delivery.shipping` input, or target an app-owned delivery profile. The `marketDrivenShipping` check and the `delivery` input on `marketUpdate` and `marketCreate` require API version 2026-07 or later.
     *
     * **Product and variant assignment still takes effect:** Associating a product, variant or selling plan group moves it out of its current profile, including a profile that an app manages. That can change the rates buyers see at checkout.
     *
     * Learn more about [building delivery profiles](https://shopify.dev/docs/apps/build/purchase-options/deferred/delivery-and-deferment/build-delivery-profiles).
     */
    public function selectDeliveryProfileCreate(ShopifyRootMutationDeliveryProfileCreateArgumentsObject $argsObject): ShopifyDeliveryProfileCreatePayloadQueryObject
    {
        $object = new ShopifyDeliveryProfileCreatePayloadQueryObject("deliveryProfileCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Enqueue the removal of a delivery profile.
     */
    public function selectDeliveryProfileRemove(ShopifyRootMutationDeliveryProfileRemoveArgumentsObject $argsObject): ShopifyDeliveryProfileRemovePayloadQueryObject
    {
        $object = new ShopifyDeliveryProfileRemovePayloadQueryObject("deliveryProfileRemove");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a [`DeliveryProfile`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DeliveryProfile)'s configuration, including its shipping zones, rates, and associated products.
     *
     * Modify location groups to control which fulfillment [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) objects serve specific geographic areas. Add or remove shipping zones with custom countries and provinces. Create or update shipping methods with rate definitions and delivery conditions. Associate or dissociate [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects and [`SellingPlanGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SellingPlanGroup) objects to determine which products use this profile's shipping rules.
     *
     * The mutation supports partial updates through dedicated input fields for creating, updating, and deleting specific components without affecting the entire profile structure.
     *
     * **Shops that use market-driven shipping:** If the shop uses market-driven shipping (check it with `shop { features { marketDrivenShipping } }`, see [`ShopFeatures.marketDrivenShipping`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShopFeatures)), checkout combines the shipping rates and options from the shop's market configuration and app-owned delivery profiles. Zones and rates from merchant-managed delivery profiles are ignored. In practice, merchant-managed profiles are the profiles that the [`merchantOwnedOnly`](https://shopify.dev/docs/api/admin-graphql/latest/queries/deliveryProfiles#arguments-merchantOwnedOnly) filter returns. Changes to the zones, rates, method definitions and conditions of these profiles are still saved, but they have no effect on checkout while the merchant is using market-driven shipping. The changes apply again if the shop reverts to the legacy shipping profile system and stops using market-driven shipping. To modify shipping options for market-driven shipping shop, use [`marketUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/marketUpdate) and set the `delivery.shipping` input, or target an app-owned delivery profile. The `marketDrivenShipping` check and the `delivery` input on `marketUpdate` require API version 2026-07 or later.
     *
     * **Product and variant assignment still takes effect:** Associating a product, variant or selling plan group moves it out of its current profile, including a profile that an app manages. That can change the rates buyers see at checkout.
     *
     * Learn more about [building delivery profiles](https://shopify.dev/docs/apps/build/purchase-options/deferred/delivery-and-deferment/build-delivery-profiles).
     */
    public function selectDeliveryProfileUpdate(ShopifyRootMutationDeliveryProfileUpdateArgumentsObject $argsObject): ShopifyDeliveryProfileUpdatePayloadQueryObject
    {
        $object = new ShopifyDeliveryProfileUpdatePayloadQueryObject("deliveryProfileUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates the delivery promise participants by adding or removing owners based on a branded promise handle.
     */
    public function selectDeliveryPromiseParticipantsUpdate(ShopifyRootMutationDeliveryPromiseParticipantsUpdateArgumentsObject $argsObject): ShopifyDeliveryPromiseParticipantsUpdatePayloadQueryObject
    {
        $object = new ShopifyDeliveryPromiseParticipantsUpdatePayloadQueryObject("deliveryPromiseParticipantsUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates or updates a delivery promise provider. Currently restricted to select approved delivery promise partners.
     */
    public function selectDeliveryPromiseProviderUpsert(ShopifyRootMutationDeliveryPromiseProviderUpsertArgumentsObject $argsObject): ShopifyDeliveryPromiseProviderUpsertPayloadQueryObject
    {
        $object = new ShopifyDeliveryPromiseProviderUpsertPayloadQueryObject("deliveryPromiseProviderUpsert");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Set the delivery settings for a shop.
     */
    public function selectDeliverySettingUpdate(?ShopifyRootMutationDeliverySettingUpdateArgumentsObject $argsObject = null): ShopifyDeliverySettingUpdatePayloadQueryObject
    {
        $object = new ShopifyDeliverySettingUpdatePayloadQueryObject("deliverySettingUpdate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Assigns a location as the shipping origin while using legacy compatibility mode for multi-location delivery profiles.
     * Deprecated as of 2026-04 and will be removed in a future version as single origin shipping mode has been retired.
     *
     * @deprecated Single origin shipping mode is no longer supported.
     */
    public function selectDeliveryShippingOriginAssign(ShopifyRootMutationDeliveryShippingOriginAssignArgumentsObject $argsObject): ShopifyDeliveryShippingOriginAssignPayloadQueryObject
    {
        $object = new ShopifyDeliveryShippingOriginAssignPayloadQueryObject("deliveryShippingOriginAssign");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Activates an automatic discount.
     */
    public function selectDiscountAutomaticActivate(ShopifyRootMutationDiscountAutomaticActivateArgumentsObject $argsObject): ShopifyDiscountAutomaticActivatePayloadQueryObject
    {
        $object = new ShopifyDiscountAutomaticActivatePayloadQueryObject("discountAutomaticActivate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates an automatic discount that's managed by an app.
     * Use this mutation with [Shopify Functions](https://shopify.dev/docs/apps/build/functions)
     * when you need advanced, custom, or dynamic discount capabilities that aren't supported by
     * [Shopify's native discount types](https://help.shopify.com/manual/discounts/discount-types).
     *
     * For example, use this mutation to create an automatic discount using an app's
     * "Volume" discount type that applies a percentage
     * off when customers purchase more than the minimum quantity of a product. For an example implementation,
     * refer to [our tutorial](https://shopify.dev/docs/apps/build/discounts/build-discount-function).
     *
     * > Note:
     * > To create code discounts with custom logic, use the
     * [`discountCodeAppCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountCodeAppCreate)
     * mutation.
     */
    public function selectDiscountAutomaticAppCreate(ShopifyRootMutationDiscountAutomaticAppCreateArgumentsObject $argsObject): ShopifyDiscountAutomaticAppCreatePayloadQueryObject
    {
        $object = new ShopifyDiscountAutomaticAppCreatePayloadQueryObject("discountAutomaticAppCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates an existing automatic discount that's managed by an app using
     * [Shopify Functions](https://shopify.dev/docs/apps/build/functions).
     * Use this mutation when you need advanced, custom, or
     * dynamic discount capabilities that aren't supported by
     * [Shopify's native discount types](https://help.shopify.com/manual/discounts/discount-types).
     *
     * For example, use this mutation to update a new "Volume" discount type that applies a percentage
     * off when customers purchase more than the minimum quantity of a product. For an example implementation,
     * refer to [our tutorial](https://shopify.dev/docs/apps/build/discounts/build-discount-function).
     *
     * > Note:
     * > To update code discounts with custom logic, use the
     * [`discountCodeAppUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountCodeAppUpdate)
     * mutation instead.
     */
    public function selectDiscountAutomaticAppUpdate(ShopifyRootMutationDiscountAutomaticAppUpdateArgumentsObject $argsObject): ShopifyDiscountAutomaticAppUpdatePayloadQueryObject
    {
        $object = new ShopifyDiscountAutomaticAppUpdatePayloadQueryObject("discountAutomaticAppUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates an
     * [amount off discount](https://help.shopify.com/manual/discounts/discount-types/percentage-fixed-amount)
     * that's automatically applied on a cart and at checkout.
     *
     * > Note:
     * > To create code discounts, use the
     * [`discountCodeBasicCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountCodeBasicCreate)
     * mutation.
     */
    public function selectDiscountAutomaticBasicCreate(ShopifyRootMutationDiscountAutomaticBasicCreateArgumentsObject $argsObject): ShopifyDiscountAutomaticBasicCreatePayloadQueryObject
    {
        $object = new ShopifyDiscountAutomaticBasicCreatePayloadQueryObject("discountAutomaticBasicCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates an existing
     * [amount off discount](https://help.shopify.com/manual/discounts/discount-types/percentage-fixed-amount)
     * that's automatically applied on a cart and at checkout.
     *
     * > Note:
     * > To update code discounts, use the
     * [`discountCodeBasicUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountCodeBasicUpdate)
     * mutation instead.
     */
    public function selectDiscountAutomaticBasicUpdate(ShopifyRootMutationDiscountAutomaticBasicUpdateArgumentsObject $argsObject): ShopifyDiscountAutomaticBasicUpdatePayloadQueryObject
    {
        $object = new ShopifyDiscountAutomaticBasicUpdatePayloadQueryObject("discountAutomaticBasicUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes multiple automatic discounts in a single operation, providing efficient bulk management for stores with extensive discount catalogs. This mutation processes deletions asynchronously to handle large volumes without blocking other operations.
     *
     * For example, when cleaning up expired seasonal promotions or removing outdated automatic discounts across product categories, merchants can delete dozens of discounts simultaneously rather than processing each individually.
     *
     * Use `DiscountAutomaticBulkDelete` to:
     * - Remove multiple automatic discounts efficiently
     * - Clean up expired or obsolete promotions
     * - Streamline discount management workflows
     * - Process large-scale discount removals asynchronously
     *
     * The operation returns a job object for tracking deletion progress and any validation errors encountered during processing.
     *
     * Learn more about [discount management](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountAutomatic).
     */
    public function selectDiscountAutomaticBulkDelete(?ShopifyRootMutationDiscountAutomaticBulkDeleteArgumentsObject $argsObject = null): ShopifyDiscountAutomaticBulkDeletePayloadQueryObject
    {
        $object = new ShopifyDiscountAutomaticBulkDeletePayloadQueryObject("discountAutomaticBulkDelete");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a
     * [buy X get Y discount (BXGY)](https://help.shopify.com/manual/discounts/discount-types/buy-x-get-y)
     * that's automatically applied on a cart and at checkout.
     *
     * > Note:
     * > To create code discounts, use the
     * [`discountCodeBxgyCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountCodeBxgyCreate)
     * mutation.
     */
    public function selectDiscountAutomaticBxgyCreate(ShopifyRootMutationDiscountAutomaticBxgyCreateArgumentsObject $argsObject): ShopifyDiscountAutomaticBxgyCreatePayloadQueryObject
    {
        $object = new ShopifyDiscountAutomaticBxgyCreatePayloadQueryObject("discountAutomaticBxgyCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates an existing
     * [buy X get Y discount (BXGY)](https://help.shopify.com/manual/discounts/discount-types/buy-x-get-y)
     * that's automatically applied on a cart and at checkout.
     *
     * > Note:
     * > To update code discounts, use the
     * [`discountCodeBxgyUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountCodeBxgyUpdate)
     * mutation instead.
     */
    public function selectDiscountAutomaticBxgyUpdate(ShopifyRootMutationDiscountAutomaticBxgyUpdateArgumentsObject $argsObject): ShopifyDiscountAutomaticBxgyUpdatePayloadQueryObject
    {
        $object = new ShopifyDiscountAutomaticBxgyUpdatePayloadQueryObject("discountAutomaticBxgyUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deactivates an automatic discount.
     */
    public function selectDiscountAutomaticDeactivate(ShopifyRootMutationDiscountAutomaticDeactivateArgumentsObject $argsObject): ShopifyDiscountAutomaticDeactivatePayloadQueryObject
    {
        $object = new ShopifyDiscountAutomaticDeactivatePayloadQueryObject("discountAutomaticDeactivate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes an existing automatic discount from the store, permanently removing it from all future order calculations. This mutation provides a clean way to remove promotional campaigns that are no longer needed.
     *
     * For example, when a seasonal promotion ends or a flash sale concludes, merchants can use this mutation to ensure the discount no longer applies to new orders while preserving historical order data.
     *
     * Use `DiscountAutomaticDelete` to:
     * - Remove expired promotional campaigns
     * - Clean up test discounts during development
     * - Delete automatic discounts that conflict with new promotions
     * - Maintain a clean discount configuration
     *
     * The mutation returns the ID of the deleted discount for confirmation and any validation errors if the deletion cannot be completed. Once deleted, the automatic discount will no longer appear in discount lists or apply to new customer orders.
     */
    public function selectDiscountAutomaticDelete(ShopifyRootMutationDiscountAutomaticDeleteArgumentsObject $argsObject): ShopifyDiscountAutomaticDeletePayloadQueryObject
    {
        $object = new ShopifyDiscountAutomaticDeletePayloadQueryObject("discountAutomaticDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates automatic free shipping discounts that apply to qualifying orders without requiring discount codes. These promotions automatically activate when customers meet specified criteria, streamlining the checkout experience.
     *
     * For example, a store might create an automatic free shipping discount for orders over variable pricing to encourage larger purchases, or offer free shipping to specific customer segments during promotional periods.
     *
     * Use `DiscountAutomaticFreeShippingCreate` to:
     * - Set up code-free shipping promotions
     * - Create order value-based shipping incentives
     * - Target specific customer groups with shipping benefits
     * - Establish location-based shipping discounts
     *
     * The mutation validates discount configuration and returns the created automatic discount node along with any configuration errors that need resolution.
     *
     * Learn more about [automatic discounts](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountAutomaticNode).
     */
    public function selectDiscountAutomaticFreeShippingCreate(ShopifyRootMutationDiscountAutomaticFreeShippingCreateArgumentsObject $argsObject): ShopifyDiscountAutomaticFreeShippingCreatePayloadQueryObject
    {
        $object = new ShopifyDiscountAutomaticFreeShippingCreatePayloadQueryObject("discountAutomaticFreeShippingCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates existing automatic free shipping discounts, allowing merchants to modify promotion criteria, shipping destinations, and eligibility requirements without recreating the entire discount structure.
     *
     * For example, extending a holiday free shipping promotion to include additional countries, adjusting the minimum order value threshold, or expanding customer eligibility to include new segments.
     *
     * Use `DiscountAutomaticFreeShippingUpdate` to:
     * - Modify shipping discount thresholds and criteria
     * - Expand or restrict geographic availability
     * - Update customer targeting and eligibility rules
     * - Adjust promotion timing and activation periods
     *
     * Changes take effect immediately for new orders, while the mutation validates all modifications and reports any configuration conflicts through user errors.
     *
     * Learn more about [managing automatic discounts](https://shopify.dev/docs/api/admin-graphql/latest/objects/DiscountAutomaticFreeShipping).
     */
    public function selectDiscountAutomaticFreeShippingUpdate(ShopifyRootMutationDiscountAutomaticFreeShippingUpdateArgumentsObject $argsObject): ShopifyDiscountAutomaticFreeShippingUpdatePayloadQueryObject
    {
        $object = new ShopifyDiscountAutomaticFreeShippingUpdatePayloadQueryObject("discountAutomaticFreeShippingUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds tags to multiple [discounts](https://help.shopify.com/manual/discounts/discount-types) asynchronously using one of the following:
     * - A search query
     * - A saved search ID
     * - A list of discount IDs
     *
     * For example, you can add tags to price rules that match a search criteria, or add tags to a predefined set of price rules.
     */
    public function selectDiscountBulkTagsAdd(ShopifyRootMutationDiscountBulkTagsAddArgumentsObject $argsObject): ShopifyDiscountBulkTagsAddPayloadQueryObject
    {
        $object = new ShopifyDiscountBulkTagsAddPayloadQueryObject("discountBulkTagsAdd");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes tags from multiple [discounts](https://help.shopify.com/manual/discounts/discount-types) asynchronously using one of the following:
     * - A search query
     * - A saved search ID
     * - A list of discount IDs
     *
     * For example, you can delete tags from price rules that match a search criteria, or delete tags from a predefined set of price rules.
     */
    public function selectDiscountBulkTagsRemove(ShopifyRootMutationDiscountBulkTagsRemoveArgumentsObject $argsObject): ShopifyDiscountBulkTagsRemovePayloadQueryObject
    {
        $object = new ShopifyDiscountBulkTagsRemovePayloadQueryObject("discountBulkTagsRemove");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Activates a previously created code discount, making it available for customers to use during checkout. This mutation transitions inactive discount codes into an active state where they can be applied to orders.
     *
     * For example, after creating a "SUMMER20" discount code but leaving it inactive during setup, merchants can activate it when ready to launch their summer promotion campaign.
     *
     * Use `DiscountCodeActivate` to:
     * - Launch scheduled promotional campaigns
     * - Reactivate previously paused discount codes
     * - Enable discount codes after configuration changes
     * - Control the timing of discount availability
     *
     * The mutation returns the updated discount code node with its new active status and handles any validation errors that might prevent activation, such as conflicting discount rules or invalid date ranges.
     */
    public function selectDiscountCodeActivate(ShopifyRootMutationDiscountCodeActivateArgumentsObject $argsObject): ShopifyDiscountCodeActivatePayloadQueryObject
    {
        $object = new ShopifyDiscountCodeActivatePayloadQueryObject("discountCodeActivate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a code discount. The discount type must be provided by an app extension that uses [Shopify Functions](https://shopify.dev/docs/apps/build/functions). Functions can implement [order](https://shopify.dev/docs/api/functions/reference/order-discounts), [product](https://shopify.dev/docs/api/functions/reference/product-discounts), or [shipping](https://shopify.dev/docs/api/functions/reference/shipping-discounts) discount functions. Use this mutation with Shopify Functions when you need custom logic beyond [Shopify's native discount types](https://help.shopify.com/manual/discounts/discount-types).
     *
     * For example, use this mutation to create a code discount using an app's "Volume" discount type that applies a percentage off when customers purchase more than the minimum quantity
     * of a product. For an example implementation, refer to [our tutorial](https://shopify.dev/docs/apps/build/discounts/build-discount-function).
     *
     * > Note:
     * > To create automatic discounts with custom logic, use [`discountAutomaticAppCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountAutomaticAppCreate).
     */
    public function selectDiscountCodeAppCreate(ShopifyRootMutationDiscountCodeAppCreateArgumentsObject $argsObject): ShopifyDiscountCodeAppCreatePayloadQueryObject
    {
        $object = new ShopifyDiscountCodeAppCreatePayloadQueryObject("discountCodeAppCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a code discount, where the discount type is provided by an app extension that uses [Shopify Functions](https://shopify.dev/docs/apps/build/functions). Use this mutation when you need advanced, custom, or dynamic discount capabilities that aren't supported by [Shopify's native discount types](https://help.shopify.com/manual/discounts/discount-types).
     *
     * > Note:
     * > To update automatic discounts, use [`discountAutomaticAppUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountAutomaticAppUpdate).
     */
    public function selectDiscountCodeAppUpdate(ShopifyRootMutationDiscountCodeAppUpdateArgumentsObject $argsObject): ShopifyDiscountCodeAppUpdatePayloadQueryObject
    {
        $object = new ShopifyDiscountCodeAppUpdatePayloadQueryObject("discountCodeAppUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates an [amount off discount](https://help.shopify.com/manual/discounts/discount-types/percentage-fixed-amount) that's applied on a cart and at checkout when a customer enters a code. Amount off discounts can be a percentage off or a fixed amount off.
     *
     * > Note:
     * > To create discounts that are automatically applied on a cart and at checkout, use the [`discountAutomaticBasicCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountAutomaticBasicCreate) mutation.
     */
    public function selectDiscountCodeBasicCreate(ShopifyRootMutationDiscountCodeBasicCreateArgumentsObject $argsObject): ShopifyDiscountCodeBasicCreatePayloadQueryObject
    {
        $object = new ShopifyDiscountCodeBasicCreatePayloadQueryObject("discountCodeBasicCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates an [amount off discount](https://help.shopify.com/manual/discounts/discount-types/percentage-fixed-amount) that's applied on a cart and at checkout when a customer enters a code. Amount off discounts can be a percentage off or a fixed amount off.
     *
     * > Note:
     * > To update discounts that are automatically applied on a cart and at checkout, use the [`discountAutomaticBasicUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountAutomaticBasicUpdate) mutation.
     */
    public function selectDiscountCodeBasicUpdate(ShopifyRootMutationDiscountCodeBasicUpdateArgumentsObject $argsObject): ShopifyDiscountCodeBasicUpdatePayloadQueryObject
    {
        $object = new ShopifyDiscountCodeBasicUpdatePayloadQueryObject("discountCodeBasicUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Activates multiple [code discounts](https://help.shopify.com/manual/discounts/discount-types#discount-codes) asynchronously using one of the following:
     * - A search query
     * - A saved search ID
     * - A list of discount code IDs
     *
     * For example, you can activate discounts for all codes that match a search criteria, or activate a predefined set of discount codes.
     */
    public function selectDiscountCodeBulkActivate(?ShopifyRootMutationDiscountCodeBulkActivateArgumentsObject $argsObject = null): ShopifyDiscountCodeBulkActivatePayloadQueryObject
    {
        $object = new ShopifyDiscountCodeBulkActivatePayloadQueryObject("discountCodeBulkActivate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Deactivates multiple [code-based discounts](https://help.shopify.com/manual/discounts/discount-types#discount-codes) asynchronously using one of the following:
     * - A search query
     * - A saved search ID
     * - A list of discount code IDs
     *
     * For example, you can deactivate discounts for all codes that match a search criteria, or deactivate a predefined set of discount codes.
     */
    public function selectDiscountCodeBulkDeactivate(?ShopifyRootMutationDiscountCodeBulkDeactivateArgumentsObject $argsObject = null): ShopifyDiscountCodeBulkDeactivatePayloadQueryObject
    {
        $object = new ShopifyDiscountCodeBulkDeactivatePayloadQueryObject("discountCodeBulkDeactivate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes multiple [code-based discounts](https://help.shopify.com/manual/discounts/discount-types#discount-codes) asynchronously using one of the following:
     * - A search query
     * - A saved search ID
     * - A list of discount code IDs
     *
     * For example, you can delete discounts for all codes that match a search criteria, or delete a predefined set of discount codes.
     */
    public function selectDiscountCodeBulkDelete(?ShopifyRootMutationDiscountCodeBulkDeleteArgumentsObject $argsObject = null): ShopifyDiscountCodeBulkDeletePayloadQueryObject
    {
        $object = new ShopifyDiscountCodeBulkDeletePayloadQueryObject("discountCodeBulkDelete");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a
     * [buy X get Y discount (BXGY)](https://help.shopify.com/manual/discounts/discount-types/buy-x-get-y)
     * that's applied on a cart and at checkout when a customer enters a code.
     *
     * > Note:
     * > To create discounts that are automatically applied on a cart and at checkout, use the
     * [`discountAutomaticBxgyCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountAutomaticBxgyCreate)
     * mutation.
     */
    public function selectDiscountCodeBxgyCreate(ShopifyRootMutationDiscountCodeBxgyCreateArgumentsObject $argsObject): ShopifyDiscountCodeBxgyCreatePayloadQueryObject
    {
        $object = new ShopifyDiscountCodeBxgyCreatePayloadQueryObject("discountCodeBxgyCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a
     * [buy X get Y discount (BXGY)](https://help.shopify.com/manual/discounts/discount-types/buy-x-get-y)
     * that's applied on a cart and at checkout when a customer enters a code.
     *
     * > Note:
     * > To update discounts that are automatically applied on a cart and at checkout, use the
     * [`discountAutomaticBxgyUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountAutomaticBxgyUpdate)
     * mutation.
     */
    public function selectDiscountCodeBxgyUpdate(ShopifyRootMutationDiscountCodeBxgyUpdateArgumentsObject $argsObject): ShopifyDiscountCodeBxgyUpdatePayloadQueryObject
    {
        $object = new ShopifyDiscountCodeBxgyUpdatePayloadQueryObject("discountCodeBxgyUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Temporarily suspends a code discount without permanently removing it from the store. Deactivation allows merchants to pause promotional campaigns while preserving the discount configuration for potential future use.
     *
     * For example, when a flash sale needs to end immediately or a discount code requires temporary suspension due to inventory issues, merchants can deactivate it to stop new redemptions while keeping the discount structure intact.
     *
     * Use `DiscountCodeDeactivate` to:
     * - Pause active promotional campaigns timely
     * - Temporarily suspend problematic discount codes
     * - Control discount availability during inventory shortages
     * - Maintain discount history while stopping usage
     *
     * Deactivated discounts remain in the system and can be reactivated later, unlike deletion which persistently removes the code. Customers attempting to use deactivated codes will receive appropriate error messages.
     */
    public function selectDiscountCodeDeactivate(ShopifyRootMutationDiscountCodeDeactivateArgumentsObject $argsObject): ShopifyDiscountCodeDeactivatePayloadQueryObject
    {
        $object = new ShopifyDiscountCodeDeactivatePayloadQueryObject("discountCodeDeactivate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes a code discount from the store, making it permanently unavailable for customer use. This mutation provides a clean way to eliminate discount codes that are no longer needed or have been replaced.
     *
     * For example, when a seasonal promotion ends or a discount code has been compromised, merchants can delete it entirely rather than just deactivating it, ensuring customers cannot attempt to use expired promotional codes.
     *
     * Use `DiscountCodeDelete` to:
     * - persistently remove outdated promotional codes
     * - Clean up discount code lists after campaigns end
     * - Eliminate compromised or leaked discount codes
     * - Maintain organized discount management
     *
     * Once deleted, the discount code cannot be recovered and any customer attempts to use it will fail. This differs from deactivation, which preserves the code for potential future reactivation.
     */
    public function selectDiscountCodeDelete(ShopifyRootMutationDiscountCodeDeleteArgumentsObject $argsObject): ShopifyDiscountCodeDeletePayloadQueryObject
    {
        $object = new ShopifyDiscountCodeDeletePayloadQueryObject("discountCodeDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates an [free shipping discount](https://help.shopify.com/manual/discounts/discount-types/free-shipping) that's applied on a cart and at checkout when a customer enters a code.
     *
     * > Note:
     * > To create discounts that are automatically applied on a cart and at checkout, use the [`discountAutomaticFreeShippingCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountAutomaticFreeShippingCreate) mutation.
     */
    public function selectDiscountCodeFreeShippingCreate(ShopifyRootMutationDiscountCodeFreeShippingCreateArgumentsObject $argsObject): ShopifyDiscountCodeFreeShippingCreatePayloadQueryObject
    {
        $object = new ShopifyDiscountCodeFreeShippingCreatePayloadQueryObject("discountCodeFreeShippingCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a [free shipping discount](https://help.shopify.com/manual/discounts/discount-types/free-shipping) that's applied on a cart and at checkout when a customer enters a code.
     *
     * > Note:
     * > To update a free shipping discount that's automatically applied on a cart and at checkout, use the [`discountAutomaticFreeShippingUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/discountAutomaticFreeShippingUpdate) mutation.
     */
    public function selectDiscountCodeFreeShippingUpdate(ShopifyRootMutationDiscountCodeFreeShippingUpdateArgumentsObject $argsObject): ShopifyDiscountCodeFreeShippingUpdatePayloadQueryObject
    {
        $object = new ShopifyDiscountCodeFreeShippingUpdatePayloadQueryObject("discountCodeFreeShippingUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Asynchronously delete
     * [discount codes](https://help.shopify.com/manual/discounts/discount-types#discount-codes)
     * in bulk that customers can use to redeem a discount.
     */
    public function selectDiscountCodeRedeemCodeBulkDelete(ShopifyRootMutationDiscountCodeRedeemCodeBulkDeleteArgumentsObject $argsObject): ShopifyDiscountCodeRedeemCodeBulkDeletePayloadQueryObject
    {
        $object = new ShopifyDiscountCodeRedeemCodeBulkDeletePayloadQueryObject("discountCodeRedeemCodeBulkDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Asynchronously add
     * [discount codes](https://help.shopify.com/manual/discounts/discount-types#discount-codes)
     * in bulk that customers can use to redeem a discount. You can use the `discountRedeemCodeBulkAdd` mutation
     * to automate the distribution of discount codes through emails or other
     * marketing channels.
     */
    public function selectDiscountRedeemCodeBulkAdd(ShopifyRootMutationDiscountRedeemCodeBulkAddArgumentsObject $argsObject): ShopifyDiscountRedeemCodeBulkAddPayloadQueryObject
    {
        $object = new ShopifyDiscountRedeemCodeBulkAddPayloadQueryObject("discountRedeemCodeBulkAdd");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates the evidence package for a Shopify Payments dispute. Merchants submit evidence — such as shipping confirmations, customer communications, and refund policies — to contest a dispute filed by a cardholder. This mutation updates the evidence fields.
     */
    public function selectDisputeEvidenceUpdate(ShopifyRootMutationDisputeEvidenceUpdateArgumentsObject $argsObject): ShopifyDisputeEvidenceUpdatePayloadQueryObject
    {
        $object = new ShopifyDisputeEvidenceUpdatePayloadQueryObject("disputeEvidenceUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds tags to multiple draft orders.
     */
    public function selectDraftOrderBulkAddTags(ShopifyRootMutationDraftOrderBulkAddTagsArgumentsObject $argsObject): ShopifyDraftOrderBulkAddTagsPayloadQueryObject
    {
        $object = new ShopifyDraftOrderBulkAddTagsPayloadQueryObject("draftOrderBulkAddTags");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes multiple draft orders.
     */
    public function selectDraftOrderBulkDelete(?ShopifyRootMutationDraftOrderBulkDeleteArgumentsObject $argsObject = null): ShopifyDraftOrderBulkDeletePayloadQueryObject
    {
        $object = new ShopifyDraftOrderBulkDeletePayloadQueryObject("draftOrderBulkDelete");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes tags from multiple draft orders.
     */
    public function selectDraftOrderBulkRemoveTags(ShopifyRootMutationDraftOrderBulkRemoveTagsArgumentsObject $argsObject): ShopifyDraftOrderBulkRemoveTagsPayloadQueryObject
    {
        $object = new ShopifyDraftOrderBulkRemoveTagsPayloadQueryObject("draftOrderBulkRemoveTags");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Calculates the properties of a [`DraftOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder) without creating it. Returns pricing information including [`CalculatedDraftOrderLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CalculatedDraftOrderLineItem) totals, shipping charges, applicable discounts, and tax calculations based on the provided [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) and [`MailingAddress`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MailingAddress) information.
     *
     * Use this mutation to preview total taxes and prices before creating a draft order. It's particularly useful when working with B2B [`PurchasingEntity`](https://shopify.dev/docs/api/admin-graphql/latest/unions/PurchasingEntity) or when you need to determine costs without committing to a draft order. Learn more about [calculating draft orders for B2B purchasing entities](https://shopify.dev/docs/apps/build/b2b/draft-orders#step-1-calculate-a-draft-order-for-a-purchasing-entity).
     */
    public function selectDraftOrderCalculate(ShopifyRootMutationDraftOrderCalculateArgumentsObject $argsObject): ShopifyDraftOrderCalculatePayloadQueryObject
    {
        $object = new ShopifyDraftOrderCalculatePayloadQueryObject("draftOrderCalculate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Completes a [draft order](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder) and
     * converts it into a [regular order](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order).
     * The order appears in the merchant's orders list, and the customer can be notified about their order.
     *
     * Use the `draftOrderComplete` mutation when a merchant is ready to finalize a draft order and create a real
     * order in their store. The `draftOrderComplete` mutation also supports sales channel attribution for tracking
     * order sources using the [`sourceName`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/draftOrderComplete#arguments-sourceName)
     * argument, [cart validation](https://shopify.dev/docs/apps/build/checkout/cart-checkout-validation)
     * controls for app integrations, and detailed error reporting for failed completions.
     *
     * You can complete a draft order with different [payment scenarios](https://help.shopify.com/manual/fulfillment/managing-orders/payments):
     *
     * - Mark the order as paid immediately.
     * - Set the order as payment pending using [payment terms](https://shopify.dev/docs/api/admin-graphql/latest/objects/PaymentTerms).
     * - Specify a custom payment amount.
     * - Select a specific payment gateway.
     *
     * > Note:
     * > When completing a draft order, inventory is [committed](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps#inventory-states)
     * for the items in the order. This means the items will no longer be available for other customers to purchase.
     * Make sure to verify inventory availability before completing the draft order.
     */
    public function selectDraftOrderComplete(ShopifyRootMutationDraftOrderCompleteArgumentsObject $argsObject): ShopifyDraftOrderCompletePayloadQueryObject
    {
        $object = new ShopifyDraftOrderCompletePayloadQueryObject("draftOrderComplete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a [draft order](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder)
     * with attributes such as customer information, line items, shipping and billing addresses, and payment terms.
     * Draft orders are useful for merchants that need to:
     *
     * - Create new orders for sales made by phone, in person, by chat, or elsewhere. When a merchant accepts payment for a draft order, an order is created.
     * - Send invoices to customers with a secure checkout link.
     * - Use custom items to represent additional costs or products not in inventory.
     * - Re-create orders manually from active sales channels.
     * - Sell products at discount or wholesale rates.
     * - Take pre-orders.
     *
     * After creating a draft order, you can:
     * - Send an invoice to the customer using the [`draftOrderInvoiceSend`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/draftOrderInvoiceSend) mutation.
     * - Complete the draft order using the [`draftOrderComplete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/draftOrderComplete) mutation.
     * - Update the draft order using the [`draftOrderUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/draftOrderUpdate) mutation.
     * - Duplicate a draft order using the [`draftOrderDuplicate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/draftOrderDuplicate) mutation.
     * - Delete the draft order using the [`draftOrderDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/draftOrderDelete) mutation.
     *
     * > Note:
     * > When you create a draft order, you can't [reserve or hold inventory](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps#inventory-states) for the items in the order by default.
     * > However, you can reserve inventory using the [`reserveInventoryUntil`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/draftOrderCreate#arguments-input.fields.reserveInventoryUntil) input.
     */
    public function selectDraftOrderCreate(ShopifyRootMutationDraftOrderCreateArgumentsObject $argsObject): ShopifyDraftOrderCreatePayloadQueryObject
    {
        $object = new ShopifyDraftOrderCreatePayloadQueryObject("draftOrderCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a draft order from order.
     */
    public function selectDraftOrderCreateFromOrder(ShopifyRootMutationDraftOrderCreateFromOrderArgumentsObject $argsObject): ShopifyDraftOrderCreateFromOrderPayloadQueryObject
    {
        $object = new ShopifyDraftOrderCreateFromOrderPayloadQueryObject("draftOrderCreateFromOrder");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a draft order.
     */
    public function selectDraftOrderDelete(ShopifyRootMutationDraftOrderDeleteArgumentsObject $argsObject): ShopifyDraftOrderDeletePayloadQueryObject
    {
        $object = new ShopifyDraftOrderDeletePayloadQueryObject("draftOrderDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Duplicates a draft order.
     */
    public function selectDraftOrderDuplicate(?ShopifyRootMutationDraftOrderDuplicateArgumentsObject $argsObject = null): ShopifyDraftOrderDuplicatePayloadQueryObject
    {
        $object = new ShopifyDraftOrderDuplicatePayloadQueryObject("draftOrderDuplicate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Previews a draft order invoice email.
     */
    public function selectDraftOrderInvoicePreview(ShopifyRootMutationDraftOrderInvoicePreviewArgumentsObject $argsObject): ShopifyDraftOrderInvoicePreviewPayloadQueryObject
    {
        $object = new ShopifyDraftOrderInvoicePreviewPayloadQueryObject("draftOrderInvoicePreview");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sends an invoice email for a [`DraftOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/DraftOrder). The invoice includes a secure checkout link for reviewing and paying for the order. Use the [`email`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/draftOrderInvoiceSend#arguments-email) argument to customize the email, such as the subject and message.
     */
    public function selectDraftOrderInvoiceSend(ShopifyRootMutationDraftOrderInvoiceSendArgumentsObject $argsObject): ShopifyDraftOrderInvoiceSendPayloadQueryObject
    {
        $object = new ShopifyDraftOrderInvoiceSendPayloadQueryObject("draftOrderInvoiceSend");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a draft order.
     *
     * If a checkout has been started for a draft order, any update to the draft will unlink the checkout. Checkouts
     * are created but not immediately completed when opening the merchant credit card modal in the admin, and when a
     * buyer opens the invoice URL. This is usually fine, but there is an edge case where a checkout is in progress
     * and the draft is updated before the checkout completes. This will not interfere with the checkout and order
     * creation, but if the link from draft to checkout is broken the draft will remain open even after the order is
     * created.
     */
    public function selectDraftOrderUpdate(ShopifyRootMutationDraftOrderUpdateArgumentsObject $argsObject): ShopifyDraftOrderUpdatePayloadQueryObject
    {
        $object = new ShopifyDraftOrderUpdatePayloadQueryObject("draftOrderUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates the server pixel to connect to an EventBridge endpoint.
     * Running this mutation deletes any previous subscriptions for the server pixel.
     */
    public function selectEventBridgeServerPixelUpdate(ShopifyRootMutationEventBridgeServerPixelUpdateArgumentsObject $argsObject): ShopifyEventBridgeServerPixelUpdatePayloadQueryObject
    {
        $object = new ShopifyEventBridgeServerPixelUpdatePayloadQueryObject("eventBridgeServerPixelUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a webhook subscription that notifies your [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) when specific events occur in a shop. Webhooks push event data to your endpoint immediately when changes happen, eliminating the need for polling.
     *
     * This mutation configures webhook delivery to an Amazon EventBridge partner event source. You can filter events using [Shopify API search syntax](https://shopify.dev/docs/api/usage/search-syntax) to receive only relevant webhooks, control which data fields are included in webhook payloads, and specify metafield namespaces to include.
     *
     * > Note:
     * > The Webhooks API version [configured in your app](https://shopify.dev/docs/apps/build/webhooks/subscribe/use-newer-api-version) determines the API version for webhook events. You can't specify it per subscription.
     *
     *
     * Building an app? If you only use app-specific webhooks, you won't need this. App-specific webhook subscriptions specified in your `shopify.app.toml` may be easier. They are automatically kept up to date by Shopify & require less maintenance. Please read [About managing webhook subscriptions](https://shopify.dev/docs/apps/build/webhooks/subscribe).
     *
     * @deprecated Use `webhookSubscriptionCreate` instead.
     */
    public function selectEventBridgeWebhookSubscriptionCreate(ShopifyRootMutationEventBridgeWebhookSubscriptionCreateArgumentsObject $argsObject): ShopifyEventBridgeWebhookSubscriptionCreatePayloadQueryObject
    {
        $object = new ShopifyEventBridgeWebhookSubscriptionCreatePayloadQueryObject("eventBridgeWebhookSubscriptionCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates an Amazon EventBridge webhook subscription.
     *
     * Building an app? If you only use app-specific webhooks, you won't need this. App-specific webhook subscriptions specified in your `shopify.app.toml` may be easier. They are automatically kept up to date by Shopify & require less maintenance. Please read [About managing webhook subscriptions](https://shopify.dev/docs/apps/build/webhooks/subscribe).
     *
     * @deprecated Use `webhookSubscriptionUpdate` instead.
     */
    public function selectEventBridgeWebhookSubscriptionUpdate(ShopifyRootMutationEventBridgeWebhookSubscriptionUpdateArgumentsObject $argsObject): ShopifyEventBridgeWebhookSubscriptionUpdatePayloadQueryObject
    {
        $object = new ShopifyEventBridgeWebhookSubscriptionUpdatePayloadQueryObject("eventBridgeWebhookSubscriptionUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Acknowledges file update failure by resetting FAILED status to READY and clearing any media errors.
     */
    public function selectFileAcknowledgeUpdateFailed(ShopifyRootMutationFileAcknowledgeUpdateFailedArgumentsObject $argsObject): ShopifyFileAcknowledgeUpdateFailedPayloadQueryObject
    {
        $object = new ShopifyFileAcknowledgeUpdateFailedPayloadQueryObject("fileAcknowledgeUpdateFailed");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates file assets for a store from external URLs or files that were previously uploaded using the
     * [`stagedUploadsCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/stageduploadscreate)
     * mutation.
     *
     * Use the `fileCreate` mutation to add various types of media and documents to your store. These files are added to the
     * [**Files** page](https://shopify.com/admin/settings/files) in the Shopify admin and can be referenced by other
     * resources in your store.
     *
     * The `fileCreate` mutation supports multiple file types:
     *
     * - **Images**: Product photos, variant images, and general store imagery
     * - **Videos**: Shopify-hosted videos for product demonstrations and marketing
     * - **External videos**: YouTube and Vimeo videos for enhanced product experiences
     * - **3D models**: Interactive 3D representations of products
     * - **Generic files**: PDFs, documents, and other file types for store resources
     *
     * The mutation handles duplicate filenames using configurable resolution modes that automatically append UUIDs,
     * replace existing files, or raise errors when conflicts occur.
     *
     * > Note:
     * > Files are processed asynchronously. Check the
     * > [`fileStatus`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/File#fields-fileStatus)
     * > field to monitor processing completion. The maximum number of files that can be created in a single batch is 250.
     *
     * After creating files, you can make subsequent updates using the following mutations:
     *
     * - [`fileUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/fileUpdate):
     * Update file properties such as alt text or replace file contents while preserving the same URL.
     * - [`fileDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/fileDelete):
     * Remove files from your store when they are no longer needed.
     *
     * To list all files in your store, use the
     * [`files`](https://shopify.dev/docs/api/admin-graphql/latest/queries/files) query.
     *
     * Learn how to manage
     * [product media and file assets](https://shopify.dev/docs/apps/build/online-store/product-media)
     * in your app.
     */
    public function selectFileCreate(ShopifyRootMutationFileCreateArgumentsObject $argsObject): ShopifyFileCreatePayloadQueryObject
    {
        $object = new ShopifyFileCreatePayloadQueryObject("fileCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes file assets that were previously uploaded to your store.
     *
     * Use the `fileDelete` mutation to permanently remove media and file assets from your store when they are no longer needed.
     * This mutation handles the complete removal of files from both your store's file library and any associated references
     * to products or other resources.
     *
     * The `fileDelete` mutation supports removal of multiple file types:
     *
     * - **Images**: Product photos, variant images, and general store imagery
     * - **Videos**: Shopify-hosted videos for product demonstrations and marketing content
     * - **External Videos**: YouTube and Vimeo videos linked to your products
     * - **3D models**: Interactive 3D representations of products
     * - **Generic files**: PDFs, documents, and other file types stored in your
     * [**Files** page](https://shopify.com/admin/settings/files)
     *
     * When you delete files that are referenced by products, the mutation automatically removes those references and
     * reorders any remaining media to maintain proper positioning. Product file references are database relationships
     * managed through a media reference system, not just links in product descriptions. The Shopify admin provides a UI
     * to manage these relationships, and when files are deleted, the system automatically cleans up all references.
     * Files that are currently being processed by other operations are rejected to prevent conflicts.
     *
     * > Caution:
     * > File deletion is permanent and can't be undone. When you delete a file that's being used in your store,
     * > it will immediately stop appearing wherever it was displayed. For example, if you delete a product image,
     * > that product will show a broken image or placeholder on your storefront and in the admin. The same applies
     * > to any other files linked from themes, blog posts, or pages. Before deleting files, you can use the
     * > [`files` query](https://shopify.dev/api/admin-graphql/latest/queries/files) to list and review
     * > your store's file assets.
     *
     * Learn how to manage
     * [product media and file assets](https://shopify.dev/docs/apps/build/online-store/product-media)
     * in your app.
     */
    public function selectFileDelete(ShopifyRootMutationFileDeleteArgumentsObject $argsObject): ShopifyFileDeletePayloadQueryObject
    {
        $object = new ShopifyFileDeletePayloadQueryObject("fileDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates properties, content, and metadata associated with an existing file asset that has already been uploaded to Shopify.
     *
     * Use the `fileUpdate` mutation to modify various aspects of files already stored in your store.
     * Files can be updated individually or in batches.
     *
     * The `fileUpdate` mutation supports updating multiple file properties:
     *
     * - **Alt text**: Update accessibility descriptions for images and other media.
     * - **File content**: Replace image or generic file content while maintaining the same URL.
     * - **Filename**: Modify file names (extension must match the original).
     * - **Product references**: Add or remove associations between files and products. Removing file-product associations
     * deletes the file from the product's media gallery and clears the image from any product variants that were using it.
     *
     * The mutation handles different file types with specific capabilities:
     *
     * - **Images**: Update preview images, original source, filename, and alt text.
     * - **Generic files**: Update original source, filename, and alt text.
     * - **Videos and 3D models**: Update alt text and product references.
     *
     * > Note:
     * > Files must be in `ready` state before they can be updated. The mutation includes file locking to prevent
     * > conflicts during updates. You can't simultaneously update both `originalSource` and `previewImageSource`.
     *
     * After updating files, you can use related mutations for additional file management:
     *
     * - [`fileCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/fileCreate):
     * Create new file assets from external URLs or staged uploads.
     * - [`fileDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/fileDelete):
     * Remove files from your store when they are no longer needed.
     *
     * Learn how to manage
     * [product media and file assets](https://shopify.dev/docs/apps/build/online-store/product-media)
     * in your app.
     */
    public function selectFileUpdate(ShopifyRootMutationFileUpdateArgumentsObject $argsObject): ShopifyFileUpdatePayloadQueryObject
    {
        $object = new ShopifyFileUpdatePayloadQueryObject("fileUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Generates a signature for a Flow action payload.
     */
    public function selectFlowGenerateSignature(ShopifyRootMutationFlowGenerateSignatureArgumentsObject $argsObject): ShopifyFlowGenerateSignaturePayloadQueryObject
    {
        $object = new ShopifyFlowGenerateSignaturePayloadQueryObject("flowGenerateSignature");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Triggers any workflows that begin with the trigger specified in the request body. To learn more, refer to [_Create Shopify Flow triggers_](https://shopify.dev/apps/flow/triggers).
     */
    public function selectFlowTriggerReceive(?ShopifyRootMutationFlowTriggerReceiveArgumentsObject $argsObject = null): ShopifyFlowTriggerReceivePayloadQueryObject
    {
        $object = new ShopifyFlowTriggerReceivePayloadQueryObject("flowTriggerReceive");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Cancels an existing [`Fulfillment`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Fulfillment) and reverses its effects on associated [`FulfillmentOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrder) objects. When you cancel a fulfillment, the system creates new fulfillment orders for the cancelled items so they can be fulfilled again.
     *
     * The cancellation affects fulfillment orders differently based on their fulfillment status. If a fulfillment order was entirely fulfilled, then it automatically closes. If a fulfillment order is partially fulfilled, then the remaining quantities adjust to include the cancelled items. The system creates new fulfillment orders at the original [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) when items are still stocked there, or at alternative locations based on the store's fulfillment priority settings.
     *
     * Learn more about [canceling fulfillments](https://shopify.dev/docs/apps/build/orders-fulfillment/fulfillment-service-apps/build-for-fulfillment-services#step-7-cancel-a-fulfillment).
     */
    public function selectFulfillmentCancel(ShopifyRootMutationFulfillmentCancelArgumentsObject $argsObject): ShopifyFulfillmentCancelPayloadQueryObject
    {
        $object = new ShopifyFulfillmentCancelPayloadQueryObject("fulfillmentCancel");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a fulfillment constraint rule and its metafield.
     */
    public function selectFulfillmentConstraintRuleCreate(ShopifyRootMutationFulfillmentConstraintRuleCreateArgumentsObject $argsObject): ShopifyFulfillmentConstraintRuleCreatePayloadQueryObject
    {
        $object = new ShopifyFulfillmentConstraintRuleCreatePayloadQueryObject("fulfillmentConstraintRuleCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a fulfillment constraint rule and its metafields.
     */
    public function selectFulfillmentConstraintRuleDelete(ShopifyRootMutationFulfillmentConstraintRuleDeleteArgumentsObject $argsObject): ShopifyFulfillmentConstraintRuleDeletePayloadQueryObject
    {
        $object = new ShopifyFulfillmentConstraintRuleDeletePayloadQueryObject("fulfillmentConstraintRuleDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Update a fulfillment constraint rule.
     */
    public function selectFulfillmentConstraintRuleUpdate(ShopifyRootMutationFulfillmentConstraintRuleUpdateArgumentsObject $argsObject): ShopifyFulfillmentConstraintRuleUpdatePayloadQueryObject
    {
        $object = new ShopifyFulfillmentConstraintRuleUpdatePayloadQueryObject("fulfillmentConstraintRuleUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a fulfillment for one or more [`FulfillmentOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrder) objects. The fulfillment orders are associated with the same [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) and are assigned to the same [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location).
     *
     * Use this mutation to mark items as fulfilled when they're ready to ship. You can specify tracking information, customer notification preferences, and which [`FulfillmentOrderLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/fulfillmentorderlineitem) objects to fulfill from each fulfillment order. If you don't specify line items, then the mutation fulfills all items in the fulfillment order.
     *
     * Learn more about [building fulfillment solutions](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/build-fulfillment-solutions#create-a-fulfillment).
     */
    public function selectFulfillmentCreate(ShopifyRootMutationFulfillmentCreateArgumentsObject $argsObject): ShopifyFulfillmentCreatePayloadQueryObject
    {
        $object = new ShopifyFulfillmentCreatePayloadQueryObject("fulfillmentCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a fulfillment for one or many fulfillment orders.
     * The fulfillment orders are associated with the same order and are assigned to the same location.
     *
     * @deprecated Use `fulfillmentCreate` instead.
     */
    public function selectFulfillmentCreateV2(ShopifyRootMutationFulfillmentCreateV2ArgumentsObject $argsObject): ShopifyFulfillmentCreateV2PayloadQueryObject
    {
        $object = new ShopifyFulfillmentCreateV2PayloadQueryObject("fulfillmentCreateV2");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a [`FulfillmentEvent`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentEvent) to track the shipment status and location of items that have shipped. Events capture status updates like carrier pickup, in transit, out for delivery, or delivered.
     *
     * Each event records the timestamp and current status of the [`Fulfillment`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Fulfillment). You can include optional details such as the location where the event occurred, estimated arrival time, and messages for tracking purposes.
     */
    public function selectFulfillmentEventCreate(ShopifyRootMutationFulfillmentEventCreateArgumentsObject $argsObject): ShopifyFulfillmentEventCreatePayloadQueryObject
    {
        $object = new ShopifyFulfillmentEventCreatePayloadQueryObject("fulfillmentEventCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Accept a cancellation request sent to a fulfillment service for a fulfillment order.
     */
    public function selectFulfillmentOrderAcceptCancellationRequest(ShopifyRootMutationFulfillmentOrderAcceptCancellationRequestArgumentsObject $argsObject): ShopifyFulfillmentOrderAcceptCancellationRequestPayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderAcceptCancellationRequestPayloadQueryObject("fulfillmentOrderAcceptCancellationRequest");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Accepts a fulfillment request that the fulfillment service has received for a [`FulfillmentOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrder) which signals that the fulfillment service will process and fulfill the order. The fulfillment service can optionally provide a message to the merchant and an estimated shipped date when accepting the request.
     *
     * Learn more about [accepting fulfillment requests](https://shopify.dev/docs/apps/build/orders-fulfillment/fulfillment-service-apps/build-for-fulfillment-services#accept-a-fulfillment-request).
     */
    public function selectFulfillmentOrderAcceptFulfillmentRequest(ShopifyRootMutationFulfillmentOrderAcceptFulfillmentRequestArgumentsObject $argsObject): ShopifyFulfillmentOrderAcceptFulfillmentRequestPayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderAcceptFulfillmentRequestPayloadQueryObject("fulfillmentOrderAcceptFulfillmentRequest");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Cancels a [`FulfillmentOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrder) and creates a replacement fulfillment order to represent the work left to be done. The original fulfillment order will be marked as closed.
     *
     * This mutation works when the fulfillment order has a `SUBMITTED` or `CANCELLATION_REQUESTED` status. For `SUBMITTED` orders, cancellation happens immediately because the fulfillment service hasn't accepted the request.
     *
     * > Note: Orders that have had cancellation requested but the cancellation has yet to be accepted by the fulfillment service might still have work completed despite cancellation.
     */
    public function selectFulfillmentOrderCancel(ShopifyRootMutationFulfillmentOrderCancelArgumentsObject $argsObject): ShopifyFulfillmentOrderCancelPayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderCancelPayloadQueryObject("fulfillmentOrderCancel");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Marks an in-progress fulfillment order as incomplete,
     * indicating the fulfillment service is unable to ship any remaining items,
     * and closes the fulfillment request.
     *
     * This mutation can only be called for fulfillment orders that meet the following criteria:
     *   - Assigned to a fulfillment service location,
     *   - The fulfillment request has been accepted,
     *   - The fulfillment order status is `IN_PROGRESS`.
     *
     * This mutation can only be called by the fulfillment service app that accepted the fulfillment request.
     * Calling this mutation returns the control of the fulfillment order to the merchant, allowing them to
     * move the fulfillment order line items to another location and fulfill from there,
     * remove and refund the line items, or to request fulfillment from the same fulfillment service again.
     *
     * Closing a fulfillment order is explained in
     * [the fulfillment service guide](https://shopify.dev/apps/build/orders-fulfillment/fulfillment-service-apps/build-for-fulfillment-services#step-7-optional-close-a-fulfillment-order).
     */
    public function selectFulfillmentOrderClose(ShopifyRootMutationFulfillmentOrderCloseArgumentsObject $argsObject): ShopifyFulfillmentOrderClosePayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderClosePayloadQueryObject("fulfillmentOrderClose");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Applies a fulfillment hold on a fulfillment order.
     *
     * As of the
     * [2025-01 API version](https://shopify.dev/changelog/apply-multiple-holds-to-a-single-fulfillment-order),
     * the mutation can be successfully executed on fulfillment orders that are already on hold.
     * To place multiple holds on a fulfillment order, apps need to supply the
     * [handle](https://shopify.dev/api/admin-graphql/latest/objects/FulfillmentHold#field-handle)
     * field. Each app can place up to
     * 10 active holds
     * per fulfillment order. If an app attempts to place more than this, the mutation will return
     * [a user error indicating that the limit has been reached](https://shopify.dev/api/admin-graphql/latest/enums/FulfillmentOrderHoldUserErrorCode#value-fulfillmentorderholdlimitreached).
     * The app would need to release one of its existing holds before being able to apply a new one.
     */
    public function selectFulfillmentOrderHold(ShopifyRootMutationFulfillmentOrderHoldArgumentsObject $argsObject): ShopifyFulfillmentOrderHoldPayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderHoldPayloadQueryObject("fulfillmentOrderHold");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Marks [fulfillment order line items](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrderLineItem) as ready for customer pickup. When executed, this mutation automatically sends a "Ready For Pickup" notification to the customer.
     *
     * Use this mutation for local pickup orders after the items have been prepared and are available for the customer to collect. You can specify one or more [fulfillment order](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrder) objects by providing the fulfillment order IDs in the [`lineItemsByFulfillmentOrder`](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/PreparedFulfillmentOrderLineItemsInput) field. This allows you to mark fulfillment order line items from different fulfillment orders as ready for pickup.
     */
    public function selectFulfillmentOrderLineItemsPreparedForPickup(ShopifyRootMutationFulfillmentOrderLineItemsPreparedForPickupArgumentsObject $argsObject): ShopifyFulfillmentOrderLineItemsPreparedForPickupPayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderLineItemsPreparedForPickupPayloadQueryObject("fulfillmentOrderLineItemsPreparedForPickup");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Merges a set or multiple sets of fulfillment orders together into one based on
     * line item inputs and quantities.
     */
    public function selectFulfillmentOrderMerge(ShopifyRootMutationFulfillmentOrderMergeArgumentsObject $argsObject): ShopifyFulfillmentOrderMergePayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderMergePayloadQueryObject("fulfillmentOrderMerge");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Changes the location which is assigned to fulfill a number of unfulfilled fulfillment order line items.
     *
     * Moving a fulfillment order will fail in the following circumstances:
     *
     * * The fulfillment order is closed.
     * * The fulfillment order has had progress manually reported. To move a fulfillment order that has had progress manually reported, the fulfillment order must first be marked as open resolving the ongoing progress state.
     * * The destination location doesn't stock the requested inventory item.
     * * The API client doesn't have the correct permissions.
     *
     * Line items which have already been fulfilled can't be re-assigned
     * and will always remain assigned to the original location.
     *
     * You can't change the assigned location while a fulfillment order has a
     * [request status](https://shopify.dev/docs/api/admin-graphql/latest/enums/FulfillmentOrderRequestStatus)
     * of `SUBMITTED`, `ACCEPTED`, `CANCELLATION_REQUESTED`, or `CANCELLATION_REJECTED`.
     * These request statuses mean that a fulfillment order is awaiting action by a fulfillment service
     * and can't be re-assigned without first having the fulfillment service accept a cancellation request.
     * This behavior is intended to prevent items from being fulfilled by multiple locations or fulfillment services.
     *
     * ### How re-assigning line items affects fulfillment orders
     *
     * **First scenario:** Re-assign all line items belonging to a fulfillment order to a new location.
     *
     * In this case, the
     * [assignedLocation](https://shopify.dev/docs/api/admin-graphql/latest/objects/fulfillmentorder#field-fulfillmentorder-assignedlocation)
     * of the original fulfillment order will be updated to the new location.
     *
     * **Second scenario:** Re-assign a subset of the line items belonging to a fulfillment order to a new location.
     * You can specify a subset of line items using the `fulfillmentOrderLineItems` parameter
     * (available as of the `2023-04` API version),
     * or specify that the original fulfillment order contains line items which have already been fulfilled.
     *
     * If the new location is already assigned to another active fulfillment order, on the same order, then
     * a new fulfillment order is created. The existing fulfillment order is closed and line items are recreated
     * in a new fulfillment order.
     */
    public function selectFulfillmentOrderMove(ShopifyRootMutationFulfillmentOrderMoveArgumentsObject $argsObject): ShopifyFulfillmentOrderMovePayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderMovePayloadQueryObject("fulfillmentOrderMove");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Marks a scheduled fulfillment order as open.
     *
     * From API version 2026-01, this will also mark a fulfillment order as open when it is assigned to a merchant managed location and has had progress reported.
     */
    public function selectFulfillmentOrderOpen(ShopifyRootMutationFulfillmentOrderOpenArgumentsObject $argsObject): ShopifyFulfillmentOrderOpenPayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderOpenPayloadQueryObject("fulfillmentOrderOpen");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Rejects a cancellation request sent to a fulfillment service for a fulfillment order.
     */
    public function selectFulfillmentOrderRejectCancellationRequest(ShopifyRootMutationFulfillmentOrderRejectCancellationRequestArgumentsObject $argsObject): ShopifyFulfillmentOrderRejectCancellationRequestPayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderRejectCancellationRequestPayloadQueryObject("fulfillmentOrderRejectCancellationRequest");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Rejects a fulfillment request sent to a fulfillment service for a fulfillment order.
     */
    public function selectFulfillmentOrderRejectFulfillmentRequest(ShopifyRootMutationFulfillmentOrderRejectFulfillmentRequestArgumentsObject $argsObject): ShopifyFulfillmentOrderRejectFulfillmentRequestPayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderRejectFulfillmentRequestPayloadQueryObject("fulfillmentOrderRejectFulfillmentRequest");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Releases the fulfillment hold on a fulfillment order.
     */
    public function selectFulfillmentOrderReleaseHold(ShopifyRootMutationFulfillmentOrderReleaseHoldArgumentsObject $argsObject): ShopifyFulfillmentOrderReleaseHoldPayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderReleaseHoldPayloadQueryObject("fulfillmentOrderReleaseHold");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Reports the progress of an open or in-progress fulfillment order.
     */
    public function selectFulfillmentOrderReportProgress(ShopifyRootMutationFulfillmentOrderReportProgressArgumentsObject $argsObject): ShopifyFulfillmentOrderReportProgressPayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderReportProgressPayloadQueryObject("fulfillmentOrderReportProgress");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Reschedules a scheduled fulfillment order.
     *
     * Updates the value of the `fulfillAt` field on a scheduled fulfillment order.
     *
     * The fulfillment order will be marked as ready for fulfillment at this date and time.
     */
    public function selectFulfillmentOrderReschedule(ShopifyRootMutationFulfillmentOrderRescheduleArgumentsObject $argsObject): ShopifyFulfillmentOrderReschedulePayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderReschedulePayloadQueryObject("fulfillmentOrderReschedule");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Splits [`FulfillmentOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrder) objects by moving the specified [`LineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) objects and quantities into a new fulfillment order.
     *
     * If the original fulfillment order can't be split due to its current state, then the mutation creates a replacement fulfillment order instead.
     */
    public function selectFulfillmentOrderSplit(ShopifyRootMutationFulfillmentOrderSplitArgumentsObject $argsObject): ShopifyFulfillmentOrderSplitPayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderSplitPayloadQueryObject("fulfillmentOrderSplit");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sends a cancellation request to the fulfillment service of a fulfillment order.
     */
    public function selectFulfillmentOrderSubmitCancellationRequest(ShopifyRootMutationFulfillmentOrderSubmitCancellationRequestArgumentsObject $argsObject): ShopifyFulfillmentOrderSubmitCancellationRequestPayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderSubmitCancellationRequestPayloadQueryObject("fulfillmentOrderSubmitCancellationRequest");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sends a fulfillment request to the fulfillment service assigned to a [`FulfillmentOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrder). The fulfillment service must then accept or reject the request before processing can begin.
     *
     * You can either request fulfillment for all line items or specify individual items with quantities for partial fulfillment. When requesting partial fulfillment, Shopify splits the original fulfillment order into two: one with the submitted items and another with the remaining unsubmitted items. Include an optional message to communicate special instructions to the fulfillment service, such as gift wrapping or handling requirements.
     *
     * Learn more about [managing fulfillment requests as a fulfillment service](https://shopify.dev/docs/apps/build/orders-fulfillment/fulfillment-service-apps/build-for-fulfillment-services#step-4-act-on-fulfillment-requests).
     */
    public function selectFulfillmentOrderSubmitFulfillmentRequest(ShopifyRootMutationFulfillmentOrderSubmitFulfillmentRequestArgumentsObject $argsObject): ShopifyFulfillmentOrderSubmitFulfillmentRequestPayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrderSubmitFulfillmentRequestPayloadQueryObject("fulfillmentOrderSubmitFulfillmentRequest");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Route the fulfillment orders to an alternative location, according to the shop's order routing settings. This involves:
     * * Finding an alternate location that can fulfill the fulfillment orders.
     * * Assigning the fulfillment orders to the new location.
     */
    public function selectFulfillmentOrdersReroute(ShopifyRootMutationFulfillmentOrdersRerouteArgumentsObject $argsObject): ShopifyFulfillmentOrdersReroutePayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrdersReroutePayloadQueryObject("fulfillmentOrdersReroute");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sets the latest date and time by which the fulfillment orders need to be fulfilled.
     */
    public function selectFulfillmentOrdersSetFulfillmentDeadline(ShopifyRootMutationFulfillmentOrdersSetFulfillmentDeadlineArgumentsObject $argsObject): ShopifyFulfillmentOrdersSetFulfillmentDeadlinePayloadQueryObject
    {
        $object = new ShopifyFulfillmentOrdersSetFulfillmentDeadlinePayloadQueryObject("fulfillmentOrdersSetFulfillmentDeadline");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a fulfillment service.
     *
     * ## Fulfillment service location
     *
     * When creating a fulfillment service, a new location will be automatically created on the shop
     * and will be associated with this fulfillment service.
     * This location will be named after the fulfillment service and inherit the shop's address.
     *
     * If you are using API version `2023-10` or later, and you need to specify custom attributes for the fulfillment service location
     * (for example, to change its address to a country different from the shop's country),
     * use the
     * [LocationEdit](https://shopify.dev/api/admin-graphql/latest/mutations/locationEdit)
     * mutation after creating the fulfillment service.
     */
    public function selectFulfillmentServiceCreate(ShopifyRootMutationFulfillmentServiceCreateArgumentsObject $argsObject): ShopifyFulfillmentServiceCreatePayloadQueryObject
    {
        $object = new ShopifyFulfillmentServiceCreatePayloadQueryObject("fulfillmentServiceCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a fulfillment service.
     */
    public function selectFulfillmentServiceDelete(ShopifyRootMutationFulfillmentServiceDeleteArgumentsObject $argsObject): ShopifyFulfillmentServiceDeletePayloadQueryObject
    {
        $object = new ShopifyFulfillmentServiceDeletePayloadQueryObject("fulfillmentServiceDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates the [`FulfillmentService`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentService) configuration, including its name, callback URL, and operational settings.
     *
     * The mutation modifies how the fulfillment service handles inventory tracking, shipping requirements, and package tracking support.
     *
     * > Note:
     * > To update the physical address or other location details of the fulfillment service, use the [`locationEdit`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/locationEdit) mutation instead.
     *
     * Learn more about [editing fulfillment service locations](https://shopify.dev/docs/apps/build/orders-fulfillment/fulfillment-service-apps/build-for-fulfillment-services#step-2-edit-locations).
     */
    public function selectFulfillmentServiceUpdate(ShopifyRootMutationFulfillmentServiceUpdateArgumentsObject $argsObject): ShopifyFulfillmentServiceUpdatePayloadQueryObject
    {
        $object = new ShopifyFulfillmentServiceUpdatePayloadQueryObject("fulfillmentServiceUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates tracking information for a fulfillment, including the carrier name, tracking numbers, and tracking URLs. You can provide either single or multiple tracking numbers for shipments with multiple packages.
     *
     * The mutation accepts a [`FulfillmentTrackingInput`](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/FulfillmentTrackingInput) that supports both single tracking (using [`number`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/fulfillmentTrackingInfoUpdate#arguments-trackingInfoInput.fields.number) and [`url`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/fulfillmentTrackingInfoUpdate#arguments-trackingInfoInput.fields.url) fields) and multi-package tracking (using [`numbers`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/fulfillmentTrackingInfoUpdate#arguments-trackingInfoInput.fields.numbers) and [`urls`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/fulfillmentTrackingInfoUpdate#arguments-trackingInfoInput.fields.urls) fields). When you specify a [supported carrier name](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentTrackingInfo#supported-tracking-companies), Shopify automatically generates tracking URLs for the provided tracking numbers.
     *
     * You can optionally notify customers about tracking updates with the [`notifyCustomer`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/fulfillmentTrackingInfoUpdate#arguments-notifyCustomer) argument. When enabled, customers receive shipping update emails with tracking details and receive notifications about future updates to the fulfillment.
     *
     * Learn more about [enabling tracking support](https://shopify.dev/docs/apps/build/orders-fulfillment/fulfillment-service-apps/build-for-fulfillment-services#step-9-optional-enable-tracking-support) for fulfillment services.
     */
    public function selectFulfillmentTrackingInfoUpdate(ShopifyRootMutationFulfillmentTrackingInfoUpdateArgumentsObject $argsObject): ShopifyFulfillmentTrackingInfoUpdatePayloadQueryObject
    {
        $object = new ShopifyFulfillmentTrackingInfoUpdatePayloadQueryObject("fulfillmentTrackingInfoUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates tracking information for a fulfillment.
     *
     * @deprecated Use `fulfillmentTrackingInfoUpdate` instead.
     */
    public function selectFulfillmentTrackingInfoUpdateV2(ShopifyRootMutationFulfillmentTrackingInfoUpdateV2ArgumentsObject $argsObject): ShopifyFulfillmentTrackingInfoUpdateV2PayloadQueryObject
    {
        $object = new ShopifyFulfillmentTrackingInfoUpdateV2PayloadQueryObject("fulfillmentTrackingInfoUpdateV2");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a new [`GiftCard`](https://shopify.dev/docs/api/admin-graphql/latest/objects/GiftCard) with a specified initial value. You can assign the gift card to a [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) or create it without assignment for manual distribution.
     *
     * You can customize the gift card with an optional code, expiration date, and internal note. If you don't provide a code, the system generates a random 16 character alphanumeric code. The mutation also supports scheduling gift card notifications to recipients, with a personalized message, through the [`recipientAttributes`](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/GiftCardCreateInput#fields-recipientAttributes) field on the `GiftCardCreateInput` input object.
     */
    public function selectGiftCardCreate(ShopifyRootMutationGiftCardCreateArgumentsObject $argsObject): ShopifyGiftCardCreatePayloadQueryObject
    {
        $object = new ShopifyGiftCardCreatePayloadQueryObject("giftCardCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds funds to an existing gift card, increasing its available balance. Use this when a merchant wants to top up a customer's gift card — for example, as a promotional bonus, a customer service gesture, or to reload a reusable gift card.
     */
    public function selectGiftCardCredit(ShopifyRootMutationGiftCardCreditArgumentsObject $argsObject): ShopifyGiftCardCreditPayloadQueryObject
    {
        $object = new ShopifyGiftCardCreditPayloadQueryObject("giftCardCredit");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deactivate a gift card. A deactivated gift card cannot be used by a customer.
     * A deactivated gift card cannot be re-enabled.
     */
    public function selectGiftCardDeactivate(ShopifyRootMutationGiftCardDeactivateArgumentsObject $argsObject): ShopifyGiftCardDeactivatePayloadQueryObject
    {
        $object = new ShopifyGiftCardDeactivatePayloadQueryObject("giftCardDeactivate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes funds from a gift card, decreasing its available balance. Use this for manual balance adjustments — for example, correcting an accidental over-credit or applying a fee.
     */
    public function selectGiftCardDebit(ShopifyRootMutationGiftCardDebitArgumentsObject $argsObject): ShopifyGiftCardDebitPayloadQueryObject
    {
        $object = new ShopifyGiftCardDebitPayloadQueryObject("giftCardDebit");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates or updates a
     * [`gift card`](https://shopify.dev/docs/api/admin-graphql/latest/objects/GiftCard)
     * product. This mutation is specifically designed for gift card products and automatically sets
     * the `giftCard` field to `true`, applies gift card variant defaults (non-taxable, no shipping
     * required, inventory untracked), and omits fields that aren't relevant to gift cards.
     *
     * For list fields like
     * [`variants`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/giftCardProductSet#arguments-input.fields.variants),
     * the mutation performs a full replacement: it creates new entries, updates existing ones, and
     * removes any entries not included in the input. For all other fields, only included fields
     * change and omitted fields remain unchanged.
     *
     * You can run the mutation synchronously to receive the updated product immediately, or
     * asynchronously by setting
     * [`synchronous`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/giftCardProductSet#arguments-synchronous)`: false`
     * to receive a
     * [`ProductSetOperation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductSetOperation)
     * object instead. Use the
     * [`productOperation`](https://shopify.dev/docs/api/admin-graphql/latest/queries/productOperation)
     * query to check the status and retrieve the product details when running asynchronously.
     *
     * > Note:
     * > The
     * [`issuanceCurrency`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/giftCardProductSet#arguments-input.fields.issuanceCurrency)
     * and [`crossCurrencyRedeemable`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/giftCardProductSet#arguments-input.fields.crossCurrencyRedeemable) fields can only be set during product creation. They can't be changed after the product is created.
     */
    public function selectGiftCardProductSet(ShopifyRootMutationGiftCardProductSetArgumentsObject $argsObject): ShopifyGiftCardProductSetPayloadQueryObject
    {
        $object = new ShopifyGiftCardProductSetPayloadQueryObject("giftCardProductSet");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sends a gift card notification. If the gift card has a designated recipient,
     * a purchase confirmation is sent instead. Both default email templates include the gift card code.
     *
     * By default, gift card notifications use the linked order's contact details, with the assigned customer's
     * details as a fallback. Purchase confirmations use the assigned customer's contact details.
     *
     * The gift card must have an assigned customer with an email address or phone number.
     * Returns an error without sending if the selected contact source has no contact information.
     * When both an email address and a phone number are available, the notification is sent by email.
     */
    public function selectGiftCardSendNotificationToCustomer(ShopifyRootMutationGiftCardSendNotificationToCustomerArgumentsObject $argsObject): ShopifyGiftCardSendNotificationToCustomerPayloadQueryObject
    {
        $object = new ShopifyGiftCardSendNotificationToCustomerPayloadQueryObject("giftCardSendNotificationToCustomer");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sends a notification to the designated recipient of a gift card, delivering the gift card code and redemption instructions. The notification is delivered using the recipient's available contact method. Use this to deliver or re-deliver the gift card to the intended recipient.
     */
    public function selectGiftCardSendNotificationToRecipient(ShopifyRootMutationGiftCardSendNotificationToRecipientArgumentsObject $argsObject): ShopifyGiftCardSendNotificationToRecipientPayloadQueryObject
    {
        $object = new ShopifyGiftCardSendNotificationToRecipientPayloadQueryObject("giftCardSendNotificationToRecipient");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates the properties of an existing gift card, such as its expiration date, note, or template suffix. Use this to modify gift card details — for example, extending an expiration date for a loyal customer or adding an internal note for tracking purposes.
     */
    public function selectGiftCardUpdate(ShopifyRootMutationGiftCardUpdateArgumentsObject $argsObject): ShopifyGiftCardUpdatePayloadQueryObject
    {
        $object = new ShopifyGiftCardUpdatePayloadQueryObject("giftCardUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Activates an inventory item at a [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) by creating an [`InventoryLevel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryLevel) that tracks stock quantities. This enables you to manage inventory for a [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) at the specified location.
     *
     * When you activate an inventory item, you can set its initial quantities. The [`available`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/inventoryActivate#arguments-available) argument sets the quantity that's available for sale. [`onHand`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/inventoryActivate#arguments-onHand) argument sets the total physical quantity at the location. If you don't specify quantities, then `available` and `onHand` default to zero.
     *
     * > Caution:
     * > As of version `2026-01`, this mutation supports an optional idempotency key using the `@idempotent` directive.
     * > As of version `2026-04`, the idempotency key is required and must be provided using the `@idempotent` directive.
     * > For more information, see the [idempotency documentation](https://shopify.dev/docs/api/usage/idempotent-requests).
     *
     * Learn more about [managing inventory quantities and states](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states).
     */
    public function selectInventoryActivate(ShopifyRootMutationInventoryActivateArgumentsObject $argsObject): ShopifyInventoryActivatePayloadQueryObject
    {
        $object = new ShopifyInventoryActivatePayloadQueryObject("inventoryActivate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adjusts quantities for inventory items by applying incremental changes at specific locations. Each adjustment modifies the quantity by a delta value rather than setting an absolute amount.
     *
     * The mutation tracks adjustments with a reason code and optional reference URI for audit trails. Returns an [`InventoryAdjustmentGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryAdjustmentGroup) that records all changes made in the operation.
     *
     * Learn more about [managing inventory quantities and states](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states#adjust-inventory-quantities).
     *
     * > Caution:
     * > As of version `2026-01`, this mutation supports an optional idempotency key using the `@idempotent` directive.
     * > As of version `2026-04`, the idempotency key is required and must be provided using the `@idempotent` directive.
     * > For more information, see the [idempotency documentation](https://shopify.dev/docs/api/usage/idempotent-requests).
     */
    public function selectInventoryAdjustQuantities(ShopifyRootMutationInventoryAdjustQuantitiesArgumentsObject $argsObject): ShopifyInventoryAdjustQuantitiesPayloadQueryObject
    {
        $object = new ShopifyInventoryAdjustQuantitiesPayloadQueryObject("inventoryAdjustQuantities");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Activates or deactivates an inventory item at multiple locations. When you activate an [`InventoryItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem) at a [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location), that location can stock and track quantities for that item. When you deactivate an inventory item at a location, the inventory item is no longer stocked at that location.
     *
     * The mutation accepts an inventory item ID and a list of location-specific activation settings. It returns the updated inventory item and any activated [`InventoryLevel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryLevel) objects.
     *
     * Learn more about [managing inventory quantities and states](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states#inventory-object-relationships).
     */
    public function selectInventoryBulkToggleActivation(ShopifyRootMutationInventoryBulkToggleActivationArgumentsObject $argsObject): ShopifyInventoryBulkToggleActivationPayloadQueryObject
    {
        $object = new ShopifyInventoryBulkToggleActivationPayloadQueryObject("inventoryBulkToggleActivation");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes an inventory item's quantities from a location, and turns off inventory at the location.
     */
    public function selectInventoryDeactivate(ShopifyRootMutationInventoryDeactivateArgumentsObject $argsObject): ShopifyInventoryDeactivatePayloadQueryObject
    {
        $object = new ShopifyInventoryDeactivatePayloadQueryObject("inventoryDeactivate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates an [`InventoryItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryItem)'s properties including whether inventory is tracked, cost, SKU, and whether shipping is required. Inventory items represent the goods available to be shipped to customers.
     */
    public function selectInventoryItemUpdate(ShopifyRootMutationInventoryItemUpdateArgumentsObject $argsObject): ShopifyInventoryItemUpdatePayloadQueryObject
    {
        $object = new ShopifyInventoryItemUpdatePayloadQueryObject("inventoryItemUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Moves inventory quantities for a single inventory item between different states at a single location. Use this mutation to reallocate inventory across quantity states without moving it between locations.
     *
     * Each change specifies the quantity to move, the source state and location, and the destination state and location. The mutation returns an [`InventoryAdjustmentGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryAdjustmentGroup) that tracks all changes made in a single operation, providing an audit trail with the reason and reference document URI.
     *
     * > Caution:
     * > As of version `2026-01`, this mutation supports an optional idempotency key using the `@idempotent` directive.
     * > As of version `2026-04`, the idempotency key is required and must be provided using the `@idempotent` directive.
     * > For more information, see the [idempotency documentation](https://shopify.dev/docs/api/usage/idempotent-requests).
     */
    public function selectInventoryMoveQuantities(ShopifyRootMutationInventoryMoveQuantitiesArgumentsObject $argsObject): ShopifyInventoryMoveQuantitiesPayloadQueryObject
    {
        $object = new ShopifyInventoryMoveQuantitiesPayloadQueryObject("inventoryMoveQuantities");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sets an inventory item's on-hand quantities to specific absolute values at designated locations. The mutation takes a reason for tracking purposes and a reference document URI for audit trails.
     *
     * Returns an [`InventoryAdjustmentGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryAdjustmentGroup) that tracks all changes made in this operation, including the delta values calculated from the previous quantities.
     *
     * > Caution:
     * > As of 2026-01, this mutation supports an optional idempotency key using the `@idempotent` directive.
     * > As of 2026-04, the idempotency key is required and must be provided using the `@idempotent` directive.
     * > For more information, see the [idempotency documentation](https://shopify.dev/docs/api/usage/idempotent-requests).
     *
     * @deprecated Use `inventorySetQuantities` to set on_hand or available quantites instead.
     */
    public function selectInventorySetOnHandQuantities(ShopifyRootMutationInventorySetOnHandQuantitiesArgumentsObject $argsObject): ShopifyInventorySetOnHandQuantitiesPayloadQueryObject
    {
        $object = new ShopifyInventorySetOnHandQuantitiesPayloadQueryObject("inventorySetOnHandQuantities");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Set quantities of specified name using absolute values. This mutation supports compare-and-swap (CAS) functionality to handle
     * concurrent requests properly.
     *
     * As of 2026-04, each quantity in `quantities` must include a `changeFromQuantity` value. The mutation only updates the
     * quantity if the persisted quantity matches `changeFromQuantity`, and otherwise returns a `CHANGE_FROM_QUANTITY_STALE` error.
     * In order to opt out of the check for a quantity, explicitly pass `null` as its `changeFromQuantity`. Omitting
     * `changeFromQuantity` returns an error.
     *
     * Before 2026-04, if `ignoreCompareQuantity` is not set to true,
     * the mutation will only update the quantity if the persisted quantity matches the `compareQuantity` value.
     * If the `compareQuantity` value does not match the persisted value, the mutation will return an error. In order to opt out
     * of the `compareQuantity` check, the `ignoreCompareQuantity` argument can be set to true.
     *
     * > Note:
     * > Only use this mutation if calling on behalf of a system that acts as the source of truth for inventory quantities,
     * > otherwise please consider using the [inventoryAdjustQuantities](https://shopify.dev/api/admin-graphql/latest/mutations/inventoryAdjustQuantities) mutation.
     * >
     * >
     * > Opting out of the compare-and-swap check can lead to inaccurate inventory quantities if multiple requests are made concurrently.
     * > It is recommended to always pass the expected current quantity as `changeFromQuantity` (or `compareQuantity` before 2026-04)
     * > to ensure the accuracy of the inventory quantities, and to opt out of the check (with a `null` `changeFromQuantity`, or
     * > `ignoreCompareQuantity` before 2026-04) only when necessary.
     * > For more information, refer to the [compare and swap documentation](https://shopify.dev/docs/apps/build/orders-fulfillment/inventory-management-apps/manage-quantities-states#compare-and-swap).
     *
     * > Caution:
     * > As of 2026-01, this mutation supports an optional idempotency key using the `@idempotent` directive.
     * > As of 2026-04, the idempotency key is required and must be provided using the `@idempotent` directive.
     * > For more information, see the [idempotency documentation](https://shopify.dev/docs/api/usage/idempotent-requests).
     */
    public function selectInventorySetQuantities(ShopifyRootMutationInventorySetQuantitiesArgumentsObject $argsObject): ShopifyInventorySetQuantitiesPayloadQueryObject
    {
        $object = new ShopifyInventorySetQuantitiesPayloadQueryObject("inventorySetQuantities");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds items to an inventory shipment.
     *
     * > Caution:
     * > As of 2026-01, this mutation supports an optional idempotency key using the `@idempotent` directive.
     * > As of 2026-04, the idempotency key is required and must be provided using the `@idempotent` directive.
     * > For more information, see the [idempotency documentation](https://shopify.dev/docs/api/usage/idempotent-requests).
     */
    public function selectInventoryShipmentAddItems(ShopifyRootMutationInventoryShipmentAddItemsArgumentsObject $argsObject): ShopifyInventoryShipmentAddItemsPayloadQueryObject
    {
        $object = new ShopifyInventoryShipmentAddItemsPayloadQueryObject("inventoryShipmentAddItems");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds a draft shipment to an inventory transfer.
     *
     * > Caution:
     * > As of 2026-01, this mutation supports an optional idempotency key using the `@idempotent` directive.
     * > As of 2026-04, the idempotency key is required and must be provided using the `@idempotent` directive.
     * > For more information, see the [idempotency documentation](https://shopify.dev/docs/api/usage/idempotent-requests).
     */
    public function selectInventoryShipmentCreate(ShopifyRootMutationInventoryShipmentCreateArgumentsObject $argsObject): ShopifyInventoryShipmentCreatePayloadQueryObject
    {
        $object = new ShopifyInventoryShipmentCreatePayloadQueryObject("inventoryShipmentCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds an in-transit shipment to an inventory transfer.
     *
     * > Caution:
     * > As of 2026-01, this mutation supports an optional idempotency key using the `@idempotent` directive.
     * > As of 2026-04, the idempotency key is required and must be provided using the `@idempotent` directive.
     * > For more information, see the [idempotency documentation](https://shopify.dev/docs/api/usage/idempotent-requests).
     */
    public function selectInventoryShipmentCreateInTransit(ShopifyRootMutationInventoryShipmentCreateInTransitArgumentsObject $argsObject): ShopifyInventoryShipmentCreateInTransitPayloadQueryObject
    {
        $object = new ShopifyInventoryShipmentCreateInTransitPayloadQueryObject("inventoryShipmentCreateInTransit");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes an inventory shipment. Only draft shipments can be deleted.
     */
    public function selectInventoryShipmentDelete(ShopifyRootMutationInventoryShipmentDeleteArgumentsObject $argsObject): ShopifyInventoryShipmentDeletePayloadQueryObject
    {
        $object = new ShopifyInventoryShipmentDeletePayloadQueryObject("inventoryShipmentDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Marks a draft inventory shipment as in transit.
     */
    public function selectInventoryShipmentMarkInTransit(ShopifyRootMutationInventoryShipmentMarkInTransitArgumentsObject $argsObject): ShopifyInventoryShipmentMarkInTransitPayloadQueryObject
    {
        $object = new ShopifyInventoryShipmentMarkInTransitPayloadQueryObject("inventoryShipmentMarkInTransit");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Receive an inventory shipment.
     *
     * > Caution:
     * > As of 2026-01, this mutation supports an optional idempotency key using the `@idempotent` directive.
     * > As of 2026-04, the idempotency key is required and must be provided using the `@idempotent` directive.
     * > For more information, see the [idempotency documentation](https://shopify.dev/docs/api/usage/idempotent-requests).
     */
    public function selectInventoryShipmentReceive(ShopifyRootMutationInventoryShipmentReceiveArgumentsObject $argsObject): ShopifyInventoryShipmentReceivePayloadQueryObject
    {
        $object = new ShopifyInventoryShipmentReceivePayloadQueryObject("inventoryShipmentReceive");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Remove items from an inventory shipment.
     */
    public function selectInventoryShipmentRemoveItems(ShopifyRootMutationInventoryShipmentRemoveItemsArgumentsObject $argsObject): ShopifyInventoryShipmentRemoveItemsPayloadQueryObject
    {
        $object = new ShopifyInventoryShipmentRemoveItemsPayloadQueryObject("inventoryShipmentRemoveItems");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sets the barcode on an inventory shipment.
     */
    public function selectInventoryShipmentSetBarcode(ShopifyRootMutationInventoryShipmentSetBarcodeArgumentsObject $argsObject): ShopifyInventoryShipmentSetBarcodePayloadQueryObject
    {
        $object = new ShopifyInventoryShipmentSetBarcodePayloadQueryObject("inventoryShipmentSetBarcode");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Edits the tracking info on an inventory shipment.
     */
    public function selectInventoryShipmentSetTracking(ShopifyRootMutationInventoryShipmentSetTrackingArgumentsObject $argsObject): ShopifyInventoryShipmentSetTrackingPayloadQueryObject
    {
        $object = new ShopifyInventoryShipmentSetTrackingPayloadQueryObject("inventoryShipmentSetTracking");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates items on an inventory shipment.
     */
    public function selectInventoryShipmentUpdateItemQuantities(ShopifyRootMutationInventoryShipmentUpdateItemQuantitiesArgumentsObject $argsObject): ShopifyInventoryShipmentUpdateItemQuantitiesPayloadQueryObject
    {
        $object = new ShopifyInventoryShipmentUpdateItemQuantitiesPayloadQueryObject("inventoryShipmentUpdateItemQuantities");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Cancels an inventory transfer.
     */
    public function selectInventoryTransferCancel(ShopifyRootMutationInventoryTransferCancelArgumentsObject $argsObject): ShopifyInventoryTransferCancelPayloadQueryObject
    {
        $object = new ShopifyInventoryTransferCancelPayloadQueryObject("inventoryTransferCancel");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a draft inventory transfer to move inventory items between [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) objects in your store. The transfer tracks which items to move, their quantities, and the origin and destination locations.
     *
     * Use [`inventoryTransferMarkAsReadyToShip`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/inventoryTransferMarkAsReadyToShip) to mark the transfer as ready to ship.
     *
     * > Caution:
     * > As of version `2026-01`, this mutation supports an optional idempotency key using the `@idempotent` directive.
     * > As of version `2026-04`, the idempotency key is required and must be provided using the `@idempotent` directive.
     * > For more information, see the [idempotency documentation](https://shopify.dev/docs/api/usage/idempotent-requests).
     */
    public function selectInventoryTransferCreate(ShopifyRootMutationInventoryTransferCreateArgumentsObject $argsObject): ShopifyInventoryTransferCreatePayloadQueryObject
    {
        $object = new ShopifyInventoryTransferCreatePayloadQueryObject("inventoryTransferCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates an inventory transfer in ready to ship.
     *
     * > Caution:
     * > As of 2026-01, this mutation supports an optional idempotency key using the `@idempotent` directive.
     * > As of 2026-04, the idempotency key is required and must be provided using the `@idempotent` directive.
     * > For more information, see the [idempotency documentation](https://shopify.dev/docs/api/usage/idempotent-requests).
     */
    public function selectInventoryTransferCreateAsReadyToShip(ShopifyRootMutationInventoryTransferCreateAsReadyToShipArgumentsObject $argsObject): ShopifyInventoryTransferCreateAsReadyToShipPayloadQueryObject
    {
        $object = new ShopifyInventoryTransferCreateAsReadyToShipPayloadQueryObject("inventoryTransferCreateAsReadyToShip");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes an inventory transfer.
     */
    public function selectInventoryTransferDelete(ShopifyRootMutationInventoryTransferDeleteArgumentsObject $argsObject): ShopifyInventoryTransferDeletePayloadQueryObject
    {
        $object = new ShopifyInventoryTransferDeletePayloadQueryObject("inventoryTransferDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * This mutation allows duplicating an existing inventory transfer. The duplicated transfer will have the same
     * line items and quantities as the original transfer, but will be in a draft state with no shipments.
     *
     * > Caution:
     * > As of 2026-01, this mutation supports an optional idempotency key using the `@idempotent` directive.
     * > As of 2026-04, the idempotency key is required and must be provided using the `@idempotent` directive.
     * > For more information, see the [idempotency documentation](https://shopify.dev/docs/api/usage/idempotent-requests).
     */
    public function selectInventoryTransferDuplicate(ShopifyRootMutationInventoryTransferDuplicateArgumentsObject $argsObject): ShopifyInventoryTransferDuplicatePayloadQueryObject
    {
        $object = new ShopifyInventoryTransferDuplicatePayloadQueryObject("inventoryTransferDuplicate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Edits an inventory transfer.
     */
    public function selectInventoryTransferEdit(ShopifyRootMutationInventoryTransferEditArgumentsObject $argsObject): ShopifyInventoryTransferEditPayloadQueryObject
    {
        $object = new ShopifyInventoryTransferEditPayloadQueryObject("inventoryTransferEdit");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sets an inventory transfer to ready to ship.
     */
    public function selectInventoryTransferMarkAsReadyToShip(ShopifyRootMutationInventoryTransferMarkAsReadyToShipArgumentsObject $argsObject): ShopifyInventoryTransferMarkAsReadyToShipPayloadQueryObject
    {
        $object = new ShopifyInventoryTransferMarkAsReadyToShipPayloadQueryObject("inventoryTransferMarkAsReadyToShip");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * This mutation removes [`InventoryTransferLineItem`s](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryTransferLineItem),
     * or portions of them, from a `DRAFT` or `READY_TO_SHIP` Transfer.
     *
     * For each referenced line item, if its entire quantity is still unallocated to a
     * shipment, the line item is removed; otherwise the line item remains on the
     * transfer with its quantity reduced to the allocated portion. Quantity allocated
     * to a shipment (whether the shipment is in draft, in transit, or already
     * received) is preserved.
     *
     * On `READY_TO_SHIP` transfers, removing items also returns the affected reserved
     * quantity to available inventory at the origin location.
     *
     * To change the quantity of a line item without removing it, use
     * [`inventoryTransferSetItems`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/inventoryTransferSetItems).
     */
    public function selectInventoryTransferRemoveItems(ShopifyRootMutationInventoryTransferRemoveItemsArgumentsObject $argsObject): ShopifyInventoryTransferRemoveItemsPayloadQueryObject
    {
        $object = new ShopifyInventoryTransferRemoveItemsPayloadQueryObject("inventoryTransferRemoveItems");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * This mutation sets the quantity for one or more line items on a Transfer.
     *
     * Only the items you include in the `lineItems` field are updated. Items already on
     * the transfer but not referenced in your update will stay unchanged. Each inventory
     * item may appear at most once in `lineItems`; duplicate `inventoryItemId` entries
     * are rejected.
     *
     * For each entry in `lineItems`:
     * - If the inventory item isn't yet on the transfer, a new line item is added with
     *   the provided quantity.
     * - If the inventory item is already on the transfer, the provided quantity
     *   replaces the line item's [`processableQuantity`](https://shopify.dev/docs/api/admin-graphql/latest/objects/InventoryTransferLineItem#field-InventoryTransferLineItem.fields.processableQuantity).
     *   Any quantity outside the processable portion (for example, already shipped or
     *   picked for shipment) is preserved, so the resulting total quantity equals the
     *   preserved portion plus the provided quantity.
     *
     * Passing a quantity of `0` is only allowed for transfers in `DRAFT` status; on
     * `READY_TO_SHIP` or `IN_PROGRESS` transfers it returns an `INVALID_QUANTITY` error.
     * On `DRAFT` transfers, `quantity: 0` leaves a zero-quantity line item on the
     * transfer; it does not remove the item. To remove a line item from a transfer, use
     * [`inventoryTransferRemoveItems`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/inventoryTransferRemoveItems).
     *
     * > Caution:
     * > As of 2026-01, this mutation supports an optional idempotency key using the `@idempotent` directive.
     * > As of 2026-04, the idempotency key is required and must be provided using the `@idempotent` directive.
     * > For more information, see the [idempotency documentation](https://shopify.dev/docs/api/usage/idempotent-requests).
     */
    public function selectInventoryTransferSetItems(ShopifyRootMutationInventoryTransferSetItemsArgumentsObject $argsObject): ShopifyInventoryTransferSetItemsPayloadQueryObject
    {
        $object = new ShopifyInventoryTransferSetItemsPayloadQueryObject("inventoryTransferSetItems");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Activates a location so that you can stock inventory at the location. Refer to the
     * [`isActive`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location#field-isactive) and
     * [`activatable`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location#field-activatable)
     * fields on the `Location` object.
     *
     * > Caution:
     * > As of 2026-01, this mutation supports an optional idempotency key using the `@idempotent` directive.
     * As of 2026-04, the idempotency key is required and must be provided using the `@idempotent` directive.
     * For more information, see the [idempotency documentation](https://shopify.dev/docs/api/usage/idempotent-requests).
     */
    public function selectLocationActivate(ShopifyRootMutationLocationActivateArgumentsObject $argsObject): ShopifyLocationActivatePayloadQueryObject
    {
        $object = new ShopifyLocationActivatePayloadQueryObject("locationActivate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds a new [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) where you can stock inventory and fulfill orders. Locations represent physical places like warehouses, retail stores, or fulfillment centers.
     *
     * The location requires a name and address with at least a country code. You can specify whether the location fulfills online orders, which determines if its inventory is available for online sales. You can also attach custom [metafields](https://shopify.dev/docs/apps/build/custom-data) to store additional information about the location.
     */
    public function selectLocationAdd(ShopifyRootMutationLocationAddArgumentsObject $argsObject): ShopifyLocationAddPayloadQueryObject
    {
        $object = new ShopifyLocationAddPayloadQueryObject("locationAdd");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deactivates a location and moves inventory, pending orders, and moving transfers " "to a destination location.
     *
     * > Caution:
     * > As of 2026-01, this mutation supports an optional idempotency key using the `@idempotent` directive.
     * As of 2026-04, the idempotency key is required and must be provided using the `@idempotent` directive.
     * For more information, see the [idempotency documentation](https://shopify.dev/docs/api/usage/idempotent-requests).
     */
    public function selectLocationDeactivate(ShopifyRootMutationLocationDeactivateArgumentsObject $argsObject): ShopifyLocationDeactivatePayloadQueryObject
    {
        $object = new ShopifyLocationDeactivatePayloadQueryObject("locationDeactivate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a location.
     */
    public function selectLocationDelete(ShopifyRootMutationLocationDeleteArgumentsObject $argsObject): ShopifyLocationDeletePayloadQueryObject
    {
        $object = new ShopifyLocationDeletePayloadQueryObject("locationDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates the properties of an existing [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location). You can modify the location's name, address, whether it fulfills online orders, and custom [`metafields`](https://shopify.dev/docs/apps/build/custom-data).
     *
     * Apps that created a [`FulfillmentService`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentService) can edit the associated location to ensure accurate representation of their fulfillment network.
     *
     * > Note:
     * > You can't disable the [`fulfillsOnlineOrders`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/locationEdit#arguments-input.fields.fulfillsOnlineOrders) setting for fulfillment service locations.
     *
     * Learn more about [editing locations for fulfillment services](https://shopify.dev/docs/apps/build/orders-fulfillment/fulfillment-service-apps/build-for-fulfillment-services#step-2-edit-locations).
     */
    public function selectLocationEdit(ShopifyRootMutationLocationEditArgumentsObject $argsObject): ShopifyLocationEditPayloadQueryObject
    {
        $object = new ShopifyLocationEditPayloadQueryObject("locationEdit");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Disables local pickup for a location.
     */
    public function selectLocationLocalPickupDisable(ShopifyRootMutationLocationLocalPickupDisableArgumentsObject $argsObject): ShopifyLocationLocalPickupDisablePayloadQueryObject
    {
        $object = new ShopifyLocationLocalPickupDisablePayloadQueryObject("locationLocalPickupDisable");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Enables local pickup for a location so customers can collect their orders in person. Configures the estimated pickup time that customers see at checkout and optional instructions for finding or accessing the pickup location.
     */
    public function selectLocationLocalPickupEnable(ShopifyRootMutationLocationLocalPickupEnableArgumentsObject $argsObject): ShopifyLocationLocalPickupEnablePayloadQueryObject
    {
        $object = new ShopifyLocationLocalPickupEnablePayloadQueryObject("locationLocalPickupEnable");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a [`Market`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Market) to deliver customized shopping experiences. Markets define various aspects of the buyer experience including pricing, product availability, custom content, inventory and fulfillment priorities, and payment methods.
     *
     * Define conditions to match buyers by region, company location, retail location, or other criteria. Configure [`MarketCurrencySettings`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MarketCurrencySettings) to control currency behavior. Set [`MarketPriceInclusions`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MarketPriceInclusions) to determine tax and duty display. Assign [`Catalog`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Catalog) objects and [`MarketWebPresence`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MarketWebPresence) configurations to control product availability and SEO strategy.
     *
     * Learn more about [Shopify Markets](https://shopify.dev/docs/apps/build/markets).
     */
    public function selectMarketCreate(ShopifyRootMutationMarketCreateArgumentsObject $argsObject): ShopifyMarketCreatePayloadQueryObject
    {
        $object = new ShopifyMarketCreatePayloadQueryObject("marketCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates currency settings of a market.
     *
     * @deprecated Use `marketCreate` and `marketUpdate` for creating and updating
    market currency settings, respectively. Removed in API version 2027-01.
     */
    public function selectMarketCurrencySettingsUpdate(ShopifyRootMutationMarketCurrencySettingsUpdateArgumentsObject $argsObject): ShopifyMarketCurrencySettingsUpdatePayloadQueryObject
    {
        $object = new ShopifyMarketCurrencySettingsUpdatePayloadQueryObject("marketCurrencySettingsUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a market definition.
     */
    public function selectMarketDelete(ShopifyRootMutationMarketDeleteArgumentsObject $argsObject): ShopifyMarketDeletePayloadQueryObject
    {
        $object = new ShopifyMarketDeletePayloadQueryObject("marketDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates or updates market localizations.
     */
    public function selectMarketLocalizationsRegister(ShopifyRootMutationMarketLocalizationsRegisterArgumentsObject $argsObject): ShopifyMarketLocalizationsRegisterPayloadQueryObject
    {
        $object = new ShopifyMarketLocalizationsRegisterPayloadQueryObject("marketLocalizationsRegister");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes market localizations.
     */
    public function selectMarketLocalizationsRemove(ShopifyRootMutationMarketLocalizationsRemoveArgumentsObject $argsObject): ShopifyMarketLocalizationsRemovePayloadQueryObject
    {
        $object = new ShopifyMarketLocalizationsRemovePayloadQueryObject("marketLocalizationsRemove");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a market region.
     *
     * @deprecated Use `marketUpdate` instead.
     */
    public function selectMarketRegionDelete(ShopifyRootMutationMarketRegionDeleteArgumentsObject $argsObject): ShopifyMarketRegionDeletePayloadQueryObject
    {
        $object = new ShopifyMarketRegionDeletePayloadQueryObject("marketRegionDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates regions that belong to an existing market.
     *
     * @deprecated This mutation is deprecated and will be removed in the future. Use `marketCreate` or `marketUpdate` instead.
     */
    public function selectMarketRegionsCreate(ShopifyRootMutationMarketRegionsCreateArgumentsObject $argsObject): ShopifyMarketRegionsCreatePayloadQueryObject
    {
        $object = new ShopifyMarketRegionsCreatePayloadQueryObject("marketRegionsCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a list of market regions.
     *
     * @deprecated Use `marketUpdate` instead.
     */
    public function selectMarketRegionsDelete(ShopifyRootMutationMarketRegionsDeleteArgumentsObject $argsObject): ShopifyMarketRegionsDeletePayloadQueryObject
    {
        $object = new ShopifyMarketRegionsDeletePayloadQueryObject("marketRegionsDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates the properties of a market.
     */
    public function selectMarketUpdate(ShopifyRootMutationMarketUpdateArgumentsObject $argsObject): ShopifyMarketUpdatePayloadQueryObject
    {
        $object = new ShopifyMarketUpdatePayloadQueryObject("marketUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a web presence for a market.
     *
     * @deprecated Use `webPresenceCreate` instead.
     */
    public function selectMarketWebPresenceCreate(ShopifyRootMutationMarketWebPresenceCreateArgumentsObject $argsObject): ShopifyMarketWebPresenceCreatePayloadQueryObject
    {
        $object = new ShopifyMarketWebPresenceCreatePayloadQueryObject("marketWebPresenceCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a market web presence.
     *
     * @deprecated Use `webPresenceDelete` instead.
     */
    public function selectMarketWebPresenceDelete(ShopifyRootMutationMarketWebPresenceDeleteArgumentsObject $argsObject): ShopifyMarketWebPresenceDeletePayloadQueryObject
    {
        $object = new ShopifyMarketWebPresenceDeletePayloadQueryObject("marketWebPresenceDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a market web presence.
     *
     * @deprecated Use `webPresenceUpdate` instead.
     */
    public function selectMarketWebPresenceUpdate(ShopifyRootMutationMarketWebPresenceUpdateArgumentsObject $argsObject): ShopifyMarketWebPresenceUpdatePayloadQueryObject
    {
        $object = new ShopifyMarketWebPresenceUpdatePayloadQueryObject("marketWebPresenceUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes all external marketing activities. Deletion is performed by a background job, as it may take a bit of time to complete if a large number of activities are to be deleted. Attempting to create or modify external activities before the job has completed will result in the create/update/upsert mutation returning an error.
     */
    public function selectMarketingActivitiesDeleteAllExternal(?ShopifyRootMutationMarketingActivitiesDeleteAllExternalArgumentsObject $argsObject = null): ShopifyMarketingActivitiesDeleteAllExternalPayloadQueryObject
    {
        $object = new ShopifyMarketingActivitiesDeleteAllExternalPayloadQueryObject("marketingActivitiesDeleteAllExternal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Create new marketing activity. Marketing activity app extensions are deprecated and will be removed in the near future.
     */
    public function selectMarketingActivityCreate(ShopifyRootMutationMarketingActivityCreateArgumentsObject $argsObject): ShopifyMarketingActivityCreatePayloadQueryObject
    {
        $object = new ShopifyMarketingActivityCreatePayloadQueryObject("marketingActivityCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a new external marketing activity.
     *
     * @deprecated Use `marketingActivityUpsertExternal` instead.
     */
    public function selectMarketingActivityCreateExternal(ShopifyRootMutationMarketingActivityCreateExternalArgumentsObject $argsObject): ShopifyMarketingActivityCreateExternalPayloadQueryObject
    {
        $object = new ShopifyMarketingActivityCreateExternalPayloadQueryObject("marketingActivityCreateExternal");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes an external marketing activity.
     */
    public function selectMarketingActivityDeleteExternal(?ShopifyRootMutationMarketingActivityDeleteExternalArgumentsObject $argsObject = null): ShopifyMarketingActivityDeleteExternalPayloadQueryObject
    {
        $object = new ShopifyMarketingActivityDeleteExternalPayloadQueryObject("marketingActivityDeleteExternal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a marketing activity with the latest information. Marketing activity app extensions are deprecated and will be removed in the near future.
     */
    public function selectMarketingActivityUpdate(ShopifyRootMutationMarketingActivityUpdateArgumentsObject $argsObject): ShopifyMarketingActivityUpdatePayloadQueryObject
    {
        $object = new ShopifyMarketingActivityUpdatePayloadQueryObject("marketingActivityUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Update an external marketing activity.
     */
    public function selectMarketingActivityUpdateExternal(ShopifyRootMutationMarketingActivityUpdateExternalArgumentsObject $argsObject): ShopifyMarketingActivityUpdateExternalPayloadQueryObject
    {
        $object = new ShopifyMarketingActivityUpdateExternalPayloadQueryObject("marketingActivityUpdateExternal");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a new external marketing activity or updates an existing one. When optional fields are absent or null, associated information will be removed from an existing marketing activity.
     */
    public function selectMarketingActivityUpsertExternal(ShopifyRootMutationMarketingActivityUpsertExternalArgumentsObject $argsObject): ShopifyMarketingActivityUpsertExternalPayloadQueryObject
    {
        $object = new ShopifyMarketingActivityUpsertExternalPayloadQueryObject("marketingActivityUpsertExternal");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a new marketing engagement for a marketing activity.
     */
    public function selectMarketingEngagementCreate(ShopifyRootMutationMarketingEngagementCreateArgumentsObject $argsObject): ShopifyMarketingEngagementCreatePayloadQueryObject
    {
        $object = new ShopifyMarketingEngagementCreatePayloadQueryObject("marketingEngagementCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Marks engagement data for a channel so it no longer appears in reports. Activity-level data cannot be deleted directly; delete the MarketingActivity instead.
     *
     * @deprecated Channel-level engagements are deprecated. Activity-level engagement data cannot be deleted directly; delete the MarketingActivity instead.
     */
    public function selectMarketingEngagementsDelete(?ShopifyRootMutationMarketingEngagementsDeleteArgumentsObject $argsObject = null): ShopifyMarketingEngagementsDeletePayloadQueryObject
    {
        $object = new ShopifyMarketingEngagementsDeletePayloadQueryObject("marketingEngagementsDelete");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a navigation [`Menu`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Menu) for the online store. Menus organize links that help customers navigate to [collections](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection), [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product), [pages](https://shopify.dev/docs/api/admin-graphql/latest/objects/Page), [blogs](https://shopify.dev/docs/api/admin-graphql/latest/objects/Blog), and custom URLs.
     *
     * Each menu requires a unique handle for identification and can contain multiple [`MenuItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MenuItem) objects with nested sub-items up to three levels deep.
     */
    public function selectMenuCreate(ShopifyRootMutationMenuCreateArgumentsObject $argsObject): ShopifyMenuCreatePayloadQueryObject
    {
        $object = new ShopifyMenuCreatePayloadQueryObject("menuCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a menu.
     */
    public function selectMenuDelete(ShopifyRootMutationMenuDeleteArgumentsObject $argsObject): ShopifyMenuDeletePayloadQueryObject
    {
        $object = new ShopifyMenuDeletePayloadQueryObject("menuDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a [`Menu`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Menu) for display on the storefront. Modifies the menu's title and navigation structure, including nested [`MenuItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MenuItem) objects. You can update the handle for non-default menus.
     *
     * The items argument accepts a list of menu items with their nested structure. Each item can include nested items to create multi-level navigation hierarchies. Default menus have restricted updates—you can't change their handles.
     */
    public function selectMenuUpdate(ShopifyRootMutationMenuUpdateArgumentsObject $argsObject): ShopifyMenuUpdatePayloadQueryObject
    {
        $object = new ShopifyMenuUpdatePayloadQueryObject("menuUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a [`MetafieldDefinition`](https://shopify.dev/docs/api/admin-graphql/current/objects/MetafieldDefinition) that establishes structure and validation rules for metafields. The definition specifies the data type, validation constraints, and access permissions for metafields with a given namespace and key combination.
     *
     * When you create a new definition, the system validates any existing unstructured metafields matching the same owner type, namespace, and key against it. The system updates each valid metafield's type to match the definition. Invalid metafields remain unchanged but must conform to the definition when updated.
     *
     * Learn more about [creating metafield definitions](https://shopify.dev/docs/apps/build/custom-data/metafields/definitions).
     */
    public function selectMetafieldDefinitionCreate(ShopifyRootMutationMetafieldDefinitionCreateArgumentsObject $argsObject): ShopifyMetafieldDefinitionCreatePayloadQueryObject
    {
        $object = new ShopifyMetafieldDefinitionCreatePayloadQueryObject("metafieldDefinitionCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a [`MetafieldDefinition`](https://shopify.dev/docs/api/admin-graphql/current/objects/MetafieldDefinition). You can identify the definition by providing either its owner type, namespace, and key, or its global ID.
     *
     * When you set [`deleteAllAssociatedMetafields`](https://shopify.dev/docs/api/admin-graphql/current/mutations/metafieldDefinitionDelete#arguments-deleteAllAssociatedMetafields) to `true`, the mutation asynchronously deletes all [`Metafield`](https://shopify.dev/docs/api/admin-graphql/current/objects/Metafield) objects that use this definition. This option must be `true` when deleting definitions under the `$app` namespace.
     *
     * Learn more about [deleting metafield definitions](https://shopify.dev/docs/apps/build/custom-data/metafields/definitions).
     */
    public function selectMetafieldDefinitionDelete(?ShopifyRootMutationMetafieldDefinitionDeleteArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionDeletePayloadQueryObject
    {
        $object = new ShopifyMetafieldDefinitionDeletePayloadQueryObject("metafieldDefinitionDelete");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * You can organize your metafields in your Shopify admin by pinning/unpinning metafield definitions.
     * The order of your pinned metafield definitions determines the order in which your metafields are displayed
     * on the corresponding pages in your Shopify admin. By default, only pinned metafields are automatically displayed.
     */
    public function selectMetafieldDefinitionPin(?ShopifyRootMutationMetafieldDefinitionPinArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionPinPayloadQueryObject
    {
        $object = new ShopifyMetafieldDefinitionPinPayloadQueryObject("metafieldDefinitionPin");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * You can organize your metafields in your Shopify admin by pinning/unpinning metafield definitions.
     * The order of your pinned metafield definitions determines the order in which your metafields are displayed
     * on the corresponding pages in your Shopify admin. By default, only pinned metafields are automatically displayed.
     */
    public function selectMetafieldDefinitionUnpin(?ShopifyRootMutationMetafieldDefinitionUnpinArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionUnpinPayloadQueryObject
    {
        $object = new ShopifyMetafieldDefinitionUnpinPayloadQueryObject("metafieldDefinitionUnpin");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a [`MetafieldDefinition`](https://shopify.dev/docs/api/admin-graphql/current/objects/MetafieldDefinition)'s configuration and settings. You can modify the definition's name, description, validation rules, access settings, capabilities, and constraints.
     *
     * The mutation updates access settings that control visibility across different APIs, such as the [GraphQL Admin API](https://shopify.dev/docs/api/admin-graphql), [Storefront API](https://shopify.dev/docs/api/storefront), and [Customer Account API](https://shopify.dev/docs/api/customer). It also enables capabilities like admin filtering or unique value validation, and modifies constraints that determine which resource subtypes the definition applies to.
     *
     * > Note: The type, namespace, key, and owner type identify the definition and so can't be changed.
     *
     * Learn more about [updating metafield definitions](https://shopify.dev/docs/apps/build/custom-data/metafields/definitions).
     */
    public function selectMetafieldDefinitionUpdate(ShopifyRootMutationMetafieldDefinitionUpdateArgumentsObject $argsObject): ShopifyMetafieldDefinitionUpdatePayloadQueryObject
    {
        $object = new ShopifyMetafieldDefinitionUpdatePayloadQueryObject("metafieldDefinitionUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes [`Metafield`](https://shopify.dev/docs/api/admin-graphql/current/objects/Metafield) objects in bulk by specifying combinations of owner ID, namespace, and key.
     *
     * Returns the identifiers of successfully deleted metafields. If a specified metafield doesn't exist, then the mutation still succeeds but returns `null` for that identifier in the response.
     */
    public function selectMetafieldsDelete(ShopifyRootMutationMetafieldsDeleteArgumentsObject $argsObject): ShopifyMetafieldsDeletePayloadQueryObject
    {
        $object = new ShopifyMetafieldsDeletePayloadQueryObject("metafieldsDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sets metafield values. Metafield values will be set regardless if they were previously created or not.
     *
     * Allows a maximum of 25 metafields to be set at a time, with a maximum total request payload size of 10MB.
     *
     * This operation is atomic, meaning no changes are persisted if an error is encountered.
     *
     * As of `2024-07`, this operation supports compare-and-set functionality to better handle concurrent requests.
     * If `compareDigest` is set for any metafield, the mutation will only set that metafield if the persisted metafield value matches the digest used on `compareDigest`.
     * If the metafield doesn't exist yet, but you want to guarantee that the operation will run in a safe manner, set `compareDigest` to `null`.
     * The `compareDigest` value can be acquired by querying the metafield object and selecting `compareDigest` as a field.
     * If the `compareDigest` value does not match the digest for the persisted value, the mutation will return an error.
     * You can opt out of write guarantees by not sending `compareDigest` in the request.
     */
    public function selectMetafieldsSet(ShopifyRootMutationMetafieldsSetArgumentsObject $argsObject): ShopifyMetafieldsSetPayloadQueryObject
    {
        $object = new ShopifyMetafieldsSetPayloadQueryObject("metafieldsSet");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Asynchronously delete metaobjects and their associated metafields in bulk.
     */
    public function selectMetaobjectBulkDelete(ShopifyRootMutationMetaobjectBulkDeleteArgumentsObject $argsObject): ShopifyMetaobjectBulkDeletePayloadQueryObject
    {
        $object = new ShopifyMetaobjectBulkDeletePayloadQueryObject("metaobjectBulkDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a metaobject entry based on an existing [`MetaobjectDefinition`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MetaobjectDefinition). The type must match a definition that already exists in the shop.
     *
     * Specify field values using key-value pairs that correspond to the field definitions. The mutation generates a unique handle automatically if you don't provide one. You can also configure capabilities like publishable status to control the metaobject's visibility across channels.
     *
     * Learn more about [managing metaobjects](https://shopify.dev/docs/apps/build/custom-data/metaobjects/manage-metaobjects).
     */
    public function selectMetaobjectCreate(ShopifyRootMutationMetaobjectCreateArgumentsObject $argsObject): ShopifyMetaobjectCreatePayloadQueryObject
    {
        $object = new ShopifyMetaobjectCreatePayloadQueryObject("metaobjectCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a metaobject definition that establishes the structure for custom data objects in your store. The definition specifies the fields, data types, and access permissions that all [`Metaobject`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metaobject) entries of this type share.
     *
     * Use the `type` field to create a unique namespace for your metaobjects. Prefix the type with `$app:` to reserve the definition for your app's exclusive use. The definition can include capabilities like publishable status or translation eligibility, to extend how metaobjects integrate with Shopify's features.
     *
     * Learn more about [managing metaobjects](https://shopify.dev/docs/apps/build/custom-data/metaobjects/manage-metaobjects).
     */
    public function selectMetaobjectDefinitionCreate(ShopifyRootMutationMetaobjectDefinitionCreateArgumentsObject $argsObject): ShopifyMetaobjectDefinitionCreatePayloadQueryObject
    {
        $object = new ShopifyMetaobjectDefinitionCreatePayloadQueryObject("metaobjectDefinitionCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes the specified metaobject definition.
     * Also deletes all related metafield definitions, metaobjects, and metafields asynchronously.
     */
    public function selectMetaobjectDefinitionDelete(ShopifyRootMutationMetaobjectDefinitionDeleteArgumentsObject $argsObject): ShopifyMetaobjectDefinitionDeletePayloadQueryObject
    {
        $object = new ShopifyMetaobjectDefinitionDeletePayloadQueryObject("metaobjectDefinitionDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a [`MetaobjectDefinition`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MetaobjectDefinition)'s configuration and field structure. You can modify the definition's name, description, display name key, access controls, and capabilities, as well as those of all its fields.
     *
     * The mutation supports reordering fields when `resetFieldOrder` is `true`, which arranges submitted fields first followed by alphabetized omitted fields.
     *
     * Learn more about [managing metaobjects](https://shopify.dev/docs/apps/build/custom-data/metaobjects/manage-metaobjects).
     */
    public function selectMetaobjectDefinitionUpdate(ShopifyRootMutationMetaobjectDefinitionUpdateArgumentsObject $argsObject): ShopifyMetaobjectDefinitionUpdatePayloadQueryObject
    {
        $object = new ShopifyMetaobjectDefinitionUpdatePayloadQueryObject("metaobjectDefinitionUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes the specified metaobject and its associated metafields.
     */
    public function selectMetaobjectDelete(ShopifyRootMutationMetaobjectDeleteArgumentsObject $argsObject): ShopifyMetaobjectDeletePayloadQueryObject
    {
        $object = new ShopifyMetaobjectDeletePayloadQueryObject("metaobjectDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a [`Metaobject`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metaobject) with new field values, handle, or capabilities. [Metaobjects](https://shopify.dev/docs/apps/build/custom-data#what-are-metaobjects) are custom data structures that extend Shopify's data model.
     *
     * You can modify field values mapped to the metaobject's [`MetaobjectDefinition`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MetaobjectDefinition), update the handle for a unique identifier, and adjust capabilities like publishing status. When updating the handle, you can optionally create a redirect from the old handle to maintain existing references.
     */
    public function selectMetaobjectUpdate(ShopifyRootMutationMetaobjectUpdateArgumentsObject $argsObject): ShopifyMetaobjectUpdatePayloadQueryObject
    {
        $object = new ShopifyMetaobjectUpdatePayloadQueryObject("metaobjectUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates or updates a [`Metaobject`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metaobject) based on its handle. If a metaobject with the specified handle exists, the mutation updates it with the provided field values. If no matching metaobject exists, the mutation creates a new one.
     *
     * The handle serves as a unique identifier within a metaobject type. Field values map to the [`MetaobjectDefinition`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MetaobjectDefinition)'s field keys and overwrite existing values during updates.
     */
    public function selectMetaobjectUpsert(ShopifyRootMutationMetaobjectUpsertArgumentsObject $argsObject): ShopifyMetaobjectUpsertPayloadQueryObject
    {
        $object = new ShopifyMetaobjectUpsertPayloadQueryObject("metaobjectUpsert");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Create a mobile platform application.
     */
    public function selectMobilePlatformApplicationCreate(ShopifyRootMutationMobilePlatformApplicationCreateArgumentsObject $argsObject): ShopifyMobilePlatformApplicationCreatePayloadQueryObject
    {
        $object = new ShopifyMobilePlatformApplicationCreatePayloadQueryObject("mobilePlatformApplicationCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Delete a mobile platform application.
     */
    public function selectMobilePlatformApplicationDelete(ShopifyRootMutationMobilePlatformApplicationDeleteArgumentsObject $argsObject): ShopifyMobilePlatformApplicationDeletePayloadQueryObject
    {
        $object = new ShopifyMobilePlatformApplicationDeletePayloadQueryObject("mobilePlatformApplicationDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Update a mobile platform application.
     */
    public function selectMobilePlatformApplicationUpdate(ShopifyRootMutationMobilePlatformApplicationUpdateArgumentsObject $argsObject): ShopifyMobilePlatformApplicationUpdatePayloadQueryObject
    {
        $object = new ShopifyMobilePlatformApplicationUpdatePayloadQueryObject("mobilePlatformApplicationUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes an order attribution definition for the calling app on the current shop. Existing orders
     * attributed to this definition are preserved.
     *
     * Learn more in the [order attribution guide](https://shopify.dev/docs/apps/build/sales-channels/order-attribution).
     */
    public function selectOrderAttributionDefinitionDelete(ShopifyRootMutationOrderAttributionDefinitionDeleteArgumentsObject $argsObject): ShopifyOrderAttributionDefinitionDeletePayloadQueryObject
    {
        $object = new ShopifyOrderAttributionDefinitionDeletePayloadQueryObject("orderAttributionDefinitionDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Upserts an order attribution definition for the calling app on the current shop. Apps can use
     * attribution definitions to label orders they route to a shop, replacing or augmenting any definitions
     * shipped declaratively via the `order_attribution_config` extension.
     *
     * Learn more in the [order attribution guide](https://shopify.dev/docs/apps/build/sales-channels/order-attribution).
     *
     * If a definition with the same handle exists for this app on the shop, the supplied input fields are
     * merged onto it; fields omitted from the input are left unchanged. Otherwise a new definition is
     * created. To explicitly clear the stored `icon` on an existing definition, pass `icon: null`.
     */
    public function selectOrderAttributionDefinitionUpsert(ShopifyRootMutationOrderAttributionDefinitionUpsertArgumentsObject $argsObject): ShopifyOrderAttributionDefinitionUpsertPayloadQueryObject
    {
        $object = new ShopifyOrderAttributionDefinitionUpsertPayloadQueryObject("orderAttributionDefinitionUpsert");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Cancels an order, with options for refunding, restocking inventory, and customer notification.
     *
     * > Caution:
     * > Order cancellation is irreversible. An order that has been cancelled can't be restored to its original state.
     *
     * Use the `orderCancel` mutation to programmatically cancel orders in scenarios such as:
     *
     * - Customer-requested cancellations due to size, color, or other preference changes
     * - Payment processing failures or declined transactions
     * - Fraud detection and prevention
     * - Insufficient inventory availability
     * - Staff errors in order processing
     * - Wholesale or B2B order management workflows
     *
     * The `orderCancel` mutation provides flexible refund options including refunding to original payment methods
     * or issuing store credit. If a payment was only authorized (temporarily held) but not yet charged,
     * that hold will be automatically released when the order is cancelled, even if you choose not to refund other payments.
     *
     * If the order has an existing
     * [write-off](https://help.shopify.com/manual/fulfillment/managing-orders/payments/waive-balance),
     * calling this mutation can reduce the written-off amount automatically when the cancellation includes a
     * refund that reduces the order total before write-offs below the remaining written-off amount.
     *
     * The mutation supports different cancellation reasons: customer requests, payment declines, fraud,
     * inventory issues, staff errors, or other unspecified reasons. Each cancellation can include optional
     * staff notes for internal documentation (notes aren't visible to customers).
     *
     * An order can only be cancelled if it meets the following criteria:
     *
     * - The order hasn't already been cancelled.
     * - The order has no pending payment authorizations.
     * - The order has no active returns in progress.
     * - The order has no outstanding fulfillments that can't be cancelled.
     *
     * Orders might be assigned to locations that become
     * [deactivated](https://help.shopify.com/manual/fulfillment/setup/locations-management#deactivate-and-reactivate-locations)
     * after the order was created. When cancelling such orders, inventory behavior depends on payment status:
     *
     * - **Paid orders**: Cancellation will fail with an error if restocking is enabled, since inventory
     * can't be returned to deactivated locations.
     * - **Unpaid orders**: Cancellation succeeds but inventory is not restocked anywhere, even when the
     * restock option is enabled. The committed inventory effectively becomes unavailable rather than being
     * returned to stock at the deactivated location.
     *
     * After you cancel an order, you can still make limited updates to certain fields (like
     * notes and tags) using the
     * [`orderUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderUpdate).
     *
     * For partial refunds or more complex refund scenarios on active orders,
     * such as refunding only specific line items while keeping the rest of the order fulfilled,
     * consider using the [`refundCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/refundCreate)
     * mutation instead of full order cancellation.
     *
     * Learn how to build apps that integrate with
     * [order management and fulfillment processes](https://shopify.dev/docs/apps/build/orders-fulfillment).
     */
    public function selectOrderCancel(ShopifyRootMutationOrderCancelArgumentsObject $argsObject): ShopifyOrderCancelPayloadQueryObject
    {
        $object = new ShopifyOrderCancelPayloadQueryObject("orderCancel");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Captures payment for an authorized transaction on an order. Use this mutation to claim the money that was previously
     * reserved by an authorization transaction.
     *
     * The `orderCapture` mutation can be used in the following scenarios:
     *
     * - To capture the full amount of an authorized transaction
     * - To capture a partial payment by specifying an amount less than the total order amount
     * - To perform multiple captures on the same order, as long as the order transaction is
     * [multi-capturable](https://shopify.dev/docs/api/admin-graphql/latest/objects/ordertransaction#field-OrderTransaction.fields.multiCapturable)
     *
     * > Note:
     * > Multi-capture functionality is only available to stores on a
     * [Shopify Plus plan](https://help.shopify.com/manual/intro-to-shopify/pricing-plans/plans-features/shopify-plus-plan).
     * For multi-currency orders, the [`currency`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderCapture#arguments-input.fields.currency)
     * field is required and should match the presentment currency from the order.
     *
     * After capturing a payment, you can:
     *
     * - View the transaction details including status, amount, and processing information.
     * - Track the captured amount in both shop and presentment currencies.
     * - Monitor the transaction's settlement status.
     *
     * Learn more about [order transactions](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderTransaction).
     */
    public function selectOrderCapture(ShopifyRootMutationOrderCaptureArgumentsObject $argsObject): ShopifyOrderCapturePayloadQueryObject
    {
        $object = new ShopifyOrderCapturePayloadQueryObject("orderCapture");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Marks an open [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) as closed. A closed order is one where merchants fulfill or cancel all [`LineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) objects and complete all financial transactions.
     *
     * Once closed, the order indicates that no further work is required. The order's [`closedAt`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order#field-closedAt) timestamp is set when this mutation completes successfully.
     */
    public function selectOrderClose(ShopifyRootMutationOrderCloseArgumentsObject $argsObject): ShopifyOrderClosePayloadQueryObject
    {
        $object = new ShopifyOrderClosePayloadQueryObject("orderClose");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates an order with attributes such as customer information, line items, and shipping and billing addresses.
     *
     * Use the `orderCreate` mutation to programmatically generate orders in scenarios where
     * orders aren't created through the standard checkout process, such as when importing orders from an external
     * system or creating orders for wholesale customers.
     *
     * The `orderCreate` mutation doesn't support applying multiple discounts, such as discounts on line items.
     * Automatic discounts won't be applied unless you replicate the logic of those discounts in your custom
     * implementation. You can [apply a discount code](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/OrderCreateDiscountCodeInput),
     * but only one discount code can be set for each order.
     *
     * > Note:
     * > If you're using the `orderCreate` mutation with a
     * > [trial](https://help.shopify.com/manual/intro-to-shopify/pricing-plans/free-trial) or
     * > [development store](https://shopify.dev/docs/api/development-stores), then you can create a
     * > maximum of five new orders per minute.
     *
     * After you create an order, you can make subsequent edits to the order using one of the following mutations:
     * * [`orderUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderUpdate):
     * Used for simple updates to an order, such as changing the order's note, tags, or customer information.
     * * [`orderEditBegin`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditBegin):
     * Used when you need to make significant updates to an order, such as adding or removing line items, changing
     * quantities, or modifying discounts. The `orderEditBegin` mutation initiates an order editing session,
     * allowing you to make multiple changes before finalizing them. Learn more about using the `orderEditBegin`
     * mutation to [edit existing orders](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/edit-orders).
     *
     * Learn how to build apps that integrate with
     * [order management and fulfillment processes](https://shopify.dev/docs/apps/build/orders-fulfillment).
     */
    public function selectOrderCreate(ShopifyRootMutationOrderCreateArgumentsObject $argsObject): ShopifyOrderCreatePayloadQueryObject
    {
        $object = new ShopifyOrderCreatePayloadQueryObject("orderCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a payment for an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) using a stored [`PaymentMandate`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PaymentMandate). A payment mandate represents the customer's authorization to charge their payment method for deferred payments, such as pre-orders or try-before-you-buy purchases.
     *
     * The mutation processes the payment asynchronously and returns a [`Job`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Job) for tracking the payment status. You can specify the payment amount to collect, and use the [`autoCapture`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderCreateMandatePayment#arguments-autoCapture) argument to either immediately capture the payment or only authorize it for later capture. Each payment request requires a unique [`idempotencyKey`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderCreateMandatePayment#arguments-idempotencyKey) to prevent duplicate charges. Subsequent calls with the same key return the original payment result rather than creating a new payment.
     *
     * Learn more about [deferred payments and payment mandates](https://shopify.dev/docs/apps/build/purchase-options/deferred#charging-the-remaining-balance) and [idempotent requests](https://shopify.dev/docs/api/usage/idempotent-requests).
     */
    public function selectOrderCreateMandatePayment(ShopifyRootMutationOrderCreateMandatePaymentArgumentsObject $argsObject): ShopifyOrderCreateMandatePaymentPayloadQueryObject
    {
        $object = new ShopifyOrderCreateMandatePaymentPayloadQueryObject("orderCreateMandatePayment");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Records a manual payment for an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) that isn't fully paid. Use this mutation to track payments received outside the standard checkout process, such as cash, check, bank transfer, or other offline payment methods.
     *
     * You can specify the payment [amount](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderCreateManualPayment#arguments-amount), [method name](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderCreateManualPayment#arguments-paymentMethodName), and [when it was processed](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderCreateManualPayment#arguments-processedAt).
     */
    public function selectOrderCreateManualPayment(ShopifyRootMutationOrderCreateManualPaymentArgumentsObject $argsObject): ShopifyOrderCreateManualPaymentPayloadQueryObject
    {
        $object = new ShopifyOrderCreateManualPaymentPayloadQueryObject("orderCreateManualPayment");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes customer from an order.
     */
    public function selectOrderCustomerRemove(ShopifyRootMutationOrderCustomerRemoveArgumentsObject $argsObject): ShopifyOrderCustomerRemovePayloadQueryObject
    {
        $object = new ShopifyOrderCustomerRemovePayloadQueryObject("orderCustomerRemove");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sets a customer on an order.
     */
    public function selectOrderCustomerSet(ShopifyRootMutationOrderCustomerSetArgumentsObject $argsObject): ShopifyOrderCustomerSetPayloadQueryObject
    {
        $object = new ShopifyOrderCustomerSetPayloadQueryObject("orderCustomerSet");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Permanently deletes an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) from the store.
     *
     * You can only delete [specific order types](https://help.shopify.com/manual/orders/cancel-delete-order#delete-an-order). Other orders you can cancel using the [`orderCancel`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderCancel) mutation instead.
     *
     * > Caution:
     * > This action is irreversible. You can't recover deleted orders.
     */
    public function selectOrderDelete(ShopifyRootMutationOrderDeleteArgumentsObject $argsObject): ShopifyOrderDeletePayloadQueryObject
    {
        $object = new ShopifyOrderDeletePayloadQueryObject("orderDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds a custom line item to an existing [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order). Custom line items represent products or services not in your catalog, such as gift wrapping, installation fees, or one-off charges.
     *
     * Creates a [`CalculatedLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CalculatedLineItem) with the specified title, price, and quantity. Changes remain in the edit session until you commit them with the [`orderEditCommit`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditCommit) mutation.
     *
     * Learn more about [adding custom line items](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/edit-orders#add-a-custom-line-item).
     */
    public function selectOrderEditAddCustomItem(ShopifyRootMutationOrderEditAddCustomItemArgumentsObject $argsObject): ShopifyOrderEditAddCustomItemPayloadQueryObject
    {
        $object = new ShopifyOrderEditAddCustomItemPayloadQueryObject("orderEditAddCustomItem");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Applies a discount to a [`LineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) during an order edit session. The discount can be either a fixed amount or percentage value.
     *
     * To modify pricing on specific line items, use this mutation after starting an order edit with the [`orderEditBegin`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditBegin) mutation. The changes remain staged until you commit them with the [`orderEditCommit`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditCommit) mutation.
     *
     * If the order has an existing
     * [write-off](https://help.shopify.com/manual/fulfillment/managing-orders/payments/waive-balance),
     * mutations such as this one, which reduce the order total, can reduce the written-off amount
     * automatically when the edit is committed and the order total before write-offs falls below the
     * remaining written-off amount.
     *
     * Learn more about [editing existing orders](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/edit-orders).
     */
    public function selectOrderEditAddLineItemDiscount(ShopifyRootMutationOrderEditAddLineItemDiscountArgumentsObject $argsObject): ShopifyOrderEditAddLineItemDiscountPayloadQueryObject
    {
        $object = new ShopifyOrderEditAddLineItemDiscountPayloadQueryObject("orderEditAddLineItemDiscount");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds a custom shipping line to an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) during an edit session. Specify the shipping title and price to create a new [`ShippingLine`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ShippingLine).
     *
     *  Returns a [`CalculatedOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CalculatedOrder) showing the order with edits applied but not yet saved. To save your changes, use the [`orderEditCommit`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditCommit) mutation.
     *
     * Learn more about [editing existing orders](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/edit-orders).
     */
    public function selectOrderEditAddShippingLine(ShopifyRootMutationOrderEditAddShippingLineArgumentsObject $argsObject): ShopifyOrderEditAddShippingLinePayloadQueryObject
    {
        $object = new ShopifyOrderEditAddShippingLinePayloadQueryObject("orderEditAddShippingLine");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds a [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) as a line item to an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) that's being edited. The mutation respects the variant's contextual pricing.
     *
     * You can specify a [`Location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Location) to check for inventory availability and control whether duplicate variants are allowed. The [`quantity`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditAddVariant#arguments-quantity) must be a positive value.
     *
     * Learn more about [editing existing orders](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/edit-orders#add-a-new-variant).
     */
    public function selectOrderEditAddVariant(ShopifyRootMutationOrderEditAddVariantArgumentsObject $argsObject): ShopifyOrderEditAddVariantPayloadQueryObject
    {
        $object = new ShopifyOrderEditAddVariantPayloadQueryObject("orderEditAddVariant");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Starts an order editing session that enables you to modify an existing [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order). This mutation creates an [`OrderEditSession`](https://shopify.dev/docs/api/admin-graphql/latest/objects/OrderEditSession) and returns a [`CalculatedOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CalculatedOrder) showing how the order looks with your changes applied.
     *
     * Order editing follows a three-step workflow: Begin the edit with [`orderEditBegin`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditBegin), apply changes using mutations like [`orderEditAddVariant`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditAddVariant) or [`orderEditSetQuantity`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditSetQuantity), and then save the changes with the [`orderEditCommit`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditCommit) mutation. The session tracks all staged changes until you commit or abandon them.
     *
     * Learn more about [editing existing orders](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/edit-orders).
     */
    public function selectOrderEditBegin(ShopifyRootMutationOrderEditBeginArgumentsObject $argsObject): ShopifyOrderEditBeginPayloadQueryObject
    {
        $object = new ShopifyOrderEditBeginPayloadQueryObject("orderEditBegin");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Applies staged changes from an order editing session to the original order. This finalizes all modifications made during the edit session, including changes to line items, quantities, discounts, and shipping lines.
     *
     * Order editing follows a three-step workflow: start with [`orderEditBegin`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditBegin) to create an editing session, apply changes using various orderEdit mutations, and then save the changes with the [`orderEditCommit`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditCommit) mutation. The mutation can optionally notify the customer of changes and add staff notes for internal tracking.
     *
     * You can only edit unfulfilled line items. If an edit changes the total order value, then the customer might need to pay a balance or receive a refund.
     *
     * If the order has an existing
     * [write-off](https://help.shopify.com/manual/fulfillment/managing-orders/payments/waive-balance),
     * committing an edit which reduces the order total can reduce the written-off amount automatically when
     * the order total before write-offs falls below the remaining written-off amount.
     *
     * Learn more about [editing existing orders](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/edit-orders).
     */
    public function selectOrderEditCommit(ShopifyRootMutationOrderEditCommitArgumentsObject $argsObject): ShopifyOrderEditCommitPayloadQueryObject
    {
        $object = new ShopifyOrderEditCommitPayloadQueryObject("orderEditCommit");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes a discount on the current order edit. For more information on how to use the GraphQL Admin API to edit an existing order, refer to [Edit existing orders](https://shopify.dev/apps/fulfillment/order-management-apps/order-editing).
     */
    public function selectOrderEditRemoveDiscount(ShopifyRootMutationOrderEditRemoveDiscountArgumentsObject $argsObject): ShopifyOrderEditRemoveDiscountPayloadQueryObject
    {
        $object = new ShopifyOrderEditRemoveDiscountPayloadQueryObject("orderEditRemoveDiscount");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes a line item discount that was applied as part of an order edit.
     *
     * @deprecated Use `orderEditRemoveDiscount` instead.
     */
    public function selectOrderEditRemoveLineItemDiscount(ShopifyRootMutationOrderEditRemoveLineItemDiscountArgumentsObject $argsObject): ShopifyOrderEditRemoveLineItemDiscountPayloadQueryObject
    {
        $object = new ShopifyOrderEditRemoveLineItemDiscountPayloadQueryObject("orderEditRemoveLineItemDiscount");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes a shipping line from an existing order. If the order has an existing [write-off](https://help.shopify.com/manual/fulfillment/managing-orders/payments/waive-balance), mutations such as this one, which reduce the order total, can reduce the written-off amount automatically when the edit is committed and the order total before write-offs falls below the remaining written-off amount. For more information on how to use the GraphQL Admin API to edit an existing order, refer to [Edit existing orders](https://shopify.dev/apps/fulfillment/order-management-apps/order-editing).
     */
    public function selectOrderEditRemoveShippingLine(ShopifyRootMutationOrderEditRemoveShippingLineArgumentsObject $argsObject): ShopifyOrderEditRemoveShippingLinePayloadQueryObject
    {
        $object = new ShopifyOrderEditRemoveShippingLinePayloadQueryObject("orderEditRemoveShippingLine");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sets the quantity of a line item on an order that's being edited. Use this mutation to increase, decrease, or remove items by adjusting their quantities.
     *
     * Setting the quantity to zero effectively removes the line item from the order. The item still exists as a data structure with zero quantity. When decreasing quantities, you can optionally restock the removed items to inventory by setting the `restock` parameter to `true`.
     *
     * If the order has an existing
     * [write-off](https://help.shopify.com/manual/fulfillment/managing-orders/payments/waive-balance),
     * mutations such as this one, which reduce the order total, can reduce the written-off amount
     * automatically when the edit is committed and the order total before write-offs falls below the
     * remaining written-off amount.
     *
     * Learn more about [editing workflows for existing orders](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/edit-orders).
     */
    public function selectOrderEditSetQuantity(ShopifyRootMutationOrderEditSetQuantityArgumentsObject $argsObject): ShopifyOrderEditSetQuantityPayloadQueryObject
    {
        $object = new ShopifyOrderEditSetQuantityPayloadQueryObject("orderEditSetQuantity");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a manual line level discount on the current order edit. If the order has an existing [write-off](https://help.shopify.com/manual/fulfillment/managing-orders/payments/waive-balance), mutations such as this one, which reduce the order total, can reduce the written-off amount automatically when the edit is committed and the order total before write-offs falls below the remaining written-off amount. For more information on how to use the GraphQL Admin API to edit an existing order, refer to [Edit existing orders](https://shopify.dev/apps/fulfillment/order-management-apps/order-editing).
     */
    public function selectOrderEditUpdateDiscount(ShopifyRootMutationOrderEditUpdateDiscountArgumentsObject $argsObject): ShopifyOrderEditUpdateDiscountPayloadQueryObject
    {
        $object = new ShopifyOrderEditUpdateDiscountPayloadQueryObject("orderEditUpdateDiscount");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a shipping line on the current order edit. For more information on how to use the GraphQL Admin API to edit an existing order, refer to [Edit existing orders](https://shopify.dev/apps/fulfillment/order-management-apps/order-editing).
     */
    public function selectOrderEditUpdateShippingLine(ShopifyRootMutationOrderEditUpdateShippingLineArgumentsObject $argsObject): ShopifyOrderEditUpdateShippingLinePayloadQueryObject
    {
        $object = new ShopifyOrderEditUpdateShippingLinePayloadQueryObject("orderEditUpdateShippingLine");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sends an email invoice for an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order).
     *
     * You can customize the email recipient, sender, and subject line using the [`email`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderInvoiceSend#arguments-email) argument.
     *
     * > Note:
     * > Use store or staff account email addresses for the [`from`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderInvoiceSend#arguments-email.fields.from) and [`bcc`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderInvoiceSend#arguments-email.fields.bcc) input fields.
     */
    public function selectOrderInvoiceSend(ShopifyRootMutationOrderInvoiceSendArgumentsObject $argsObject): ShopifyOrderInvoiceSendPayloadQueryObject
    {
        $object = new ShopifyOrderInvoiceSendPayloadQueryObject("orderInvoiceSend");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Marks an order as paid by recording a payment transaction for the outstanding amount.
     *
     * Use the `orderMarkAsPaid` mutation to record payments received outside the standard checkout
     * process. The `orderMarkAsPaid` mutation is particularly useful in scenarios where:
     *
     * - Orders were created with manual payment methods (cash on delivery, bank deposit, money order)
     * - Payments were received offline and need to be recorded in the system
     * - Previously authorized payments need to be captured manually
     * - Orders require manual payment reconciliation due to external payment processing
     *
     * The mutation validates that the order can be marked as paid before processing.
     * An order can be marked as paid only if it has a positive outstanding balance and its
     * [financial status](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order#field-Order.fields.displayFinancialStatus)
     * isn't already `PAID`. The mutation will either create a new sale transaction for the full
     * outstanding amount or capture an existing authorized transaction, depending on the order's current payment state.
     *
     * After successfully marking an order as paid, the order's financial status is updated to
     * reflect the payment, and payment events are logged for tracking and analytics
     * purposes.
     *
     * Learn more about [managing orders](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps)
     * in apps.
     */
    public function selectOrderMarkAsPaid(ShopifyRootMutationOrderMarkAsPaidArgumentsObject $argsObject): ShopifyOrderMarkAsPaidPayloadQueryObject
    {
        $object = new ShopifyOrderMarkAsPaidPayloadQueryObject("orderMarkAsPaid");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Opens a closed order.
     */
    public function selectOrderOpen(ShopifyRootMutationOrderOpenArgumentsObject $argsObject): ShopifyOrderOpenPayloadQueryObject
    {
        $object = new ShopifyOrderOpenPayloadQueryObject("orderOpen");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a risk assessment for a specific order using the provided risk level and facts. Shopify sends an `orders/risk_assessment_changed` webhook when the assessment is created.
     */
    public function selectOrderRiskAssessmentCreate(ShopifyRootMutationOrderRiskAssessmentCreateArgumentsObject $argsObject): ShopifyOrderRiskAssessmentCreatePayloadQueryObject
    {
        $object = new ShopifyOrderRiskAssessmentCreatePayloadQueryObject("orderRiskAssessmentCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates the attributes of an order, such as the customer's email, the shipping address for the order,
     * tags, and [metafields](https://shopify.dev/docs/apps/build/custom-data) associated with the order.
     *
     * In API version 2026-10 and later, if the order has an existing
     * [write-off](https://help.shopify.com/manual/fulfillment/managing-orders/payments/waive-balance),
     * calling this mutation can reduce the written-off amount automatically when a shipping address change
     * recalculates taxes and this reduces the order total before write-offs below the remaining written-off
     * amount.
     *
     * If you need to make significant updates to an order, such as adding or removing line items, changing
     * quantities, or modifying discounts, then use
     * the [`orderEditBegin`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderEditBegin)
     * mutation instead. The `orderEditBegin` mutation initiates an order editing session,
     * allowing you to make multiple changes before finalizing them. Learn more about using the `orderEditBegin`
     * mutation to [edit existing orders](https://shopify.dev/docs/apps/build/orders-fulfillment/order-management-apps/edit-orders).
     *
     * If you need to remove a customer from an order, then use the [`orderCustomerRemove`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/orderCustomerRemove)
     * mutation instead.
     *
     * Learn how to build apps that integrate with
     * [order management and fulfillment processes](https://shopify.dev/docs/apps/build/orders-fulfillment).
     */
    public function selectOrderUpdate(ShopifyRootMutationOrderUpdateArgumentsObject $argsObject): ShopifyOrderUpdatePayloadQueryObject
    {
        $object = new ShopifyOrderUpdatePayloadQueryObject("orderUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a [`Page`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Page) for the online store.
     *
     * Pages contain custom content like "About Us" or "Contact" information that merchants display outside their product catalog. The page requires a [`title`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Page#field-Page.fields.title) and can include HTML content, publishing settings, and custom [template suffixes](https://shopify.dev/docs/api/admin-graphql/latest/objects/Page#field-Page.fields.templateSuffix). You can control visibility through the [`isPublished`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Page#field-Page.fields.isPublished) flag or schedule publication with a specific date.
     *
     * The mutation returns the complete page object upon successful creation or validation errors if the input is invalid.
     */
    public function selectPageCreate(ShopifyRootMutationPageCreateArgumentsObject $argsObject): ShopifyPageCreatePayloadQueryObject
    {
        $object = new ShopifyPageCreatePayloadQueryObject("pageCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Permanently deletes a page from the online store.
     *
     * For example, merchants might delete seasonal landing pages after campaigns end, or remove outdated policy pages when terms change.
     *
     * Use the `pageDelete` mutation to:
     * - Remove outdated or unnecessary pages
     * - Clean up seasonal landing pages
     * - Delete duplicate pages
     *
     * The deletion is permanent and returns the deleted page's ID for confirmation.
     */
    public function selectPageDelete(ShopifyRootMutationPageDeleteArgumentsObject $argsObject): ShopifyPageDeletePayloadQueryObject
    {
        $object = new ShopifyPageDeletePayloadQueryObject("pageDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates an existing page's content and settings.
     *
     * For example, merchants can update their "Shipping Policy" page when rates change, or refresh their "About Us" page with new team information.
     *
     * Use the `pageUpdate` mutation to:
     * - Update page content and titles
     * - Modify publication status
     * - Change page handles for URL structure
     * - Adjust template settings
     *
     * The mutation supports partial updates, allowing specific changes while preserving other page properties.
     */
    public function selectPageUpdate(ShopifyRootMutationPageUpdateArgumentsObject $argsObject): ShopifyPageUpdatePayloadQueryObject
    {
        $object = new ShopifyPageUpdatePayloadQueryObject("pageUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Activates or deactivates payment customizations for the shop. Payment customizations allow apps to hide, reorder, or rename payment methods at checkout based on cart contents, customer attributes, or other conditions. Use this to toggle customizations on or off without deleting them.
     */
    public function selectPaymentCustomizationActivation(ShopifyRootMutationPaymentCustomizationActivationArgumentsObject $argsObject): ShopifyPaymentCustomizationActivationPayloadQueryObject
    {
        $object = new ShopifyPaymentCustomizationActivationPayloadQueryObject("paymentCustomizationActivation");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a new payment customization for the shop. Payment customizations let apps modify the payment methods shown at checkout — hiding, reordering, or renaming options based on cart contents, customer attributes, or other business logic.
     */
    public function selectPaymentCustomizationCreate(ShopifyRootMutationPaymentCustomizationCreateArgumentsObject $argsObject): ShopifyPaymentCustomizationCreatePayloadQueryObject
    {
        $object = new ShopifyPaymentCustomizationCreatePayloadQueryObject("paymentCustomizationCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Permanently deletes a payment customization. Once deleted, the customization will no longer affect which payment methods appear at checkout.
     */
    public function selectPaymentCustomizationDelete(ShopifyRootMutationPaymentCustomizationDeleteArgumentsObject $argsObject): ShopifyPaymentCustomizationDeletePayloadQueryObject
    {
        $object = new ShopifyPaymentCustomizationDeletePayloadQueryObject("paymentCustomizationDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates an existing payment customization, modifying its configuration for how payment methods are displayed at checkout. Use this to change the customization's title or enabled state. The customization's function can't be changed once set; create a new payment customization to use a different function.
     */
    public function selectPaymentCustomizationUpdate(ShopifyRootMutationPaymentCustomizationUpdateArgumentsObject $argsObject): ShopifyPaymentCustomizationUpdatePayloadQueryObject
    {
        $object = new ShopifyPaymentCustomizationUpdatePayloadQueryObject("paymentCustomizationUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sends an email to a customer containing a secure link to add a new payment instrument (e.g., credit card) for a specific resource such as a subscription, order, or draft order. This is used when a customer needs to provide payment details for an existing resource — for example, after a payment method was revoked or when setting up payment for a new subscription contract.
     */
    public function selectPaymentInstrumentSendAddEmail(ShopifyRootMutationPaymentInstrumentSendAddEmailArgumentsObject $argsObject): ShopifyPaymentInstrumentSendAddEmailPayloadQueryObject
    {
        $object = new ShopifyPaymentInstrumentSendAddEmailPayloadQueryObject("paymentInstrumentSendAddEmail");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sends an email payment reminder for a payment schedule.
     */
    public function selectPaymentReminderSend(ShopifyRootMutationPaymentReminderSendArgumentsObject $argsObject): ShopifyPaymentReminderSendPayloadQueryObject
    {
        $object = new ShopifyPaymentReminderSendPayloadQueryObject("paymentReminderSend");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Captures payment for a due [`PaymentSchedule`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PaymentSchedule) using the vaulted payment method associated with the order.
     *
     * The mutation resolves the order and mandate from the given payment schedule, then initiates
     * an asynchronous payment capture. Use the returned `jobResult` to poll for the status of the
     * payment capture.
     */
    public function selectPaymentScheduleCapture(ShopifyRootMutationPaymentScheduleCaptureArgumentsObject $argsObject): ShopifyPaymentScheduleCapturePayloadQueryObject
    {
        $object = new ShopifyPaymentScheduleCapturePayloadQueryObject("paymentScheduleCapture");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Create payment terms on an order. To create payment terms on a draft order, use a draft order mutation and include the request with the `DraftOrderInput`.
     */
    public function selectPaymentTermsCreate(ShopifyRootMutationPaymentTermsCreateArgumentsObject $argsObject): ShopifyPaymentTermsCreatePayloadQueryObject
    {
        $object = new ShopifyPaymentTermsCreatePayloadQueryObject("paymentTermsCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Delete payment terms for an order. To delete payment terms on a draft order, use a draft order mutation and include the request with the `DraftOrderInput`.
     */
    public function selectPaymentTermsDelete(ShopifyRootMutationPaymentTermsDeleteArgumentsObject $argsObject): ShopifyPaymentTermsDeletePayloadQueryObject
    {
        $object = new ShopifyPaymentTermsDeletePayloadQueryObject("paymentTermsDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Update payment terms on an order. To update payment terms on a draft order, use a draft order mutation and include the request with the `DraftOrderInput`.
     */
    public function selectPaymentTermsUpdate(ShopifyRootMutationPaymentTermsUpdateArgumentsObject $argsObject): ShopifyPaymentTermsUpdatePayloadQueryObject
    {
        $object = new ShopifyPaymentTermsUpdatePayloadQueryObject("paymentTermsUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Assigns a point of sale device to a cash drawer, removing any prior assignment.
     */
    public function selectPointOfSaleDeviceAssignToCashDrawer(ShopifyRootMutationPointOfSaleDeviceAssignToCashDrawerArgumentsObject $argsObject): ShopifyPointOfSaleDeviceAssignToCashDrawerPayloadQueryObject
    {
        $object = new ShopifyPointOfSaleDeviceAssignToCashDrawerPayloadQueryObject("pointOfSaleDeviceAssignToCashDrawer");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds an adjustment to a point of sale device payment session.
     */
    public function selectPointOfSaleDevicePaymentSessionAdjust(ShopifyRootMutationPointOfSaleDevicePaymentSessionAdjustArgumentsObject $argsObject): ShopifyPointOfSaleDevicePaymentSessionAdjustPayloadQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionAdjustPayloadQueryObject("pointOfSaleDevicePaymentSessionAdjust");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Closes a point of sale device payment session.
     */
    public function selectPointOfSaleDevicePaymentSessionClose(ShopifyRootMutationPointOfSaleDevicePaymentSessionCloseArgumentsObject $argsObject): ShopifyPointOfSaleDevicePaymentSessionClosePayloadQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionClosePayloadQueryObject("pointOfSaleDevicePaymentSessionClose");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Records a mid-session cash count for a point of sale device payment session.
     */
    public function selectPointOfSaleDevicePaymentSessionCount(ShopifyRootMutationPointOfSaleDevicePaymentSessionCountArgumentsObject $argsObject): ShopifyPointOfSaleDevicePaymentSessionCountPayloadQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionCountPayloadQueryObject("pointOfSaleDevicePaymentSessionCount");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Opens a point of sale device payment session.
     */
    public function selectPointOfSaleDevicePaymentSessionOpen(ShopifyRootMutationPointOfSaleDevicePaymentSessionOpenArgumentsObject $argsObject): ShopifyPointOfSaleDevicePaymentSessionOpenPayloadQueryObject
    {
        $object = new ShopifyPointOfSaleDevicePaymentSessionOpenPayloadQueryObject("pointOfSaleDevicePaymentSessionOpen");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Installs storefront generation preview for shop.
     */
    public function selectPreviewInstall(ShopifyRootMutationPreviewInstallArgumentsObject $argsObject): ShopifyPreviewInstallPayloadQueryObject
    {
        $object = new ShopifyPreviewInstallPayloadQueryObject("previewInstall");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a [`PriceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceList). Price lists enable contextual pricing by defining fixed prices or percentage-based adjustments.
     *
     * The price list requires a unique name, currency for fixed prices, and parent adjustment settings that determine how the system calculates prices relative to base prices. To apply contextual pricing, link the price list to a [`Catalog`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Catalog). When that catalog's context is matched, customers receive the price list's prices.
     *
     * Learn more about [building catalogs with price lists](https://shopify.dev/docs/apps/build/markets/build-catalog#step-2-associate-a-price-list-with-the-catalog).
     */
    public function selectPriceListCreate(ShopifyRootMutationPriceListCreateArgumentsObject $argsObject): ShopifyPriceListCreatePayloadQueryObject
    {
        $object = new ShopifyPriceListCreatePayloadQueryObject("priceListCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a price list. For example, you can delete a price list so that it no longer applies for products in the associated market.
     */
    public function selectPriceListDelete(ShopifyRootMutationPriceListDeleteArgumentsObject $argsObject): ShopifyPriceListDeletePayloadQueryObject
    {
        $object = new ShopifyPriceListDeletePayloadQueryObject("priceListDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates or updates fixed prices on a [`PriceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceList). Use this mutation to set specific prices for [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects that override the price list's default percentage-based adjustments.
     *
     * When you add fixed prices, the mutation replaces any existing fixed prices for those variants on the price list.
     */
    public function selectPriceListFixedPricesAdd(ShopifyRootMutationPriceListFixedPricesAddArgumentsObject $argsObject): ShopifyPriceListFixedPricesAddPayloadQueryObject
    {
        $object = new ShopifyPriceListFixedPricesAddPayloadQueryObject("priceListFixedPricesAdd");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sets or removes fixed prices for all variants of a [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) on a [`PriceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceList). Simplifies pricing management when all variants of a product should have the same price on a price list, rather than setting individual variant prices.
     *
     * When you add a fixed price for a product, all its [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects receive the same price on the price list. When you remove a product's fixed prices, all variant prices revert to the price list's adjustment rules.
     */
    public function selectPriceListFixedPricesByProductUpdate(ShopifyRootMutationPriceListFixedPricesByProductUpdateArgumentsObject $argsObject): ShopifyPriceListFixedPricesByProductUpdatePayloadQueryObject
    {
        $object = new ShopifyPriceListFixedPricesByProductUpdatePayloadQueryObject("priceListFixedPricesByProductUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes specific fixed prices from a price list using a product variant ID. You can use the `priceListFixedPricesDelete` mutation to delete a set of fixed prices from a price list. After deleting the set of fixed prices from the price list, the price of each product variant reverts to the original price that was determined by the price list adjustment.
     */
    public function selectPriceListFixedPricesDelete(ShopifyRootMutationPriceListFixedPricesDeleteArgumentsObject $argsObject): ShopifyPriceListFixedPricesDeletePayloadQueryObject
    {
        $object = new ShopifyPriceListFixedPricesDeletePayloadQueryObject("priceListFixedPricesDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates fixed prices on a [`PriceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceList). This mutation lets you add new fixed prices for specific [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects and remove existing prices in a single operation.
     *
     * Use this mutation to modify variant pricing on a price list by providing prices to add and variant IDs to delete.
     *
     * Learn more about [setting fixed prices for product variants](https://shopify.dev/docs/apps/build/markets/build-catalog#step-3-set-fixed-prices-for-specific-product-variants).
     */
    public function selectPriceListFixedPricesUpdate(ShopifyRootMutationPriceListFixedPricesUpdateArgumentsObject $argsObject): ShopifyPriceListFixedPricesUpdatePayloadQueryObject
    {
        $object = new ShopifyPriceListFixedPricesUpdatePayloadQueryObject("priceListFixedPricesUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a [`PriceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceList)'s configuration, including its name, currency, [`Catalog`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Catalog) association, and pricing adjustments.
     *
     * Changing the currency removes all fixed prices from the price list. The affected [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects revert to prices calculated from the price list's adjustment settings.
     */
    public function selectPriceListUpdate(ShopifyRootMutationPriceListUpdateArgumentsObject $argsObject): ShopifyPriceListUpdatePayloadQueryObject
    {
        $object = new ShopifyPriceListUpdatePayloadQueryObject("priceListUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Disable a shop's privacy features.
     */
    public function selectPrivacyFeaturesDisable(ShopifyRootMutationPrivacyFeaturesDisableArgumentsObject $argsObject): ShopifyPrivacyFeaturesDisablePayloadQueryObject
    {
        $object = new ShopifyPrivacyFeaturesDisablePayloadQueryObject("privacyFeaturesDisable");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a product bundle that groups multiple [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) objects together as components. The bundle appears as a single product in the store, with its price determined by the parent product and inventory calculated from the component products.
     *
     * The mutation runs asynchronously and returns a [`ProductBundleOperation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductBundleOperation) object to track the creation status. Poll the operation using the [`productOperation`](https://shopify.dev/docs/api/admin-graphql/latest/queries/productOperation) query to determine when the bundle is ready.
     *
     * Learn more about [creating product fixed bundles](https://shopify.dev/docs/apps/build/product-merchandising/bundles/add-product-fixed-bundle#step-1-create-a-bundle).
     */
    public function selectProductBundleCreate(ShopifyRootMutationProductBundleCreateArgumentsObject $argsObject): ShopifyProductBundleCreatePayloadQueryObject
    {
        $object = new ShopifyProductBundleCreatePayloadQueryObject("productBundleCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a product bundle or componentized product.
     */
    public function selectProductBundleUpdate(ShopifyRootMutationProductBundleUpdateArgumentsObject $argsObject): ShopifyProductBundleUpdatePayloadQueryObject
    {
        $object = new ShopifyProductBundleUpdatePayloadQueryObject("productBundleUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Changes the status of a product. This allows you to set the availability of the product across all channels.
     *
     * @deprecated Use `productUpdate` instead.
     */
    public function selectProductChangeStatus(ShopifyRootMutationProductChangeStatusArgumentsObject $argsObject): ShopifyProductChangeStatusPayloadQueryObject
    {
        $object = new ShopifyProductChangeStatusPayloadQueryObject("productChangeStatus");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a [product](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product)
     * with attributes such as title, description, vendor, and media.
     *
     * The `productCreate` mutation helps you create many products at once, avoiding the tedious or time-consuming
     * process of adding them one by one in the Shopify admin. Common examples include creating products for a
     * new collection, launching a new product line, or adding seasonal products.
     *
     * You can define product
     * [options](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOption) and
     * [values](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOptionValue),
     * allowing you to create products with different variations like sizes or colors. You can also associate media
     * files to your products, including images and videos.
     *
     * The `productCreate` mutation only supports creating a product with its initial
     * [product variant](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant).
     * To create multiple product variants for a single product and manage prices, use the
     * [`productVariantsBulkCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productVariantsBulkCreate)
     * mutation.
     *
     * > Note:
     * > The `productCreate` mutation has a [throttle](https://shopify.dev/docs/api/usage/rate-limits#resource-based-rate-limits)
     * > that takes effect when a store has 50,000 product variants. After this threshold is reached, no more than
     * > 1,000 new product variants can be created per day.
     *
     * After you create a product, you can make subsequent edits to the product using one of the following mutations:
     *
     * - [`publishablePublish`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/publishablePublish):
     * Used to publish the product and make it available to customers. The `productCreate` mutation creates products
     * in an unpublished state by default, so you must perform a separate operation to publish the product.
     * - [`productUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productUpdate):
     * Used to update a single product, such as changing the product's title, description, vendor, or associated media.
     * - [`productSet`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productSet):
     * Used to perform multiple operations on products, such as creating or modifying product options and variants.
     *
     * Learn more about the [product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model)
     * and [adding product data](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/add-data).
     */
    public function selectProductCreate(?ShopifyRootMutationProductCreateArgumentsObject $argsObject = null): ShopifyProductCreatePayloadQueryObject
    {
        $object = new ShopifyProductCreatePayloadQueryObject("productCreate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds media files to a [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product), such as images, videos, or 3D models. Media files enhance product listings by providing visual representations that help customers understand the product.
     *
     * The mutation accepts an array of [`CreateMediaInput`](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/CreateMediaInput) objects, each specifying the source URL, content type, and optional alt text.
     *
     * You can add multiple media files in a single request. The mutation adds all valid files and returns errors for any invalid ones.
     *
     * @deprecated Use `productUpdate` or `productSet` instead.
     */
    public function selectProductCreateMedia(ShopifyRootMutationProductCreateMediaArgumentsObject $argsObject): ShopifyProductCreateMediaPayloadQueryObject
    {
        $object = new ShopifyProductCreateMediaPayloadQueryObject("productCreateMedia");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Permanently deletes a product and all its associated data, including variants, media, publications, and inventory items.
     *
     * Use the `productDelete` mutation to programmatically remove products from your store when they need to be
     * permanently deleted from your catalog, such as when removing discontinued items, cleaning up test data, or
     * synchronizing with external inventory management systems.
     *
     * The `productDelete` mutation removes the product from all associated collections,
     * and removes all associated data for the product, including:
     *
     * - All product variants and their inventory items
     * - Product media (images, videos) that are not referenced by other products
     * - [Product options](https://shopify.dev/api/admin-graphql/latest/objects/ProductOption) and [option values](https://shopify.dev/api/admin-graphql/latest/objects/ProductOptionValue)
     * - Product publications across all sales channels
     * - Product tags and metadata associations
     *
     * The `productDelete` mutation also has the following effects on existing orders and transactions:
     *
     * - **Draft orders**: Existing draft orders that reference this product will retain the product information as stored data, but the product reference will be removed. Draft orders can still be completed with the stored product details.
     * - **Completed orders and refunds**: Previously completed orders that included this product aren't affected. The product information in completed orders is preserved for record-keeping, and existing refunds for this product remain valid and processable.
     *
     * > Caution:
     * > Product deletion is irreversible. After a product is deleted, it can't be recovered. Consider archiving
     * > or unpublishing products instead if you might need to restore them later.
     *
     * If you need to delete a large product, such as one that has many
     * [variants](https://shopify.dev/api/admin-graphql/latest/objects/ProductVariant)
     * that are active at several
     * [locations](https://shopify.dev/api/admin-graphql/latest/objects/Location),
     * you might encounter timeout errors. To avoid these timeout errors, you can set the
     * [`synchronous`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productDelete#arguments-synchronous)
     * parameter to `false` to run the deletion asynchronously, which returns a
     * [`ProductDeleteOperation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductDeleteOperation)
     * that you can monitor for completion status.
     *
     * If you need more granular control over product cleanup, consider using these alternative mutations:
     *
     * - [`productUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productUpdate):
     * Update the product status to archived or unpublished instead of deleting.
     * - [`productVariantsBulkDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productVariantsBulkDelete):
     * Delete specific variants while keeping the product.
     * - [`productOptionsDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsDelete):
     * Delete the choices available for a product, such as size, color, or material.
     *
     * Learn more about the [product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model).
     */
    public function selectProductDelete(ShopifyRootMutationProductDeleteArgumentsObject $argsObject): ShopifyProductDeletePayloadQueryObject
    {
        $object = new ShopifyProductDeletePayloadQueryObject("productDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes media from a [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product), such as images, videos, and 3D models.
     *
     * When you delete media images, the mutation also removes any corresponding product images. The mutation returns the IDs of both the deleted media and any product images that the deletion removed.
     *
     * > Caution:
     * > This action is irreversible. You can't recover deleted media.
     *
     * @deprecated Use `fileUpdate` instead.
     */
    public function selectProductDeleteMedia(ShopifyRootMutationProductDeleteMediaArgumentsObject $argsObject): ShopifyProductDeleteMediaPayloadQueryObject
    {
        $object = new ShopifyProductDeleteMediaPayloadQueryObject("productDeleteMedia");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Duplicates a product.
     *
     * If you need to duplicate a large product, such as one that has many
     * [variants](https://shopify.dev/api/admin-graphql/latest/input-objects/ProductVariantInput)
     * that are active at several
     * [locations](https://shopify.dev/api/admin-graphql/latest/input-objects/InventoryLevelInput),
     * you might encounter timeout errors.
     *
     * To avoid these timeout errors, include the `synchronous: false` argument in this mutation to perform
     * the duplication asynchronously.
     *
     * Metafield values are not duplicated if the unique values capability is enabled.
     */
    public function selectProductDuplicate(ShopifyRootMutationProductDuplicateArgumentsObject $argsObject): ShopifyProductDuplicatePayloadQueryObject
    {
        $object = new ShopifyProductDuplicatePayloadQueryObject("productDuplicate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a product feed for a specific publication.
     */
    public function selectProductFeedCreate(?ShopifyRootMutationProductFeedCreateArgumentsObject $argsObject = null): ShopifyProductFeedCreatePayloadQueryObject
    {
        $object = new ShopifyProductFeedCreatePayloadQueryObject("productFeedCreate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a product feed for a specific publication.
     */
    public function selectProductFeedDelete(ShopifyRootMutationProductFeedDeleteArgumentsObject $argsObject): ShopifyProductFeedDeletePayloadQueryObject
    {
        $object = new ShopifyProductFeedDeletePayloadQueryObject("productFeedDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Runs the full product sync for a given shop.
     */
    public function selectProductFullSync(ShopifyRootMutationProductFullSyncArgumentsObject $argsObject): ShopifyProductFullSyncPayloadQueryObject
    {
        $object = new ShopifyProductFullSyncPayloadQueryObject("productFullSync");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds multiple selling plan groups to a product.
     */
    public function selectProductJoinSellingPlanGroups(ShopifyRootMutationProductJoinSellingPlanGroupsArgumentsObject $argsObject): ShopifyProductJoinSellingPlanGroupsPayloadQueryObject
    {
        $object = new ShopifyProductJoinSellingPlanGroupsPayloadQueryObject("productJoinSellingPlanGroups");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes multiple groups from a product.
     */
    public function selectProductLeaveSellingPlanGroups(ShopifyRootMutationProductLeaveSellingPlanGroupsArgumentsObject $argsObject): ShopifyProductLeaveSellingPlanGroupsPayloadQueryObject
    {
        $object = new ShopifyProductLeaveSellingPlanGroupsPayloadQueryObject("productLeaveSellingPlanGroups");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates an [option](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOption)
     * on a [product](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product),
     * such as size, color, or material. Each option includes a name, position, and a list of values. The combination
     * of a product option and value creates a [product variant](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant).
     *
     * Use the `productOptionUpdate` mutation for the following use cases:
     *
     * - **Update product choices**: Modify an existing option, like "Size" (Small, Medium, Large) or
     * "Color" (Red, Blue, Green), so customers can select their preferred variant.
     * - **Enable personalization features**: Update an option (for example, "Engraving text") to let customers customize their purchase.
     * - **Offer seasonal or limited edition products**: Update a value
     * (for example, "Holiday red") on an existing option to support limited-time or seasonal variants.
     * - **Integrate with apps that manage product configuration**: Allow third-party apps to update options, like
     * "Bundle size", when customers select or customize
     * [product bundles](https://shopify.dev/docs/apps/build/product-merchandising/bundles).
     * - **Link options to metafields**: Associate a product option with a custom
     * [metafield](https://shopify.dev/docs/apps/build/custom-data), like "Fabric code", for
     * richer integrations with other systems or apps.
     *
     * > Note:
     * > The `productOptionUpdate` mutation enforces strict data integrity for product options and variants.
     * All option positions must be sequential, and every option should be used by at least one variant.
     *
     * After you update a product option, you can further manage a product's configuration using related mutations:
     *
     * - [`productOptionsCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsCreate)
     * - [`productOptionsDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsDelete)
     * - [`productOptionsReorder`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsReorder)
     * - [`productVariantsBulkCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productVariantsBulkCreate)
     * - [`productVariantsBulkUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productVariantsBulkUpdate)
     * - [`productSet`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productSet)
     *
     * Learn more about the [product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model)
     * and [adding product data](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/add-data).
     */
    public function selectProductOptionUpdate(ShopifyRootMutationProductOptionUpdateArgumentsObject $argsObject): ShopifyProductOptionUpdatePayloadQueryObject
    {
        $object = new ShopifyProductOptionUpdatePayloadQueryObject("productOptionUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates one or more [options](https://shopify.dev/docs/api/admin-graphql/current/objects/ProductOption)
     * on a [product](https://shopify.dev/docs/api/admin-graphql/current/objects/Product),
     * such as size, color, or material. Each option includes a name, position, and a list of values. The combination
     * of a product option and value creates a [product variant](https://shopify.dev/docs/api/admin-graphql/current/objects/ProductVariant).
     *
     * Use the `productOptionsCreate` mutation for the following use cases:
     *
     * - **Add product choices**: Add a new option, like "Size" (Small, Medium, Large) or
     * "Color" (Red, Blue, Green), to an existing product so customers can select their preferred variant.
     * - **Enable personalization features**: Add options such as "Engraving text" to let customers customize their purchase.
     * - **Offer seasonal or limited edition products**: Add a new value
     * (for example, "Holiday red") to an existing option to support limited-time or seasonal variants.
     * - **Integrate with apps that manage product configuration**: Allow third-party apps to add options, like
     * "Bundle size", when customers select or customize
     * [product bundles](https://shopify.dev/docs/apps/build/product-merchandising/bundles).
     * - **Link options to metafields**: Associate a product option with a custom
     * [metafield](https://shopify.dev/docs/apps/build/custom-data), like "Fabric code", for
     * richer integrations with other systems or apps.
     *
     * > Note:
     * > The `productOptionsCreate` mutation enforces strict data integrity for product options and variants.
     * All option positions must be sequential, and every option should be used by at least one variant.
     * If you use the [`CREATE` variant strategy](https://shopify.dev/docs/api/admin-graphql/current/mutations/productOptionsCreate#arguments-variantStrategy.enums.CREATE), consider the maximum allowed number of variants for each product is 2048.
     *
     * If the product already has an option with the same name, then the mutation returns an
     * `OPTION_ALREADY_EXISTS` error. A product that has only its default variant is the exception,
     * because its implicit `Title` option is a placeholder that the mutation replaces.
     * To declare the complete set of options and variants that a product
     * should have, and let Shopify create, update, or remove them to match, use the
     * [`productSet`](https://shopify.dev/docs/api/admin-graphql/current/mutations/productSet) mutation instead.
     *
     * After you create product options, you can further manage a product's configuration using related mutations:
     *
     * - [`productOptionUpdate`](https://shopify.dev/docs/api/admin-graphql/current/mutations/productOptionUpdate)
     * - [`productOptionsReorder`](https://shopify.dev/docs/api/admin-graphql/current/mutations/productOptionsReorder)
     * - [`productOptionsDelete`](https://shopify.dev/docs/api/admin-graphql/current/mutations/productOptionsDelete)
     * - [`productVariantsBulkCreate`](https://shopify.dev/docs/api/admin-graphql/current/mutations/productVariantsBulkCreate)
     * - [`productVariantsBulkUpdate`](https://shopify.dev/docs/api/admin-graphql/current/mutations/productVariantsBulkUpdate)
     * - [`productSet`](https://shopify.dev/docs/api/admin-graphql/current/mutations/productSet)
     *
     * Learn more about the [product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model)
     * and [adding product data](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/add-data).
     */
    public function selectProductOptionsCreate(ShopifyRootMutationProductOptionsCreateArgumentsObject $argsObject): ShopifyProductOptionsCreatePayloadQueryObject
    {
        $object = new ShopifyProductOptionsCreatePayloadQueryObject("productOptionsCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes one or more [options](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOption)
     * from a [product](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product). Product options
     * define the choices available for a product, such as size, color, or material.
     *
     * > Caution:
     * > Removing an option can affect a product's
     * > [variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) and their
     * > configuration. Deleting an option might also delete associated option values and, depending on the chosen
     * > [strategy](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productoptionsdelete#arguments-strategy),
     * > might affect variants.
     *
     * Use the `productOptionsDelete` mutation for the following use cases:
     *
     * - **Simplify product configuration**: Remove obsolete or unnecessary options
     * (for example, discontinue "Material" if all variants are now the same material).
     * - **Clean up after seasonal or limited-time offerings**: Delete options that are no longer
     * relevant (for example, "Holiday edition").
     * - **Automate catalog management**: Enable apps or integrations to programmatically remove options as product
     * data changes.
     *
     * > Note:
     * > The `productOptionsDelete` mutation enforces strict data integrity for product options and variants.
     * > All option positions must remain sequential, and every remaining option must be used by at least one variant.
     *
     * After you delete a product option, you can further manage a product's configuration using related mutations:
     *
     * - [`productOptionsCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsCreate)
     * - [`productOptionUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionUpdate)
     * - [`productOptionsReorder`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsReorder)
     * - [`productVariantsBulkCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productVariantsBulkCreate)
     * - [`productVariantsBulkUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productVariantsBulkUpdate)
     * - [`productSet`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productSet)
     *
     * Learn more about the [product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model)
     * and [adding product data](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/add-data).
     */
    public function selectProductOptionsDelete(ShopifyRootMutationProductOptionsDeleteArgumentsObject $argsObject): ShopifyProductOptionsDeletePayloadQueryObject
    {
        $object = new ShopifyProductOptionsDeletePayloadQueryObject("productOptionsDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Reorders the [options](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOption) and
     * [option values](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductOptionValue) on a
     * [product](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product),
     * updating the order in which [product variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant)
     * are presented to customers.
     *
     * The `productOptionsReorder` mutation accepts a list of product options, each identified by `id` or `name`, and an
     * optional list of values (also by `id` or `name`) specifying the new order. The order of options in the
     * mutation's input determines their new positions (for example, the first option becomes `option1`).
     * The order of values within each option determines their new positions. The mutation recalculates the order of
     * variants based on the new option and value order.
     *
     * Suppose a product has the following variants:
     *
     * 1. `"Red / Small"`
     * 2. `"Green / Medium"`
     * 3. `"Blue / Small"`
     *
     * You reorder options and values:
     *
     * ```
     * options: [
     *   { name: "Size", values: [{ name: "Small" }, { name: "Medium" }] },
     *   { name: "Color", values: [{ name: "Green" }, { name: "Red" }, { name: "Blue" }] }
     * ]
     * ```
     *
     * The resulting variant order will be:
     *
     * 1. `"Small / Green"`
     * 2. `"Small / Red"`
     * 3. `"Small / Blue"`
     * 4. `"Medium / Green"`
     *
     * Use the `productOptionsReorder` mutation for the following use cases:
     *
     * - **Change the order of product options**: For example, display "Color" before "Size" in a store.
     * - **Reorder option values within an option**: For example, show "Red" before "Blue" in a color picker.
     * - **Control the order of product variants**: The order of options and their values determines the sequence in which variants are listed and selected.
     * - **Highlight best-selling options**: Present the most popular or relevant options and values first.
     * - **Promote merchandising strategies**: Highlight seasonal colors, limited editions, or featured sizes.
     *
     * > Note:
     * > The `productOptionsReorder` mutation enforces strict data integrity for product options and variants.
     * > All option positions must be sequential, and every option should be used by at least one variant.
     *
     * After you reorder product options, you can further manage a product's configuration using related mutations:
     *
     * - [`productOptionsCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsCreate)
     * - [`productOptionsDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsDelete)
     * - [`productVariantsBulkCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productVariantsBulkCreate)
     * - [`productVariantsBulkUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productVariantsBulkUpdate)
     * - [`productSet`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productSet)
     *
     * Learn more about the [product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model)
     * and [managing product data](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/add-data).
     */
    public function selectProductOptionsReorder(ShopifyRootMutationProductOptionsReorderArgumentsObject $argsObject): ShopifyProductOptionsReorderPayloadQueryObject
    {
        $object = new ShopifyProductOptionsReorderPayloadQueryObject("productOptionsReorder");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Publishes a [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) to specified [`Publication`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication) objects.
     *
     * Products sold exclusively on subscription (`requiresSellingPlan: true`) can only be published to online stores.
     *
     * @deprecated Use `publishablePublish` instead.
     */
    public function selectProductPublish(ShopifyRootMutationProductPublishArgumentsObject $argsObject): ShopifyProductPublishPayloadQueryObject
    {
        $object = new ShopifyProductPublishPayloadQueryObject("productPublish");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Reorders [media](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Media) attached to a product, changing their sequence in product displays. The operation processes asynchronously to handle [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) with large media collections.
     *
     * Specify the [product ID](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productReorderMedia#arguments-id) and an array of [moves](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productReorderMedia#arguments-moves), where each move contains a media ID and its new zero-based position.
     *
     * > Note:
     * > Only include media items that need repositioning. Unchanged items maintain their relative order automatically.
     *
     * The mutation returns a [`Job`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Job) to track the reordering progress. Poll the job status to determine when the operation completes and media positions update across all sales channels.
     *
     * Learn more about [reordering product media](https://shopify.dev/docs/apps/build/online-store/product-media#step-6-reorder-media-objects).
     */
    public function selectProductReorderMedia(ShopifyRootMutationProductReorderMediaArgumentsObject $argsObject): ShopifyProductReorderMediaPayloadQueryObject
    {
        $object = new ShopifyProductReorderMediaPayloadQueryObject("productReorderMedia");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Performs multiple operations to create or update products in a single request.
     *
     * Use the `productSet` mutation to sync information from an external data source into Shopify, manage large
     * product catalogs, and perform batch updates. The mutation is helpful for bulk product management, including price
     * adjustments, inventory updates, and product lifecycle management.
     *
     * The behavior of `productSet` depends on the type of field it's modifying:
     *
     * - **For list fields**: Creates new entries, updates existing entries, and deletes existing entries
     * that aren't included in the mutation's input. Common examples of list fields include
     * [`collections`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productSet#arguments-input.fields.collections),
     * [`metafields`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productSet#arguments-input.fields.metafields),
     * and [`variants`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productSet#arguments-input.fields.variants).
     *
     * - **For all other field types**: Updates only the included fields. Any omitted fields will remain unchanged.
     *
     * > Note:
     * > By default, stores have a limit of 2048 product variants for each product.
     *
     * You can run `productSet` in one of the following modes:
     *
     * - **Synchronously**: Returns the updated product in the response.
     * - **Asynchronously**: Returns a [`ProductSetOperation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductSetOperation) object.
     * Use the [`productOperation`](https://shopify.dev/api/admin-graphql/latest/queries/productOperation) query to check the status of the operation and
     * retrieve details of the updated product and its product variants.
     *
     * If you need to only manage product variants, then use one of the following mutations:
     *
     * - [`productVariantsBulkCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productVariantsBulkCreate)
     * - [`productVariantsBulkUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productVariantsBulkUpdate)
     * - [`productVariantsBulkDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productVariantsBulkDelete)
     *
     * If you need to only manage product options, then use one of the following mutations:
     *
     * - [`productOptionsCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsCreate)
     * - [`productOptionUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionUpdate)
     * - [`productOptionsReorder`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsReorder)
     * - [`productOptionsDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsDelete)
     *
     * Learn more about [syncing product data from an external source](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/sync-data).
     */
    public function selectProductSet(ShopifyRootMutationProductSetArgumentsObject $argsObject): ShopifyProductSetPayloadQueryObject
    {
        $object = new ShopifyProductSetPayloadQueryObject("productSet");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Unpublishes a product.
     *
     * @deprecated Use `publishableUnpublish` instead.
     */
    public function selectProductUnpublish(ShopifyRootMutationProductUnpublishArgumentsObject $argsObject): ShopifyProductUnpublishPayloadQueryObject
    {
        $object = new ShopifyProductUnpublishPayloadQueryObject("productUnpublish");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a [product](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product)
     * with attributes such as title, description, vendor, and media.
     *
     * The `productUpdate` mutation helps you modify many products at once, avoiding the tedious or time-consuming
     * process of updating them one by one in the Shopify admin. Common examples including updating
     * product details like status or tags.
     *
     * The `productUpdate` mutation doesn't support updating
     * [product variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant).
     * To update multiple product variants for a single product and manage prices, use the
     * [`productVariantsBulkUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productVariantsBulkUpdate)
     * mutation.
     *
     * > Note:
     * > The `productUpdate` mutation has a [throttle](https://shopify.dev/docs/api/usage/rate-limits#resource-based-rate-limits)
     * > that takes effect when a store has 50,000 product variants. After this threshold is reached, no more than
     * > 1,000 new product variants can be updated per day.
     *
     * After updating a product, you can make additional changes using one of the following mutations:
     *
     * - [`productSet`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productSet):
     * Used to perform multiple operations on products, such as creating or modifying product options and variants.
     * - [`publishablePublish`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/publishablePublish):
     * Used to publish the product and make it available to customers, if the product is currently unpublished.
     *
     * Learn more about the [product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model)
     * and [adding product data](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/add-data).
     */
    public function selectProductUpdate(?ShopifyRootMutationProductUpdateArgumentsObject $argsObject = null): ShopifyProductUpdatePayloadQueryObject
    {
        $object = new ShopifyProductUpdatePayloadQueryObject("productUpdate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates properties of media attached to a [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product). You can modify alt text for accessibility or change preview images for existing media items.
     *
     * Provide the product ID and an array of [`UpdateMediaInput`](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/UpdateMediaInput) objects. Each update specifies the media's ID and the properties to change. Updates apply only to media already attached to the product and don't affect their position in the product gallery.
     *
     * @deprecated Use `fileUpdate` instead.
     */
    public function selectProductUpdateMedia(ShopifyRootMutationProductUpdateMediaArgumentsObject $argsObject): ShopifyProductUpdateMediaPayloadQueryObject
    {
        $object = new ShopifyProductUpdateMediaPayloadQueryObject("productUpdateMedia");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Appends existing media from a product to specific variants of that product, creating associations between media files and particular product options. This allows different variants to showcase relevant images or videos.
     *
     * For example, a t-shirt product might have color variants where each color variant displays only the images showing that specific color, helping customers see exactly what they're purchasing.
     *
     * Use `ProductVariantAppendMedia` to:
     * - Associate specific images with product variants for accurate display
     * - Build variant-specific media management in product interfaces
     * - Implement automated media assignment based on variant attributes
     *
     * The operation links existing product media to variants without duplicating files, maintaining efficient media storage while enabling variant-specific displays.
     *
     * Learn more about [product variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant).
     */
    public function selectProductVariantAppendMedia(ShopifyRootMutationProductVariantAppendMediaArgumentsObject $argsObject): ShopifyProductVariantAppendMediaPayloadQueryObject
    {
        $object = new ShopifyProductVariantAppendMediaPayloadQueryObject("productVariantAppendMedia");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Detaches media from product variants.
     */
    public function selectProductVariantDetachMedia(ShopifyRootMutationProductVariantDetachMediaArgumentsObject $argsObject): ShopifyProductVariantDetachMediaPayloadQueryObject
    {
        $object = new ShopifyProductVariantDetachMediaPayloadQueryObject("productVariantDetachMedia");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds multiple selling plan groups to a product variant.
     */
    public function selectProductVariantJoinSellingPlanGroups(ShopifyRootMutationProductVariantJoinSellingPlanGroupsArgumentsObject $argsObject): ShopifyProductVariantJoinSellingPlanGroupsPayloadQueryObject
    {
        $object = new ShopifyProductVariantJoinSellingPlanGroupsPayloadQueryObject("productVariantJoinSellingPlanGroups");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Remove multiple groups from a product variant.
     */
    public function selectProductVariantLeaveSellingPlanGroups(ShopifyRootMutationProductVariantLeaveSellingPlanGroupsArgumentsObject $argsObject): ShopifyProductVariantLeaveSellingPlanGroupsPayloadQueryObject
    {
        $object = new ShopifyProductVariantLeaveSellingPlanGroupsPayloadQueryObject("productVariantLeaveSellingPlanGroups");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates new bundles, updates component quantities in existing bundles, and removes bundle components for one or multiple [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects.
     *
     * Each bundle variant can contain up to 30 component variants with specified quantities. After an app assigns components to a bundle, only that app can manage those components.
     *
     * > Note:
     * > For most use cases, use [`productBundleCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productBundleCreate) instead, which creates product fixed bundles. `productVariantRelationshipBulkUpdate` is for [variant fixed bundles](https://shopify.dev/docs/apps/build/product-merchandising/bundles/add-variant-fixed-bundle), where each variant has its own component configuration.
     */
    public function selectProductVariantRelationshipBulkUpdate(ShopifyRootMutationProductVariantRelationshipBulkUpdateArgumentsObject $argsObject): ShopifyProductVariantRelationshipBulkUpdatePayloadQueryObject
    {
        $object = new ShopifyProductVariantRelationshipBulkUpdatePayloadQueryObject("productVariantRelationshipBulkUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates multiple [product variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant)
     * for a single [product](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) in one operation.
     * You can run this mutation directly or as part of a [bulk operation](https://shopify.dev/docs/api/usage/bulk-operations/imports)
     * for large-scale catalog updates.
     *
     * Use the `productVariantsBulkCreate` mutation to efficiently add new product variants—such as different sizes,
     * colors, or materials—to an existing product. The mutation is helpful if you need to add product variants in bulk,
     * such as importing from an external system.
     *
     * The mutation supports:
     *
     * - Creating variants with custom option values
     * - Associating media (for example, images, videos, and 3D models) with the product or its variants
     * - Handling complex product configurations
     *
     * > Note:
     * > By default, stores have a limit of 2048 product variants for each product.
     *
     * After creating variants, you can make additional changes using one of the following mutations:
     *
     * - [`productVariantsBulkUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productVariantsBulkUpdate):
     * Updates multiple product variants for a single product in one operation.
     * - [`productSet`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productSet):
     * Used to perform multiple operations on products, such as creating or modifying product options and variants.
     *
     * You can also specifically manage product options through related mutations:
     *
     * - [`productOptionsCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsCreate)
     * - [`productOptionUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionUpdate)
     * - [`productOptionsReorder`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsReorder)
     * - [`productOptionsDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsDelete)
     *
     * Learn more about the [product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model)
     * and [adding product data](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/add-data).
     */
    public function selectProductVariantsBulkCreate(ShopifyRootMutationProductVariantsBulkCreateArgumentsObject $argsObject): ShopifyProductVariantsBulkCreatePayloadQueryObject
    {
        $object = new ShopifyProductVariantsBulkCreatePayloadQueryObject("productVariantsBulkCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes multiple variants in a single [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product). Specify the product ID and an array of variant IDs to remove variants in bulk. You can call this mutation directly or through the [`bulkOperationRunMutation`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/bulkOperationRunMutation) mutation. Returns the updated product and any [`UserError`](https://shopify.dev/docs/api/admin-graphql/latest/objects/UserError) objects.
     */
    public function selectProductVariantsBulkDelete(ShopifyRootMutationProductVariantsBulkDeleteArgumentsObject $argsObject): ShopifyProductVariantsBulkDeletePayloadQueryObject
    {
        $object = new ShopifyProductVariantsBulkDeletePayloadQueryObject("productVariantsBulkDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Reorders multiple variants in a single product. This mutation can be called directly or via the bulkOperation.
     */
    public function selectProductVariantsBulkReorder(ShopifyRootMutationProductVariantsBulkReorderArgumentsObject $argsObject): ShopifyProductVariantsBulkReorderPayloadQueryObject
    {
        $object = new ShopifyProductVariantsBulkReorderPayloadQueryObject("productVariantsBulkReorder");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates multiple [product variants](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant)
     * for a single [product](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) in one operation.
     * You can run this mutation directly or as part of a [bulk operation](https://shopify.dev/docs/api/usage/bulk-operations/imports)
     * for large-scale catalog updates.
     *
     * Use the `productVariantsBulkUpdate` mutation to efficiently modify product variants—such as different sizes,
     * colors, or materials—associated with an existing product. The mutation is helpful if you need to update a
     * product's variants in bulk, such as importing from an external system.
     *
     * The mutation supports:
     *
     * - Updating variants with custom option values
     * - Associating media (for example, images, videos, and 3D models) with the product or its variants
     * - Handling complex product configurations
     *
     * > Note:
     * > By default, stores have a limit of 2048 product variants for each product.
     *
     * After creating variants, you can make additional changes using the
     * [`productSet`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productSet) mutation,
     * which is used to perform multiple operations on products, such as creating or modifying product options and variants.
     *
     * You can also specifically manage product options through related mutations:
     *
     * - [`productOptionsCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsCreate)
     * - [`productOptionUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionUpdate)
     * - [`productOptionsReorder`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsReorder)
     * - [`productOptionsDelete`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productOptionsDelete)
     *
     * Learn more about the [product model](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model)
     * and [adding product data](https://shopify.dev/docs/apps/build/graphql/migrate/new-product-model/add-data).
     */
    public function selectProductVariantsBulkUpdate(ShopifyRootMutationProductVariantsBulkUpdateArgumentsObject $argsObject): ShopifyProductVariantsBulkUpdatePayloadQueryObject
    {
        $object = new ShopifyProductVariantsBulkUpdatePayloadQueryObject("productVariantsBulkUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates the server pixel to connect to a Google PubSub endpoint.
     * Running this mutation deletes any previous subscriptions for the server pixel.
     */
    public function selectPubSubServerPixelUpdate(ShopifyRootMutationPubSubServerPixelUpdateArgumentsObject $argsObject): ShopifyPubSubServerPixelUpdatePayloadQueryObject
    {
        $object = new ShopifyPubSubServerPixelUpdatePayloadQueryObject("pubSubServerPixelUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a webhook subscription that notifies your [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) when specific events occur in a shop. Webhooks push event data to your endpoint immediately when changes happen, eliminating the need for polling.
     *
     * This mutation configures webhook delivery to a Google Cloud Pub/Sub topic. You can filter events using [Shopify API search syntax](https://shopify.dev/docs/api/usage/search-syntax) to receive only relevant webhooks, control which data fields are included in webhook payloads, and specify metafield namespaces to include.
     *
     * > Note:
     * > The Webhooks API version [configured in your app](https://shopify.dev/docs/apps/build/webhooks/subscribe/use-newer-api-version) determines the API version for webhook events. You can't specify it per subscription.
     *
     *
     * Building an app? If you only use app-specific webhooks, you won't need this. App-specific webhook subscriptions specified in your `shopify.app.toml` may be easier. They are automatically kept up to date by Shopify & require less maintenance. Please read [About managing webhook subscriptions](https://shopify.dev/docs/apps/build/webhooks/subscribe).
     *
     * @deprecated Use `webhookSubscriptionCreate` instead.
     */
    public function selectPubSubWebhookSubscriptionCreate(ShopifyRootMutationPubSubWebhookSubscriptionCreateArgumentsObject $argsObject): ShopifyPubSubWebhookSubscriptionCreatePayloadQueryObject
    {
        $object = new ShopifyPubSubWebhookSubscriptionCreatePayloadQueryObject("pubSubWebhookSubscriptionCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a Google Cloud Pub/Sub webhook subscription.
     *
     * Building an app? If you only use app-specific webhooks, you won't need this. App-specific webhook subscriptions specified in your `shopify.app.toml` may be easier. They are automatically kept up to date by Shopify & require less maintenance. Please read [About managing webhook subscriptions](https://shopify.dev/docs/apps/build/webhooks/subscribe).
     *
     * @deprecated Use `webhookSubscriptionUpdate` instead.
     */
    public function selectPubSubWebhookSubscriptionUpdate(ShopifyRootMutationPubSubWebhookSubscriptionUpdateArgumentsObject $argsObject): ShopifyPubSubWebhookSubscriptionUpdatePayloadQueryObject
    {
        $object = new ShopifyPubSubWebhookSubscriptionUpdatePayloadQueryObject("pubSubWebhookSubscriptionUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a [`Publication`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication) that controls which [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) and [`Collection`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection) customers can access through a [`Catalog`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Catalog).
     *
     * ### When to create a publication
     *
     * Publications are **optional** for catalogs. Only create a publication if you need to control which products are visible in a specific catalog context. When a publication isn't associated with a catalog, product availability is determined by the sales channel.
     *
     * **Create a publication if you need to:**
     * - Restrict product visibility to a subset of your inventory for a specific market or company location
     * - Publish different product selections to different contexts
     *
     * **Do NOT create a publication if:**
     * - You want product availability determined by the sales channel
     * - You only need custom pricing (use a price list on the catalog instead)
     *
     * ### Configuration options
     *
     * You can create an empty publication and add products later, or prepopulate it with all existing products. The [`autoPublish`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/publicationCreate#arguments-input.fields.autoPublish) field determines whether the publication automatically adds newly created products.
     */
    public function selectPublicationCreate(ShopifyRootMutationPublicationCreateArgumentsObject $argsObject): ShopifyPublicationCreatePayloadQueryObject
    {
        $object = new ShopifyPublicationCreatePayloadQueryObject("publicationCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a publication.
     */
    public function selectPublicationDelete(ShopifyRootMutationPublicationDeleteArgumentsObject $argsObject): ShopifyPublicationDeletePayloadQueryObject
    {
        $object = new ShopifyPublicationDeletePayloadQueryObject("publicationDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a [`Publication`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     *
     * You can add or remove [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) from the publication, with a maximum of 50 items per operation. The [`autoPublish`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/publicationUpdate#arguments-input.fields.autoPublish) field determines whether new products automatically display in this publication.
     */
    public function selectPublicationUpdate(ShopifyRootMutationPublicationUpdateArgumentsObject $argsObject): ShopifyPublicationUpdatePayloadQueryObject
    {
        $object = new ShopifyPublicationUpdatePayloadQueryObject("publicationUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Publishes a resource, such as a [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) or [`Collection`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection), to one or more [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication).
     *
     * For products to be visible in a channel, they must have an active [`ProductStatus`](https://shopify.dev/docs/api/admin-graphql/latest/enums/ProductStatus). Products sold exclusively on subscription (`requiresSellingPlan: true`) can only be published to online stores.
     *
     * You can schedule future publication by providing a publish date. Only online store channels support [scheduled publishing](https://shopify.dev/docs/apps/build/sales-channels/scheduled-product-publishing).
     */
    public function selectPublishablePublish(ShopifyRootMutationPublishablePublishArgumentsObject $argsObject): ShopifyPublishablePublishPayloadQueryObject
    {
        $object = new ShopifyPublishablePublishPayloadQueryObject("publishablePublish");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Publishes a resource to the current [`Channel`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Channel) associated with the requesting app. The system determines the current channel by the app's API client ID. Resources include [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) and [`Collection`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection) objects that implement the [`Publishable`](https://shopify.dev/docs/api/admin-graphql/latest/interfaces/Publishable) interface.
     *
     * For products to be visible in the channel, they must have an active [`ProductStatus`](https://shopify.dev/docs/api/admin-graphql/latest/enums/ProductStatus). Products sold exclusively on subscription ([`requiresSellingPlan`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product#field-Product.fields.requiresSellingPlan): `true`) can only be published to online stores.
     *
     * @deprecated Use `publishablePublish` instead.
     */
    public function selectPublishablePublishToCurrentChannel(ShopifyRootMutationPublishablePublishToCurrentChannelArgumentsObject $argsObject): ShopifyPublishablePublishToCurrentChannelPayloadQueryObject
    {
        $object = new ShopifyPublishablePublishToCurrentChannelPayloadQueryObject("publishablePublishToCurrentChannel");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Unpublishes a resource, such as a [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) or [`Collection`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection), from one or more [publications](https://shopify.dev/docs/api/admin-graphql/latest/objects/Publication). The resource remains in your store but becomes unavailable to customers.
     *
     * For products to be visible in a channel, they must have an active [`ProductStatus`](https://shopify.dev/docs/api/admin-graphql/latest/enums/ProductStatus).
     */
    public function selectPublishableUnpublish(ShopifyRootMutationPublishableUnpublishArgumentsObject $argsObject): ShopifyPublishableUnpublishPayloadQueryObject
    {
        $object = new ShopifyPublishableUnpublishPayloadQueryObject("publishableUnpublish");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Unpublishes a resource from the current channel. If the resource is a product, then it's visible in the channel only if the product status is `active`.
     *
     * @deprecated Use `publishableUnpublish` instead.
     */
    public function selectPublishableUnpublishToCurrentChannel(ShopifyRootMutationPublishableUnpublishToCurrentChannelArgumentsObject $argsObject): ShopifyPublishableUnpublishToCurrentChannelPayloadQueryObject
    {
        $object = new ShopifyPublishableUnpublishToCurrentChannelPayloadQueryObject("publishableUnpublishToCurrentChannel");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates quantity pricing on a [`PriceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceList) for specific [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) objects. You can set fixed prices (see [`PriceListPrice`](https://shopify.dev/docs/api/admin-graphql/latest/objects/PriceListPrice)), quantity rules, and quantity price breaks in a single operation.
     *
     * [`QuantityRule`](https://shopify.dev/docs/api/admin-graphql/latest/objects/QuantityRule) objects define minimum, maximum, and increment constraints for ordering. [`QuantityPriceBreak`](https://shopify.dev/docs/api/admin-graphql/latest/objects/QuantityPriceBreak) objects offer tiered pricing based on purchase volume.
     *
     * The mutation executes delete operations before create operations and doesn't allow partial updates.
     *
     * > Note: If any requested change fails, then the mutation doesn't apply any of the changes.
     */
    public function selectQuantityPricingByVariantUpdate(ShopifyRootMutationQuantityPricingByVariantUpdateArgumentsObject $argsObject): ShopifyQuantityPricingByVariantUpdatePayloadQueryObject
    {
        $object = new ShopifyQuantityPricingByVariantUpdatePayloadQueryObject("quantityPricingByVariantUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates or updates existing quantity rules on a price list.
     * You can use the `quantityRulesAdd` mutation to set order level minimums, maximums and increments for specific product variants.
     */
    public function selectQuantityRulesAdd(ShopifyRootMutationQuantityRulesAddArgumentsObject $argsObject): ShopifyQuantityRulesAddPayloadQueryObject
    {
        $object = new ShopifyQuantityRulesAddPayloadQueryObject("quantityRulesAdd");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes specific quantity rules from a price list using a product variant ID.
     * You can use the `quantityRulesDelete` mutation to delete a set of quantity rules from a price list.
     */
    public function selectQuantityRulesDelete(ShopifyRootMutationQuantityRulesDeleteArgumentsObject $argsObject): ShopifyQuantityRulesDeletePayloadQueryObject
    {
        $object = new ShopifyQuantityRulesDeletePayloadQueryObject("quantityRulesDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a refund for an order, allowing you to process returns and issue payments back to customers.
     *
     * Use the `refundCreate` mutation to programmatically process refunds in scenarios where you need to
     * return money to customers, such as when handling returns, processing chargebacks, or correcting
     * order errors.
     *
     * The `refundCreate` mutation supports various refund scenarios:
     *
     * - Refunding line items with optional restocking
     * - Refunding shipping costs
     * - Refunding duties and import taxes
     * - Refunding additional fees
     * - Processing refunds through different payment methods
     * - Issuing store credit refunds (when enabled)
     *
     * You can create both full and partial refunds, and optionally allow over-refunding in specific
     * cases.
     *
     * If the order has an existing
     * [write-off](https://help.shopify.com/manual/fulfillment/managing-orders/payments/waive-balance),
     * calling this mutation can reduce the written-off amount automatically when it reduces the order total
     * before write-offs below the remaining written-off amount.
     *
     * After creating a refund, you can track its status and details through the order's
     * [`refunds`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order#field-Order.fields.refunds)
     * field. The refund is associated with the order and can be used for reporting and reconciliation purposes.
     *
     * Learn more about
     * [managing returns](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/build-return-management)
     * and [refunding duties](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/view-and-refund-duties).
     *
     * > Note:
     * > The refunding behavior of the `refundCreate` mutation is similar to the
     * [`returnRefund`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/returnRefund)
     * mutation. The key difference is that the `refundCreate` mutation lets you to specify restocking behavior
     * for line items, whereas the `returnRefund` mutation focuses solely on handling the financial refund without
     * any restocking input.
     *
     * > Caution:
     * > As of 2026-01, this mutation supports an optional idempotency key using the `@idempotent` directive.
     * > As of 2026-04, the idempotency key is required and must be provided using the `@idempotent` directive.
     * > For more information, see the [idempotency documentation](https://shopify.dev/docs/api/usage/idempotent-requests).
     */
    public function selectRefundCreate(ShopifyRootMutationRefundCreateArgumentsObject $argsObject): ShopifyRefundCreatePayloadQueryObject
    {
        $object = new ShopifyRefundCreatePayloadQueryObject("refundCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes return and/or exchange lines from a return.
     *
     * If the order has an existing
     * [write-off](https://help.shopify.com/manual/fulfillment/managing-orders/payments/waive-balance),
     * calling this mutation can reduce the written-off amount automatically when it reduces the order total
     * before write-offs below the remaining written-off amount.
     */
    public function selectRemoveFromReturn(ShopifyRootMutationRemoveFromReturnArgumentsObject $argsObject): ShopifyRemoveFromReturnPayloadQueryObject
    {
        $object = new ShopifyRemoveFromReturnPayloadQueryObject("removeFromReturn");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a requested order edit on an order on behalf of a buyer.
     */
    public function selectRequestedOrderEditCreate(ShopifyRootMutationRequestedOrderEditCreateArgumentsObject $argsObject): ShopifyRequestedOrderEditCreatePayloadQueryObject
    {
        $object = new ShopifyRequestedOrderEditCreatePayloadQueryObject("requestedOrderEditCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Declines a requested order edit on an order.
     */
    public function selectRequestedOrderEditDecline(ShopifyRootMutationRequestedOrderEditDeclineArgumentsObject $argsObject): ShopifyRequestedOrderEditDeclinePayloadQueryObject
    {
        $object = new ShopifyRequestedOrderEditDeclinePayloadQueryObject("requestedOrderEditDecline");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Resolves a requested order edit on an order, marking it as completed.
     */
    public function selectRequestedOrderEditResolve(ShopifyRootMutationRequestedOrderEditResolveArgumentsObject $argsObject): ShopifyRequestedOrderEditResolvePayloadQueryObject
    {
        $object = new ShopifyRequestedOrderEditResolvePayloadQueryObject("requestedOrderEditResolve");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Approves a customer's return request.
     * If this mutation is successful, then the `Return.status` field of the
     * approved return is set to `OPEN`.
     *
     * If the order has an existing
     * [write-off](https://help.shopify.com/manual/fulfillment/managing-orders/payments/waive-balance),
     * calling this mutation can reduce the written-off amount automatically when it reduces the order total
     * before write-offs below the remaining written-off amount.
     */
    public function selectReturnApproveRequest(ShopifyRootMutationReturnApproveRequestArgumentsObject $argsObject): ShopifyReturnApproveRequestPayloadQueryObject
    {
        $object = new ShopifyReturnApproveRequestPayloadQueryObject("returnApproveRequest");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Cancels a return and restores the items back to being fulfilled.
     * Canceling a return is only available before any work has been done
     * on the return (such as an inspection or refund).
     *
     * If the order has an existing
     * [write-off](https://help.shopify.com/manual/fulfillment/managing-orders/payments/waive-balance),
     * calling this mutation can reduce the written-off amount automatically when it reduces the order total
     * before write-offs below the remaining written-off amount.
     */
    public function selectReturnCancel(ShopifyRootMutationReturnCancelArgumentsObject $argsObject): ShopifyReturnCancelPayloadQueryObject
    {
        $object = new ShopifyReturnCancelPayloadQueryObject("returnCancel");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Indicates a return is complete, either when a refund has been made and items restocked,
     * or simply when it has been marked as returned in the system.
     */
    public function selectReturnClose(ShopifyRootMutationReturnCloseArgumentsObject $argsObject): ShopifyReturnClosePayloadQueryObject
    {
        $object = new ShopifyReturnClosePayloadQueryObject("returnClose");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a return from an existing order that has at least one fulfilled
     * [line item](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem)
     * that hasn't yet been refunded. If you create a return on an archived order, then the order is automatically
     * unarchived.
     *
     * Use the `returnCreate` mutation when your workflow involves
     * [approving](https://shopify.dev/docs/api/admin-graphql/latest/mutations/returnApproveRequest) or
     * [declining](https://shopify.dev/docs/api/admin-graphql/latest/mutations/returnDeclineRequest) requested returns
     * outside of the Shopify platform.
     *
     * The `returnCreate` mutation performs the following actions:
     *
     * - Creates a return in the `OPEN` state, and assumes that the return request from the customer has already been
     * approved
     * - Creates a [reverse fulfillment order](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/manage-reverse-fulfillment-orders),
     * and enables you to create a [reverse delivery](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/manage-reverse-deliveries)
     * for the reverse fulfillment order
     *
     * If the order has an existing
     * [write-off](https://help.shopify.com/manual/fulfillment/managing-orders/payments/waive-balance),
     * calling this mutation can reduce the written-off amount automatically when it reduces the order total
     * before write-offs below the remaining written-off amount.
     *
     * After you've created a return, use the
     * [`return`](https://shopify.dev/docs/api/admin-graphql/latest/queries/return) query to retrieve the
     * return by its ID. Learn more about providing a
     * [return management workflow](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/build-return-management)
     * for merchants.
     */
    public function selectReturnCreate(ShopifyRootMutationReturnCreateArgumentsObject $argsObject): ShopifyReturnCreatePayloadQueryObject
    {
        $object = new ShopifyReturnCreatePayloadQueryObject("returnCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Declines a return on an order.
     * When a return is declined, each `ReturnLineItem.fulfillmentLineItem` can be associated to a new return.
     * Use the `ReturnCreate` or `ReturnRequest` mutation to initiate a new return.
     */
    public function selectReturnDeclineRequest(ShopifyRootMutationReturnDeclineRequestArgumentsObject $argsObject): ShopifyReturnDeclineRequestPayloadQueryObject
    {
        $object = new ShopifyReturnDeclineRequestPayloadQueryObject("returnDeclineRequest");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes return lines from a return.
     *
     * If the order has an existing
     * [write-off](https://help.shopify.com/manual/fulfillment/managing-orders/payments/waive-balance),
     * calling this mutation can reduce the written-off amount automatically when removing return lines also
     * removes restocking or return shipping fees and this reduces the order total before write-offs below
     * the remaining written-off amount.
     *
     * @deprecated Use `removeFromReturn` instead.
     */
    public function selectReturnLineItemRemoveFromReturn(ShopifyRootMutationReturnLineItemRemoveFromReturnArgumentsObject $argsObject): ShopifyReturnLineItemRemoveFromReturnPayloadQueryObject
    {
        $object = new ShopifyReturnLineItemRemoveFromReturnPayloadQueryObject("returnLineItemRemoveFromReturn");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Processes a return by confirming which items customers return and exchange, handling their disposition, and optionally issuing refunds. This mutation confirms the quantities for [`ReturnLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ReturnLineItem) and [`ExchangeLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ExchangeLineItem) objects previously created on the [`Return`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Return).
     *
     * For returned items, you specify how to handle them through dispositions such as restocking or disposal. The mutation creates [`FulfillmentOrder`](https://shopify.dev/docs/api/admin-graphql/latest/objects/FulfillmentOrder) objects for exchange items and records all transactions in the merchant's financial reports. You can optionally issue refunds through financial transfers, apply refund duties, and refund shipping costs.
     *
     * If the order has an existing
     * [write-off](https://help.shopify.com/manual/fulfillment/managing-orders/payments/waive-balance),
     * calling this mutation can reduce the written-off amount automatically when it reduces the order total
     * before write-offs below the remaining written-off amount.
     *
     * Learn more about [processing returns](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/build-return-management).
     */
    public function selectReturnProcess(ShopifyRootMutationReturnProcessArgumentsObject $argsObject): ShopifyReturnProcessPayloadQueryObject
    {
        $object = new ShopifyReturnProcessPayloadQueryObject("returnProcess");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a refund for items being returned when the return status is `OPEN` or `CLOSED`. This mutation processes the financial aspects of a return by refunding line items, shipping costs, and duties back to the customer.
     *
     * If the order has an existing
     * [write-off](https://help.shopify.com/manual/fulfillment/managing-orders/payments/waive-balance),
     * calling this mutation can reduce the written-off amount automatically when it reduces the order total
     * before write-offs below the remaining written-off amount.
     *
     * @deprecated Use `returnProcess` instead.
     */
    public function selectReturnRefund(ShopifyRootMutationReturnRefundArgumentsObject $argsObject): ShopifyReturnRefundPayloadQueryObject
    {
        $object = new ShopifyReturnRefundPayloadQueryObject("returnRefund");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Reopens a closed return.
     */
    public function selectReturnReopen(ShopifyRootMutationReturnReopenArgumentsObject $argsObject): ShopifyReturnReopenPayloadQueryObject
    {
        $object = new ShopifyReturnReopenPayloadQueryObject("returnReopen");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a return request that requires merchant approval before processing. The return has its status set to `REQUESTED` and the merchant must approve or decline it.
     *
     * Use this mutation when customers initiate returns that need review. After creating a requested return, use [`returnApproveRequest`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/returnApproveRequest) to approve it or [`returnDeclineRequest`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/returnDeclineRequest) to decline it.
     *
     * For returns that should be immediately open for processing, use the [`returnCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/returnCreate) mutation instead.
     *
     * Learn more about [building return management workflows](https://shopify.dev/docs/apps/build/orders-fulfillment/returns-apps/build-return-management).
     */
    public function selectReturnRequest(ShopifyRootMutationReturnRequestArgumentsObject $argsObject): ShopifyReturnRequestPayloadQueryObject
    {
        $object = new ShopifyReturnRequestPayloadQueryObject("returnRequest");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a new reverse delivery with associated external shipping information.
     */
    public function selectReverseDeliveryCreateWithShipping(ShopifyRootMutationReverseDeliveryCreateWithShippingArgumentsObject $argsObject): ShopifyReverseDeliveryCreateWithShippingPayloadQueryObject
    {
        $object = new ShopifyReverseDeliveryCreateWithShippingPayloadQueryObject("reverseDeliveryCreateWithShipping");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a reverse delivery with associated external shipping information.
     */
    public function selectReverseDeliveryShippingUpdate(ShopifyRootMutationReverseDeliveryShippingUpdateArgumentsObject $argsObject): ShopifyReverseDeliveryShippingUpdatePayloadQueryObject
    {
        $object = new ShopifyReverseDeliveryShippingUpdatePayloadQueryObject("reverseDeliveryShippingUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Disposes reverse fulfillment order line items.
     */
    public function selectReverseFulfillmentOrderDispose(ShopifyRootMutationReverseFulfillmentOrderDisposeArgumentsObject $argsObject): ShopifyReverseFulfillmentOrderDisposePayloadQueryObject
    {
        $object = new ShopifyReverseFulfillmentOrderDisposePayloadQueryObject("reverseFulfillmentOrderDispose");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a saved search.
     */
    public function selectSavedSearchCreate(ShopifyRootMutationSavedSearchCreateArgumentsObject $argsObject): ShopifySavedSearchCreatePayloadQueryObject
    {
        $object = new ShopifySavedSearchCreatePayloadQueryObject("savedSearchCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Delete a saved search.
     */
    public function selectSavedSearchDelete(ShopifyRootMutationSavedSearchDeleteArgumentsObject $argsObject): ShopifySavedSearchDeletePayloadQueryObject
    {
        $object = new ShopifySavedSearchDeletePayloadQueryObject("savedSearchDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a saved search.
     */
    public function selectSavedSearchUpdate(ShopifyRootMutationSavedSearchUpdateArgumentsObject $argsObject): ShopifySavedSearchUpdatePayloadQueryObject
    {
        $object = new ShopifySavedSearchUpdatePayloadQueryObject("savedSearchUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * <div class="note"><h4>Theme app extensions</h4>
     *   <p>If your app integrates with a Shopify theme and you plan to submit it to the Shopify App Store, you must use theme app extensions instead of Script tags. Script tags can only be used with vintage themes. <a href="/apps/online-store#what-integration-method-should-i-use" target="_blank">Learn more</a>.</p></div>
     *
     *
     * Creates a new script tag.
     */
    public function selectScriptTagCreate(ShopifyRootMutationScriptTagCreateArgumentsObject $argsObject): ShopifyScriptTagCreatePayloadQueryObject
    {
        $object = new ShopifyScriptTagCreatePayloadQueryObject("scriptTagCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * <div class="note"><h4>Theme app extensions</h4>
     *   <p>If your app integrates with a Shopify theme and you plan to submit it to the Shopify App Store, you must use theme app extensions instead of Script tags. Script tags can only be used with vintage themes. <a href="/apps/online-store#what-integration-method-should-i-use" target="_blank">Learn more</a>.</p></div>
     *
     *
     * Deletes a script tag.
     */
    public function selectScriptTagDelete(ShopifyRootMutationScriptTagDeleteArgumentsObject $argsObject): ShopifyScriptTagDeletePayloadQueryObject
    {
        $object = new ShopifyScriptTagDeletePayloadQueryObject("scriptTagDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * <div class="note"><h4>Theme app extensions</h4>
     *   <p>If your app integrates with a Shopify theme and you plan to submit it to the Shopify App Store, you must use theme app extensions instead of Script tags. Script tags can only be used with vintage themes. <a href="/apps/online-store#what-integration-method-should-i-use" target="_blank">Learn more</a>.</p></div>
     *
     *
     * Updates a script tag.
     */
    public function selectScriptTagUpdate(ShopifyRootMutationScriptTagUpdateArgumentsObject $argsObject): ShopifyScriptTagUpdatePayloadQueryObject
    {
        $object = new ShopifyScriptTagUpdatePayloadQueryObject("scriptTagUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a segment.
     */
    public function selectSegmentCreate(ShopifyRootMutationSegmentCreateArgumentsObject $argsObject): ShopifySegmentCreatePayloadQueryObject
    {
        $object = new ShopifySegmentCreatePayloadQueryObject("segmentCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a segment.
     */
    public function selectSegmentDelete(ShopifyRootMutationSegmentDeleteArgumentsObject $argsObject): ShopifySegmentDeletePayloadQueryObject
    {
        $object = new ShopifySegmentDeletePayloadQueryObject("segmentDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a segment.
     */
    public function selectSegmentUpdate(ShopifyRootMutationSegmentUpdateArgumentsObject $argsObject): ShopifySegmentUpdatePayloadQueryObject
    {
        $object = new ShopifySegmentUpdatePayloadQueryObject("segmentUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds multiple product variants to a selling plan group.
     */
    public function selectSellingPlanGroupAddProductVariants(ShopifyRootMutationSellingPlanGroupAddProductVariantsArgumentsObject $argsObject): ShopifySellingPlanGroupAddProductVariantsPayloadQueryObject
    {
        $object = new ShopifySellingPlanGroupAddProductVariantsPayloadQueryObject("sellingPlanGroupAddProductVariants");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds multiple products to a selling plan group.
     */
    public function selectSellingPlanGroupAddProducts(ShopifyRootMutationSellingPlanGroupAddProductsArgumentsObject $argsObject): ShopifySellingPlanGroupAddProductsPayloadQueryObject
    {
        $object = new ShopifySellingPlanGroupAddProductsPayloadQueryObject("sellingPlanGroupAddProducts");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a selling plan group that defines how products can be sold and purchased. A selling plan group represents a selling method such as "Subscribe and save", "Pre-order", or "Try before you buy" and contains one or more selling plans with specific billing, delivery, and pricing policies.
     *
     * Use the [`resources`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/sellingPlanGroupCreate#arguments-resources) argument to associate products or product variants with the group during creation. You can also add products later using [`sellingPlanGroupAddProducts`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/sellingPlanGroupAddProducts) or [`sellingPlanGroupAddProductVariants`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/sellingPlanGroupAddProductVariants).
     *
     * Learn more about [building selling plan groups](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/selling-plans/build-a-selling-plan#step-1-create-a-selling-plan-group) or explore [examples of creating TBYB and other selling plan groups](https://shopify.dev/docs/api/admin-graphql/latest/mutations/sellingPlanGroupCreate?example=create-a-tbyb-selling-plan-group).
     */
    public function selectSellingPlanGroupCreate(ShopifyRootMutationSellingPlanGroupCreateArgumentsObject $argsObject): ShopifySellingPlanGroupCreatePayloadQueryObject
    {
        $object = new ShopifySellingPlanGroupCreatePayloadQueryObject("sellingPlanGroupCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Delete a Selling Plan Group. This does not affect subscription contracts.
     */
    public function selectSellingPlanGroupDelete(ShopifyRootMutationSellingPlanGroupDeleteArgumentsObject $argsObject): ShopifySellingPlanGroupDeletePayloadQueryObject
    {
        $object = new ShopifySellingPlanGroupDeletePayloadQueryObject("sellingPlanGroupDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes multiple product variants from a selling plan group.
     */
    public function selectSellingPlanGroupRemoveProductVariants(ShopifyRootMutationSellingPlanGroupRemoveProductVariantsArgumentsObject $argsObject): ShopifySellingPlanGroupRemoveProductVariantsPayloadQueryObject
    {
        $object = new ShopifySellingPlanGroupRemoveProductVariantsPayloadQueryObject("sellingPlanGroupRemoveProductVariants");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes multiple products from a selling plan group.
     */
    public function selectSellingPlanGroupRemoveProducts(ShopifyRootMutationSellingPlanGroupRemoveProductsArgumentsObject $argsObject): ShopifySellingPlanGroupRemoveProductsPayloadQueryObject
    {
        $object = new ShopifySellingPlanGroupRemoveProductsPayloadQueryObject("sellingPlanGroupRemoveProducts");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Update a Selling Plan Group.
     */
    public function selectSellingPlanGroupUpdate(ShopifyRootMutationSellingPlanGroupUpdateArgumentsObject $argsObject): ShopifySellingPlanGroupUpdatePayloadQueryObject
    {
        $object = new ShopifySellingPlanGroupUpdatePayloadQueryObject("sellingPlanGroupUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a new unconfigured server pixel. A single server pixel can exist for an app and shop combination. If you call this mutation when a server pixel already exists, then an error will return.
     */
    public function selectServerPixelCreate(?ShopifyRootMutationServerPixelCreateArgumentsObject $argsObject = null): ShopifyServerPixelCreatePayloadQueryObject
    {
        $object = new ShopifyServerPixelCreatePayloadQueryObject("serverPixelCreate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes the Server Pixel associated with the current app & shop.
     */
    public function selectServerPixelDelete(?ShopifyRootMutationServerPixelDeleteArgumentsObject $argsObject = null): ShopifyServerPixelDeletePayloadQueryObject
    {
        $object = new ShopifyServerPixelDeletePayloadQueryObject("serverPixelDelete");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Purchases a shipping label for a fulfillment order.
     *
     * The `shippingLabelPurchase` mutation buys one shipping label for one fulfillment order using Shopify Shipping.
     * The mutation validates the fulfillment order, shipment details, package information, and available rates before it starts an asynchronous label purchase.
     *
     * > Note:
     * > The shop must have accepted the Shopify Shipping terms of service before an app can purchase labels.
     * >
     * > FedEx label purchases are not supported.
     *
     * After validation, the mutation builds the shipment details, fetches available rates, selects a rate, and enqueues the label purchase. If you provide `preferredRateSelection`, the mutation attempts to purchase the matching carrier and service. If you don't provide `preferredRateSelection`, the mutation uses Shopify Shipping's default rate selection.
     *
     * Default rate selection first tries to keep the fulfillment order's buyer-selected delivery method when available. If no buyer-selected rate matches, the mutation uses the shop's preferred carrier and service when configured. Otherwise, it uses Shopify's recommended rate for the shipment destination.
     *
     * For Merchant of Record (MoR) and Markets Pro orders, the mutation first removes rates from carriers that don't support Markets Pro.
     *
     * A shipping label can be purchased only when the fulfillment order meets the following criteria:
     *
     * - The fulfillment order is fulfillable and requires shipping.
     * - The order has a destination shipping address.
     * - The fulfillment order has an assigned location that can be used as the origin address.
     * - The shipment has a valid shipping date, package, weight, and required customs information.
     * - At least one shipping rate is available for the shipment.
     *
     * The mutation can return errors in two places:
     *
     * - Synchronous validation errors are returned in the mutation's `userErrors` field. For example, invalid fulfillment orders, invalid package dimensions, missing customs information, or unavailable rates.
     * - Asynchronous purchase-processing errors are returned in the `ShippingLabelPurchaseResult.errors` field after the purchase starts. For example, carrier availability, connection, billing, or other purchase-processing failures.
     *
     * Use the returned `ShippingLabelPurchaseResult.id` to poll the purchase status with the `node` query. The result starts with a status of `PENDING_PURCHASE` and ends with `PURCHASED` or `PURCHASE_FAILED`. When the purchase succeeds, `shippingLabels` contains the purchased label.
     */
    public function selectShippingLabelPurchase(ShopifyRootMutationShippingLabelPurchaseArgumentsObject $argsObject): ShopifyShippingLabelPurchasePayloadQueryObject
    {
        $object = new ShopifyShippingLabelPurchasePayloadQueryObject("shippingLabelPurchase");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a shipping package.
     */
    public function selectShippingPackageDelete(ShopifyRootMutationShippingPackageDeleteArgumentsObject $argsObject): ShopifyShippingPackageDeletePayloadQueryObject
    {
        $object = new ShopifyShippingPackageDeletePayloadQueryObject("shippingPackageDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Set a shipping package as the default.
     * The default shipping package is the one used to calculate shipping costs on checkout.
     */
    public function selectShippingPackageMakeDefault(ShopifyRootMutationShippingPackageMakeDefaultArgumentsObject $argsObject): ShopifyShippingPackageMakeDefaultPayloadQueryObject
    {
        $object = new ShopifyShippingPackageMakeDefaultPayloadQueryObject("shippingPackageMakeDefault");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a shipping package.
     */
    public function selectShippingPackageUpdate(ShopifyRootMutationShippingPackageUpdateArgumentsObject $argsObject): ShopifyShippingPackageUpdatePayloadQueryObject
    {
        $object = new ShopifyShippingPackageUpdatePayloadQueryObject("shippingPackageUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a locale for a shop. This also deletes all translations of this locale.
     */
    public function selectShopLocaleDisable(ShopifyRootMutationShopLocaleDisableArgumentsObject $argsObject): ShopifyShopLocaleDisablePayloadQueryObject
    {
        $object = new ShopifyShopLocaleDisablePayloadQueryObject("shopLocaleDisable");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds a locale for a shop. The newly added locale is in the unpublished state.
     */
    public function selectShopLocaleEnable(ShopifyRootMutationShopLocaleEnableArgumentsObject $argsObject): ShopifyShopLocaleEnablePayloadQueryObject
    {
        $object = new ShopifyShopLocaleEnablePayloadQueryObject("shopLocaleEnable");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a locale for a shop.
     */
    public function selectShopLocaleUpdate(ShopifyRootMutationShopLocaleUpdateArgumentsObject $argsObject): ShopifyShopLocaleUpdatePayloadQueryObject
    {
        $object = new ShopifyShopLocaleUpdatePayloadQueryObject("shopLocaleUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a shop policy.
     */
    public function selectShopPolicyUpdate(ShopifyRootMutationShopPolicyUpdateArgumentsObject $argsObject): ShopifyShopPolicyUpdatePayloadQueryObject
    {
        $object = new ShopifyShopPolicyUpdatePayloadQueryObject("shopPolicyUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The `ResourceFeedback` object lets your app report the status of shops and their resources. For example, if
     * your app is a marketplace channel, then you can use resource feedback to alert merchants that they need to connect their marketplace account by signing in.
     *
     * Resource feedback notifications are displayed to the merchant on the home screen of their Shopify admin, and in the product details view for any products that are published to your app.
     *
     * This resource should be used only in cases where you're describing steps that a merchant is required to complete. If your app offers optional or promotional set-up steps, or if it makes recommendations, then don't use resource feedback to let merchants know about them.
     *
     * ## Sending feedback on a shop
     *
     * You can send resource feedback on a shop to let the merchant know what steps they need to take to make sure that your app is set up correctly. Feedback can have one of two states: `REQUIRES_ACTION` or `ACCEPTED`. You need to send a `REQUIRES_ACTION` feedback request for each step that the merchant is required to complete.
     *
     * If there are multiple set-up steps that require merchant action, then send feedback with a state of `REQUIRES_ACTION` as merchants complete prior steps. When all required actions are resolved, send an `ACCEPTED` feedback request to clear the active feedback signal.
     *
     * ### Clearing feedback with ACCEPTED
     * Sending `state: ACCEPTED` removes the active feedback entry. After this mutation succeeds, reading `channel.resourceFeedback`, `app.feedback`, or the `feedback` field on this payload may return `null`—this is expected behavior, not a mutation failure. A `null` result means no outstanding feedback exists for the channel.
     *
     * ### Important
     * Sending feedback replaces previously sent feedback for the shop. Send a new `shopResourceFeedbackCreate` mutation to push the latest state of a shop or its resources to Shopify.
     */
    public function selectShopResourceFeedbackCreate(ShopifyRootMutationShopResourceFeedbackCreateArgumentsObject $argsObject): ShopifyShopResourceFeedbackCreatePayloadQueryObject
    {
        $object = new ShopifyShopResourceFeedbackCreatePayloadQueryObject("shopResourceFeedbackCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates an alternate currency payout for a Shopify Payments account.
     */
    public function selectShopifyPaymentsPayoutAlternateCurrencyCreate(ShopifyRootMutationShopifyPaymentsPayoutAlternateCurrencyCreateArgumentsObject $argsObject): ShopifyShopifyPaymentsPayoutAlternateCurrencyCreatePayloadQueryObject
    {
        $object = new ShopifyShopifyPaymentsPayoutAlternateCurrencyCreatePayloadQueryObject("shopifyPaymentsPayoutAlternateCurrencyCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Generates the URL and signed parameters needed to upload an asset to Shopify.
     *
     * @deprecated Use `stagedUploadsCreate` instead.
     */
    public function selectStagedUploadTargetGenerate(ShopifyRootMutationStagedUploadTargetGenerateArgumentsObject $argsObject): ShopifyStagedUploadTargetGeneratePayloadQueryObject
    {
        $object = new ShopifyStagedUploadTargetGeneratePayloadQueryObject("stagedUploadTargetGenerate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Uploads multiple images.
     *
     * @deprecated Use `stagedUploadsCreate` instead.
     */
    public function selectStagedUploadTargetsGenerate(ShopifyRootMutationStagedUploadTargetsGenerateArgumentsObject $argsObject): ShopifyStagedUploadTargetsGeneratePayloadQueryObject
    {
        $object = new ShopifyStagedUploadTargetsGeneratePayloadQueryObject("stagedUploadTargetsGenerate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates staged upload targets for file uploads such as images, videos, and 3D models.
     *
     * Use the `stagedUploadsCreate` mutation instead of direct file creation mutations when:
     *
     * - **Uploading large files**: Files over a few MB benefit from staged uploads for better reliability
     * - **Uploading media files**: Videos, 3D models, and high-resolution images
     * - **Bulk importing**: CSV files, product catalogs, or other bulk data
     * - **Using external file sources**: When files are stored remotely and need to be transferred to Shopify
     *
     * The `stagedUploadsCreate` mutation is the first step in Shopify's secure two-step upload process:
     *
     * **Step 1: Create staged upload targets** (this mutation)
     * - Generate secure, temporary upload URLs for your files.
     * - Receive authentication parameters for the upload.
     *
     * **Step 2: Upload files and create assets**
     * - Upload your files directly to the provided URLs using the authentication parameters.
     * - Use the returned `resourceUrl` as the `originalSource` in subsequent mutations like `fileCreate`.
     *
     * This approach provides better performance for large files, handles network interruptions gracefully,
     * and ensures secure file transfers to Shopify's storage infrastructure.
     *
     * > Note:
     * > File size is required when uploading
     * > [`VIDEO`](https://shopify.dev/docs/api/admin-graphql/latest/enums/StagedUploadTargetGenerateUploadResource#enums-VIDEO) or
     * > [`MODEL_3D`](https://shopify.dev/docs/api/admin-graphql/latest/enums/StagedUploadTargetGenerateUploadResource#enums-MODEL_3D)
     * > resources.
     *
     * After creating staged upload targets, complete the process by:
     *
     * 1. **Uploading files**: Send your files to the returned [`url`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StagedMediaUploadTarget#field-StagedMediaUploadTarget.fields.url) using the provided
     * [`parameters`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StagedMediaUploadTarget#field-StagedMediaUploadTarget.fields.parameters)
     * for authentication
     * 2. **Creating file assets**: Use the [`resourceUrl`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StagedMediaUploadTarget#field-StagedMediaUploadTarget.fields.resourceUrl)
     * as the `originalSource` in mutations such as:
     *    - [`fileCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/fileCreate):
     *      Creates file assets from staged uploads
     *    - [`productUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/productUpdate):
     *      Updates products with new media from staged uploads
     *
     * Learn more about [uploading media to Shopify](https://shopify.dev/apps/online-store/media/products).
     */
    public function selectStagedUploadsCreate(ShopifyRootMutationStagedUploadsCreateArgumentsObject $argsObject): ShopifyStagedUploadsCreatePayloadQueryObject
    {
        $object = new ShopifyStagedUploadsCreatePayloadQueryObject("stagedUploadsCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Activates the specified standard metafield definition from its template.
     *
     * Refer to the [list of standard metafield definition templates](https://shopify.dev/apps/metafields/definitions/standard-definitions).
     */
    public function selectStandardMetafieldDefinitionEnable(ShopifyRootMutationStandardMetafieldDefinitionEnableArgumentsObject $argsObject): ShopifyStandardMetafieldDefinitionEnablePayloadQueryObject
    {
        $object = new ShopifyStandardMetafieldDefinitionEnablePayloadQueryObject("standardMetafieldDefinitionEnable");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Enables the specified standard metaobject definition from its template.
     */
    public function selectStandardMetaobjectDefinitionEnable(ShopifyRootMutationStandardMetaobjectDefinitionEnableArgumentsObject $argsObject): ShopifyStandardMetaobjectDefinitionEnablePayloadQueryObject
    {
        $object = new ShopifyStandardMetaobjectDefinitionEnablePayloadQueryObject("standardMetaobjectDefinitionEnable");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds funds to a [`StoreCreditAccount`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StoreCreditAccount) by creating a [`StoreCreditAccountCreditTransaction`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StoreCreditAccountCreditTransaction). The mutation accepts either a store credit account ID, a [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) ID, or a [`CompanyLocation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyLocation) ID. When you provide a customer or company location ID, it automatically creates an account if one doesn't exist for the specified currency.
     *
     * Store credit accounts are currency-specific. A single owner can have multiple accounts, each holding a different currency. Use the most appropriate currency for the given store credit account owner.
     *
     * Credits can optionally include an expiration date.
     */
    public function selectStoreCreditAccountCredit(ShopifyRootMutationStoreCreditAccountCreditArgumentsObject $argsObject): ShopifyStoreCreditAccountCreditPayloadQueryObject
    {
        $object = new ShopifyStoreCreditAccountCreditPayloadQueryObject("storeCreditAccountCredit");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a debit transaction that decreases the store credit account balance by the given amount.
     */
    public function selectStoreCreditAccountDebit(ShopifyRootMutationStoreCreditAccountDebitArgumentsObject $argsObject): ShopifyStoreCreditAccountDebitPayloadQueryObject
    {
        $object = new ShopifyStoreCreditAccountDebitPayloadQueryObject("storeCreditAccountDebit");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a storefront access token that delegates unauthenticated access scopes to clients using the [Storefront API](https://shopify.dev/docs/api/storefront). The token provides public access to storefront resources without requiring customer authentication.
     *
     * Each shop can have up to 100 active [`StorefrontAccessToken`](https://shopify.dev/docs/api/admin-graphql/latest/objects/StorefrontAccessToken) objects. Headless storefronts, mobile apps, and other client applications typically use these tokens to access public storefront data.
     *
     * Learn more about [building with the Storefront API](https://shopify.dev/docs/storefronts/headless/building-with-the-storefront-api/getting-started).
     */
    public function selectStorefrontAccessTokenCreate(ShopifyRootMutationStorefrontAccessTokenCreateArgumentsObject $argsObject): ShopifyStorefrontAccessTokenCreatePayloadQueryObject
    {
        $object = new ShopifyStorefrontAccessTokenCreatePayloadQueryObject("storefrontAccessTokenCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a storefront access token.
     */
    public function selectStorefrontAccessTokenDelete(ShopifyRootMutationStorefrontAccessTokenDeleteArgumentsObject $argsObject): ShopifyStorefrontAccessTokenDeletePayloadQueryObject
    {
        $object = new ShopifyStorefrontAccessTokenDeletePayloadQueryObject("storefrontAccessTokenDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a billing attempt to charge for a [`SubscriptionContract`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionContract). The mutation processes either the payment for the current billing cycle or for a specific cycle, if selected.
     *
     * The mutation creates an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) when successful. Failed billing attempts include a [`processingError`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionBillingAttemptCreate#returns-subscriptionBillingAttempt.fields.processingError) field with error details.
     *
     * > Tip:
     * > Use the [`idempotencyKey`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionBillingAttemptCreate#arguments-subscriptionBillingAttemptInput.fields.idempotencyKey) to ensure the billing attempt executes only once, preventing duplicate charges if the request is retried.
     *
     * You can target a specific billing cycle using the [`billingCycleSelector`](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/SubscriptionBillingCycleSelector) to bill past or future cycles. The [`originTime`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionBillingAttempt#field-SubscriptionBillingAttempt.fields.originTime) parameter adjusts fulfillment scheduling for attempts completed after the expected billing date.
     *
     * Learn more about [creating billing attempts](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/build-a-subscription-contract#step-4-create-a-billing-attempt).
     */
    public function selectSubscriptionBillingAttemptCreate(ShopifyRootMutationSubscriptionBillingAttemptCreateArgumentsObject $argsObject): ShopifySubscriptionBillingAttemptCreatePayloadQueryObject
    {
        $object = new ShopifySubscriptionBillingAttemptCreatePayloadQueryObject("subscriptionBillingAttemptCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Asynchronously queries and charges all subscription billing cycles whose [billingAttemptExpectedDate](https://shopify.dev/api/admin-graphql/latest/objects/SubscriptionBillingCycle#field-billingattemptexpecteddate) values fall within a specified date range and meet additional filtering criteria. The results of this action can be retrieved using the [subscriptionBillingCycleBulkResults](https://shopify.dev/api/admin-graphql/latest/queries/subscriptionBillingCycleBulkResults) query.
     */
    public function selectSubscriptionBillingCycleBulkCharge(ShopifyRootMutationSubscriptionBillingCycleBulkChargeArgumentsObject $argsObject): ShopifySubscriptionBillingCycleBulkChargePayloadQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleBulkChargePayloadQueryObject("subscriptionBillingCycleBulkCharge");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Asynchronously queries all subscription billing cycles whose [billingAttemptExpectedDate](https://shopify.dev/api/admin-graphql/latest/objects/SubscriptionBillingCycle#field-billingattemptexpecteddate) values fall within a specified date range and meet additional filtering criteria. The results of this action can be retrieved using the [subscriptionBillingCycleBulkResults](https://shopify.dev/api/admin-graphql/latest/queries/subscriptionBillingCycleBulkResults) query.
     */
    public function selectSubscriptionBillingCycleBulkSearch(ShopifyRootMutationSubscriptionBillingCycleBulkSearchArgumentsObject $argsObject): ShopifySubscriptionBillingCycleBulkSearchPayloadQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleBulkSearchPayloadQueryObject("subscriptionBillingCycleBulkSearch");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a new subscription billing attempt for a specified billing cycle. This is the alternative mutation for [subscriptionBillingAttemptCreate](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionBillingAttemptCreate). For more information, refer to [Create a subscription contract](https://shopify.dev/docs/apps/selling-strategies/subscriptions/contracts/create#step-4-create-a-billing-attempt).
     */
    public function selectSubscriptionBillingCycleCharge(ShopifyRootMutationSubscriptionBillingCycleChargeArgumentsObject $argsObject): ShopifySubscriptionBillingCycleChargePayloadQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleChargePayloadQueryObject("subscriptionBillingCycleCharge");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Commits the updates of a Subscription Billing Cycle Contract draft.
     *
     * Commits are rate limited per subscription contract across all apps on the store. If you exceed the limit, then the mutation returns a top-level `THROTTLED` error and doesn't commit. Wait before you retry.
     */
    public function selectSubscriptionBillingCycleContractDraftCommit(ShopifyRootMutationSubscriptionBillingCycleContractDraftCommitArgumentsObject $argsObject): ShopifySubscriptionBillingCycleContractDraftCommitPayloadQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleContractDraftCommitPayloadQueryObject("subscriptionBillingCycleContractDraftCommit");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Concatenates a contract to a Subscription Draft.
     */
    public function selectSubscriptionBillingCycleContractDraftConcatenate(ShopifyRootMutationSubscriptionBillingCycleContractDraftConcatenateArgumentsObject $argsObject): ShopifySubscriptionBillingCycleContractDraftConcatenatePayloadQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleContractDraftConcatenatePayloadQueryObject("subscriptionBillingCycleContractDraftConcatenate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Edit the contents of a subscription contract for the specified billing cycle.
     */
    public function selectSubscriptionBillingCycleContractEdit(ShopifyRootMutationSubscriptionBillingCycleContractEditArgumentsObject $argsObject): ShopifySubscriptionBillingCycleContractEditPayloadQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleContractEditPayloadQueryObject("subscriptionBillingCycleContractEdit");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Starts an asynchronous calculation for changes to a single billing cycle of an existing subscription contract. Committing the calculation applies the changes only to the selected cycle, leaving the recurring contract unchanged.
     *
     * Poll the [`subscriptionContractCalculation`](https://shopify.dev/docs/api/admin-graphql/latest/queries/subscriptionContractCalculation) query to review the calculated contract, then commit it with the [`subscriptionContractCalculationCommit`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionContractCalculationCommit) mutation.
     *
     * Calls are rate limited per app and store. If you exceed the limit, then the mutation returns a top-level `THROTTLED` error and doesn't start a calculation. Wait a moment, then retry.
     *
     * Learn how to [update a subscription contract](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/update-a-subscription-contract).
     */
    public function selectSubscriptionBillingCycleContractEditCalculate(ShopifyRootMutationSubscriptionBillingCycleContractEditCalculateArgumentsObject $argsObject): ShopifySubscriptionBillingCycleContractEditCalculatePayloadQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleContractEditCalculatePayloadQueryObject("subscriptionBillingCycleContractEditCalculate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Delete the schedule and contract edits of the selected subscription billing cycle.
     */
    public function selectSubscriptionBillingCycleEditDelete(ShopifyRootMutationSubscriptionBillingCycleEditDeleteArgumentsObject $argsObject): ShopifySubscriptionBillingCycleEditDeletePayloadQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleEditDeletePayloadQueryObject("subscriptionBillingCycleEditDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Delete the current and future schedule and contract edits of a list of subscription billing cycles.
     */
    public function selectSubscriptionBillingCycleEditsDelete(ShopifyRootMutationSubscriptionBillingCycleEditsDeleteArgumentsObject $argsObject): ShopifySubscriptionBillingCycleEditsDeletePayloadQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleEditsDeletePayloadQueryObject("subscriptionBillingCycleEditsDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Modify the schedule of a specific billing cycle.
     */
    public function selectSubscriptionBillingCycleScheduleEdit(ShopifyRootMutationSubscriptionBillingCycleScheduleEditArgumentsObject $argsObject): ShopifySubscriptionBillingCycleScheduleEditPayloadQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleScheduleEditPayloadQueryObject("subscriptionBillingCycleScheduleEdit");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Skips a Subscription Billing Cycle.
     */
    public function selectSubscriptionBillingCycleSkip(ShopifyRootMutationSubscriptionBillingCycleSkipArgumentsObject $argsObject): ShopifySubscriptionBillingCycleSkipPayloadQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleSkipPayloadQueryObject("subscriptionBillingCycleSkip");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Unskips a Subscription Billing Cycle.
     */
    public function selectSubscriptionBillingCycleUnskip(ShopifyRootMutationSubscriptionBillingCycleUnskipArgumentsObject $argsObject): ShopifySubscriptionBillingCycleUnskipPayloadQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleUnskipPayloadQueryObject("subscriptionBillingCycleUnskip");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Activates a Subscription Contract. Contract status must be either active, paused, or failed.
     */
    public function selectSubscriptionContractActivate(ShopifyRootMutationSubscriptionContractActivateArgumentsObject $argsObject): ShopifySubscriptionContractActivatePayloadQueryObject
    {
        $object = new ShopifySubscriptionContractActivatePayloadQueryObject("subscriptionContractActivate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a Subscription Contract.
     */
    public function selectSubscriptionContractAtomicCreate(ShopifyRootMutationSubscriptionContractAtomicCreateArgumentsObject $argsObject): ShopifySubscriptionContractAtomicCreatePayloadQueryObject
    {
        $object = new ShopifySubscriptionContractAtomicCreatePayloadQueryObject("subscriptionContractAtomicCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Commits a succeeded subscription contract calculation. For a create or update calculation, committing makes the calculated contract the contract's new active version used for future billing. For a billing cycle edit, committing applies the calculated contract only to the selected cycle. A calculation that provides `fetchAvailableDeliveryOptions` only discovered delivery options and can't be committed. Create a new calculation with the chosen delivery method, then commit it.
     *
     * The calculation must be in a succeeded state, which you can confirm with the [`subscriptionContractCalculation`](https://shopify.dev/docs/api/admin-graphql/latest/queries/subscriptionContractCalculation) query. Returns the committed contract as a [`SubscriptionContract`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionContract), or a `SubscriptionBillingCycleEditedContract` for a billing cycle edit.
     *
     * Commits are rate limited per subscription contract across all apps on the store. If you exceed the limit, then the mutation returns a top-level `THROTTLED` error and doesn't commit. Wait before you retry.
     *
     * Learn how to [build a subscription contract](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/build-a-subscription-contract).
     */
    public function selectSubscriptionContractCalculationCommit(ShopifyRootMutationSubscriptionContractCalculationCommitArgumentsObject $argsObject): ShopifySubscriptionContractCalculationCommitPayloadQueryObject
    {
        $object = new ShopifySubscriptionContractCalculationCommitPayloadQueryObject("subscriptionContractCalculationCommit");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Cancels a Subscription Contract.
     */
    public function selectSubscriptionContractCancel(ShopifyRootMutationSubscriptionContractCancelArgumentsObject $argsObject): ShopifySubscriptionContractCancelPayloadQueryObject
    {
        $object = new ShopifySubscriptionContractCancelPayloadQueryObject("subscriptionContractCancel");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a subscription contract draft, which is an intention to create a new subscription. The draft lets you incrementally build and modify subscription details before committing them to create the actual [`SubscriptionContract`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionContract).
     *
     * The mutation requires [`Customer`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Customer) information, billing details, and contract configuration including the [`SubscriptionBillingPolicy`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionBillingPolicy) and [`SubscriptionDeliveryPolicy`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionDeliveryPolicy). You can specify the [`CustomerPaymentMethod`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerPaymentMethod), the [`MailingAddress`](https://shopify.dev/docs/api/admin-graphql/latest/objects/MailingAddress) for shipping, and subscription intervals.
     *
     * After you create the draft, you can either modify it with the [`subscriptionDraftUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionDraftUpdate) mutation or finalize and create the active subscription contract with [`subscriptionDraftCommit`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionDraftCommit).
     *
     * This mutation and the draft-based flow are deprecated in favor of the [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api).
     *
     * Learn more about [building subscription contracts](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/build-a-subscription-contract).
     *
     * @deprecated Use [`subscriptionContractCreateCalculate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionContractCreateCalculate) instead.
     */
    public function selectSubscriptionContractCreate(ShopifyRootMutationSubscriptionContractCreateArgumentsObject $argsObject): ShopifySubscriptionContractCreatePayloadQueryObject
    {
        $object = new ShopifySubscriptionContractCreatePayloadQueryObject("subscriptionContractCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Starts an asynchronous calculation for a new subscription contract. The contract isn't created until you commit the calculation.
     *
     * Poll the [`subscriptionContractCalculation`](https://shopify.dev/docs/api/admin-graphql/latest/queries/subscriptionContractCalculation) query to review the calculated contract, its projected order totals, and any warnings, then commit it with the [`subscriptionContractCalculationCommit`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionContractCalculationCommit) mutation.
     *
     * Calls are rate limited per app and store. If you exceed the limit, then the mutation returns a top-level `THROTTLED` error and doesn't start a calculation. Wait a moment, then retry.
     *
     * Learn how to [build a subscription contract](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/build-a-subscription-contract).
     */
    public function selectSubscriptionContractCreateCalculate(ShopifyRootMutationSubscriptionContractCreateCalculateArgumentsObject $argsObject): ShopifySubscriptionContractCreateCalculatePayloadQueryObject
    {
        $object = new ShopifySubscriptionContractCreateCalculatePayloadQueryObject("subscriptionContractCreateCalculate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Expires a Subscription Contract.
     */
    public function selectSubscriptionContractExpire(ShopifyRootMutationSubscriptionContractExpireArgumentsObject $argsObject): ShopifySubscriptionContractExpirePayloadQueryObject
    {
        $object = new ShopifySubscriptionContractExpirePayloadQueryObject("subscriptionContractExpire");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Fails a Subscription Contract.
     */
    public function selectSubscriptionContractFail(ShopifyRootMutationSubscriptionContractFailArgumentsObject $argsObject): ShopifySubscriptionContractFailPayloadQueryObject
    {
        $object = new ShopifySubscriptionContractFailPayloadQueryObject("subscriptionContractFail");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Pauses a Subscription Contract.
     */
    public function selectSubscriptionContractPause(ShopifyRootMutationSubscriptionContractPauseArgumentsObject $argsObject): ShopifySubscriptionContractPausePayloadQueryObject
    {
        $object = new ShopifySubscriptionContractPausePayloadQueryObject("subscriptionContractPause");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Allows for the easy change of a Product in a Contract or a Product price change.
     *
     * Changes are rate limited per subscription contract across all apps on the store. If you exceed the limit, then the mutation returns a top-level `THROTTLED` error and doesn't change the contract. Wait before you retry.
     */
    public function selectSubscriptionContractProductChange(ShopifyRootMutationSubscriptionContractProductChangeArgumentsObject $argsObject): ShopifySubscriptionContractProductChangePayloadQueryObject
    {
        $object = new ShopifySubscriptionContractProductChangePayloadQueryObject("subscriptionContractProductChange");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Sets the next billing date of a Subscription Contract. This field is managed by the apps.
     *         Alternatively you can utilize our
     *         [Billing Cycles APIs](https://shopify.dev/docs/apps/selling-strategies/subscriptions/billing-cycles),
     *         which provide auto-computed billing dates and additional functionalities.
     */
    public function selectSubscriptionContractSetNextBillingDate(ShopifyRootMutationSubscriptionContractSetNextBillingDateArgumentsObject $argsObject): ShopifySubscriptionContractSetNextBillingDatePayloadQueryObject
    {
        $object = new ShopifySubscriptionContractSetNextBillingDatePayloadQueryObject("subscriptionContractSetNextBillingDate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a draft of an existing [`SubscriptionContract`](https://shopify.dev/docs/api/admin-graphql/latest/objects/SubscriptionContract). The draft captures the current state of the contract and allows incremental modifications through draft mutations such as [`subscriptionDraftLineAdd`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionDraftLineAdd), [`subscriptionDraftDiscountAdd`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionDraftDiscountAdd), and [`subscriptionDraftUpdate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionDraftUpdate).
     *
     * Changes remain in draft state and don't affect the live contract until committed. After you've made all necessary changes to the draft, commit it using [`subscriptionDraftCommit`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionDraftCommit) to apply the updates to the original contract.
     *
     * This mutation and the draft-based edit flow are deprecated in favor of the [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api).
     *
     * Learn more about [updating subscription contracts](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/update-a-subscription-contract#step-2-create-a-draft-of-an-existing-contract).
     *
     * @deprecated Use [`subscriptionContractUpdateCalculate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionContractUpdateCalculate) instead.
     */
    public function selectSubscriptionContractUpdate(ShopifyRootMutationSubscriptionContractUpdateArgumentsObject $argsObject): ShopifySubscriptionContractUpdatePayloadQueryObject
    {
        $object = new ShopifySubscriptionContractUpdatePayloadQueryObject("subscriptionContractUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Starts an asynchronous calculation for changes to an existing subscription contract. The changes aren't applied to the contract until you commit the calculation, and fields omitted from the input remain unchanged.
     *
     * Poll the [`subscriptionContractCalculation`](https://shopify.dev/docs/api/admin-graphql/latest/queries/subscriptionContractCalculation) query to review the calculated contract, its projected order totals, and any warnings, then commit it with the [`subscriptionContractCalculationCommit`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/subscriptionContractCalculationCommit) mutation.
     *
     * Calls are rate limited per app and store. If you exceed the limit, then the mutation returns a top-level `THROTTLED` error and doesn't start a calculation. Wait a moment, then retry.
     *
     * Learn how to [update a subscription contract](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/update-a-subscription-contract).
     */
    public function selectSubscriptionContractUpdateCalculate(ShopifyRootMutationSubscriptionContractUpdateCalculateArgumentsObject $argsObject): ShopifySubscriptionContractUpdateCalculatePayloadQueryObject
    {
        $object = new ShopifySubscriptionContractUpdateCalculatePayloadQueryObject("subscriptionContractUpdateCalculate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Commits the updates of a Subscription Contract draft.
     *
     * Commits are rate limited per subscription contract across all apps on the store. If you exceed the limit, then the mutation returns a top-level `THROTTLED` error and doesn't commit. Wait before you retry.
     *
     * @deprecated Use the [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api) instead.
     */
    public function selectSubscriptionDraftCommit(ShopifyRootMutationSubscriptionDraftCommitArgumentsObject $argsObject): ShopifySubscriptionDraftCommitPayloadQueryObject
    {
        $object = new ShopifySubscriptionDraftCommitPayloadQueryObject("subscriptionDraftCommit");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds a subscription discount to a subscription draft.
     *
     * @deprecated Use the [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api) instead.
     */
    public function selectSubscriptionDraftDiscountAdd(ShopifyRootMutationSubscriptionDraftDiscountAddArgumentsObject $argsObject): ShopifySubscriptionDraftDiscountAddPayloadQueryObject
    {
        $object = new ShopifySubscriptionDraftDiscountAddPayloadQueryObject("subscriptionDraftDiscountAdd");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Applies a code discount on the subscription draft.
     *
     * @deprecated Use the [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api) instead.
     */
    public function selectSubscriptionDraftDiscountCodeApply(ShopifyRootMutationSubscriptionDraftDiscountCodeApplyArgumentsObject $argsObject): ShopifySubscriptionDraftDiscountCodeApplyPayloadQueryObject
    {
        $object = new ShopifySubscriptionDraftDiscountCodeApplyPayloadQueryObject("subscriptionDraftDiscountCodeApply");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes a subscription discount from a subscription draft.
     *
     * @deprecated Use the [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api) instead.
     */
    public function selectSubscriptionDraftDiscountRemove(ShopifyRootMutationSubscriptionDraftDiscountRemoveArgumentsObject $argsObject): ShopifySubscriptionDraftDiscountRemovePayloadQueryObject
    {
        $object = new ShopifySubscriptionDraftDiscountRemovePayloadQueryObject("subscriptionDraftDiscountRemove");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a subscription discount on a subscription draft.
     *
     * @deprecated Use the [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api) instead.
     */
    public function selectSubscriptionDraftDiscountUpdate(ShopifyRootMutationSubscriptionDraftDiscountUpdateArgumentsObject $argsObject): ShopifySubscriptionDraftDiscountUpdatePayloadQueryObject
    {
        $object = new ShopifySubscriptionDraftDiscountUpdatePayloadQueryObject("subscriptionDraftDiscountUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds a subscription free shipping discount to a subscription draft.
     *
     * @deprecated Use the [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api) instead.
     */
    public function selectSubscriptionDraftFreeShippingDiscountAdd(ShopifyRootMutationSubscriptionDraftFreeShippingDiscountAddArgumentsObject $argsObject): ShopifySubscriptionDraftFreeShippingDiscountAddPayloadQueryObject
    {
        $object = new ShopifySubscriptionDraftFreeShippingDiscountAddPayloadQueryObject("subscriptionDraftFreeShippingDiscountAdd");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a subscription free shipping discount on a subscription draft.
     *
     * @deprecated Use the [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api) instead.
     */
    public function selectSubscriptionDraftFreeShippingDiscountUpdate(ShopifyRootMutationSubscriptionDraftFreeShippingDiscountUpdateArgumentsObject $argsObject): ShopifySubscriptionDraftFreeShippingDiscountUpdatePayloadQueryObject
    {
        $object = new ShopifySubscriptionDraftFreeShippingDiscountUpdatePayloadQueryObject("subscriptionDraftFreeShippingDiscountUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds a subscription line to a subscription draft.
     *
     * @deprecated Use the [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api) instead.
     */
    public function selectSubscriptionDraftLineAdd(ShopifyRootMutationSubscriptionDraftLineAddArgumentsObject $argsObject): ShopifySubscriptionDraftLineAddPayloadQueryObject
    {
        $object = new ShopifySubscriptionDraftLineAddPayloadQueryObject("subscriptionDraftLineAdd");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes a subscription line from a subscription draft.
     *
     * @deprecated Use the [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api) instead.
     */
    public function selectSubscriptionDraftLineRemove(ShopifyRootMutationSubscriptionDraftLineRemoveArgumentsObject $argsObject): ShopifySubscriptionDraftLineRemovePayloadQueryObject
    {
        $object = new ShopifySubscriptionDraftLineRemovePayloadQueryObject("subscriptionDraftLineRemove");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a subscription line on a subscription draft.
     *
     * @deprecated Use the [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api) instead.
     */
    public function selectSubscriptionDraftLineUpdate(ShopifyRootMutationSubscriptionDraftLineUpdateArgumentsObject $argsObject): ShopifySubscriptionDraftLineUpdatePayloadQueryObject
    {
        $object = new ShopifySubscriptionDraftLineUpdatePayloadQueryObject("subscriptionDraftLineUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a Subscription Draft.
     *
     * @deprecated Use the [SubscriptionContractCalculation API](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/contracts/migrate-to-subscription-calculation-api) instead.
     */
    public function selectSubscriptionDraftUpdate(ShopifyRootMutationSubscriptionDraftUpdateArgumentsObject $argsObject): ShopifySubscriptionDraftUpdatePayloadQueryObject
    {
        $object = new ShopifySubscriptionDraftUpdatePayloadQueryObject("subscriptionDraftUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Adds tags to a resource. If the resource type doesn't support tagging, the `id` argument returns a resource-not-found error.
     *
     * Tags help merchants organize and filter resources. See the [`tags`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/tagsAdd#arguments-tags) argument for supported input formats.
     *
     * Learn more about [using tags to organize subscription orders](https://shopify.dev/docs/apps/build/purchase-options/subscriptions/fulfillments/sync-orders-subscriptions#order-tagging).
     */
    public function selectTagsAdd(ShopifyRootMutationTagsAddArgumentsObject $argsObject): ShopifyTagsAddPayloadQueryObject
    {
        $object = new ShopifyTagsAddPayloadQueryObject("tagsAdd");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Removes tags from a resource. If the resource type doesn't support tagging, the `id` argument returns a resource-not-found error.
     *
     * Tags are searchable keywords that help organize and filter these resources.
     */
    public function selectTagsRemove(ShopifyRootMutationTagsRemoveArgumentsObject $argsObject): ShopifyTagsRemovePayloadQueryObject
    {
        $object = new ShopifyTagsRemovePayloadQueryObject("tagsRemove");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Allows tax app configurations for tax partners.
     */
    public function selectTaxAppConfigure(ShopifyRootMutationTaxAppConfigureArgumentsObject $argsObject): ShopifyTaxAppConfigurePayloadQueryObject
    {
        $object = new ShopifyTaxAppConfigurePayloadQueryObject("taxAppConfigure");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a tax summary for a given order.
     * If both an order ID and a start and end time are provided, the order ID will be used.
     */
    public function selectTaxSummaryCreate(?ShopifyRootMutationTaxSummaryCreateArgumentsObject $argsObject = null): ShopifyTaxSummaryCreatePayloadQueryObject
    {
        $object = new ShopifyTaxSummaryCreatePayloadQueryObject("taxSummaryCreate");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a theme from an external URL or staged upload. The theme source can either be a ZIP file hosted at a public URL or files previously uploaded using the [`stagedUploadsCreate`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/stageduploadscreate) mutation. The theme displays in the [Themes page](https://admin.shopify.com/themes) in the Shopify admin.
     *
     * New themes have an [`UNPUBLISHED`](https://shopify.dev//docs/api/admin-graphql/latest/mutations/themeCreate#arguments-role.enums.UNPUBLISHED) role by default. You can optionally specify a [`DEVELOPMENT`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/themeCreate#arguments-role.enums.DEVELOPMENT) role for temporary themes used during development.
     */
    public function selectThemeCreate(ShopifyRootMutationThemeCreateArgumentsObject $argsObject): ShopifyThemeCreatePayloadQueryObject
    {
        $object = new ShopifyThemeCreatePayloadQueryObject("themeCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a theme.
     */
    public function selectThemeDelete(ShopifyRootMutationThemeDeleteArgumentsObject $argsObject): ShopifyThemeDeletePayloadQueryObject
    {
        $object = new ShopifyThemeDeletePayloadQueryObject("themeDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Duplicates a theme.
     */
    public function selectThemeDuplicate(ShopifyRootMutationThemeDuplicateArgumentsObject $argsObject): ShopifyThemeDuplicatePayloadQueryObject
    {
        $object = new ShopifyThemeDuplicatePayloadQueryObject("themeDuplicate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Copy theme files. Copying to existing theme files will overwrite them.
     */
    public function selectThemeFilesCopy(ShopifyRootMutationThemeFilesCopyArgumentsObject $argsObject): ShopifyThemeFilesCopyPayloadQueryObject
    {
        $object = new ShopifyThemeFilesCopyPayloadQueryObject("themeFilesCopy");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a theme's files.
     */
    public function selectThemeFilesDelete(ShopifyRootMutationThemeFilesDeleteArgumentsObject $argsObject): ShopifyThemeFilesDeletePayloadQueryObject
    {
        $object = new ShopifyThemeFilesDeletePayloadQueryObject("themeFilesDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates or updates theme files in an online store theme. This mutation allows batch operations on multiple theme files, either creating new files or overwriting existing ones with the same filename.
     *
     * > Note: You can process a maximum of 50 files in a single request.
     *
     * Each file requires a filename and body content. The body must specify a [`type`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/themeFilesUpsert#arguments-files.fields.body.type) with the corresponding [`value`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/themeFilesUpsert#arguments-files.fields.body.value). The mutation returns a [`job`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/themeFilesUpsert#returns-job) field for tracking asynchronous operations and an [`upsertedThemeFiles`](https://shopify.dev/docs/api/admin-graphql/latest/mutations/themeFilesUpsert#returns-upsertedThemeFiles) field with details about the processed files.
     */
    public function selectThemeFilesUpsert(ShopifyRootMutationThemeFilesUpsertArgumentsObject $argsObject): ShopifyThemeFilesUpsertPayloadQueryObject
    {
        $object = new ShopifyThemeFilesUpsertPayloadQueryObject("themeFilesUpsert");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Publishes a theme.
     */
    public function selectThemePublish(ShopifyRootMutationThemePublishArgumentsObject $argsObject): ShopifyThemePublishPayloadQueryObject
    {
        $object = new ShopifyThemePublishPayloadQueryObject("themePublish");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a theme.
     */
    public function selectThemeUpdate(ShopifyRootMutationThemeUpdateArgumentsObject $argsObject): ShopifyThemeUpdatePayloadQueryObject
    {
        $object = new ShopifyThemeUpdatePayloadQueryObject("themeUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Trigger the voiding of an uncaptured authorization transaction.
     */
    public function selectTransactionVoid(ShopifyRootMutationTransactionVoidArgumentsObject $argsObject): ShopifyTransactionVoidPayloadQueryObject
    {
        $object = new ShopifyTransactionVoidPayloadQueryObject("transactionVoid");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates or updates translations for a resource's [translatable content](https://shopify.dev/docs/api/admin-graphql/latest/objects/TranslatableContent).
     *
     * Each translation requires a digest value from the resource's translatable content. Use the [`translatableResource`](https://shopify.dev/docs/api/admin-graphql/latest/queries/translatableResource) query to get a resource's translatable content and digest values before creating translations. You can optionally scope translations to specific markets using the `marketId` field in each translation input.
     *
     * Learn more about [managing translations](https://shopify.dev/docs/apps/build/markets/manage-translated-content).
     */
    public function selectTranslationsRegister(ShopifyRootMutationTranslationsRegisterArgumentsObject $argsObject): ShopifyTranslationsRegisterPayloadQueryObject
    {
        $object = new ShopifyTranslationsRegisterPayloadQueryObject("translationsRegister");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes translations.
     */
    public function selectTranslationsRemove(ShopifyRootMutationTranslationsRemoveArgumentsObject $argsObject): ShopifyTranslationsRemovePayloadQueryObject
    {
        $object = new ShopifyTranslationsRemovePayloadQueryObject("translationsRemove");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Asynchronously delete [URL redirects](https://shopify.dev/api/admin-graphql/latest/objects/UrlRedirect) in bulk.
     */
    public function selectUrlRedirectBulkDeleteAll(?ShopifyRootMutationUrlRedirectBulkDeleteAllArgumentsObject $argsObject = null): ShopifyUrlRedirectBulkDeleteAllPayloadQueryObject
    {
        $object = new ShopifyUrlRedirectBulkDeleteAllPayloadQueryObject("urlRedirectBulkDeleteAll");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Asynchronously delete [URLRedirect](https://shopify.dev/api/admin-graphql/latest/objects/UrlRedirect)
     * objects in bulk by IDs.
     * Learn more about [URLRedirect](https://help.shopify.com/en/manual/online-store/menus-and-links/url-redirect)
     * objects.
     */
    public function selectUrlRedirectBulkDeleteByIds(ShopifyRootMutationUrlRedirectBulkDeleteByIdsArgumentsObject $argsObject): ShopifyUrlRedirectBulkDeleteByIdsPayloadQueryObject
    {
        $object = new ShopifyUrlRedirectBulkDeleteByIdsPayloadQueryObject("urlRedirectBulkDeleteByIds");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Asynchronously delete redirects in bulk.
     */
    public function selectUrlRedirectBulkDeleteBySavedSearch(ShopifyRootMutationUrlRedirectBulkDeleteBySavedSearchArgumentsObject $argsObject): ShopifyUrlRedirectBulkDeleteBySavedSearchPayloadQueryObject
    {
        $object = new ShopifyUrlRedirectBulkDeleteBySavedSearchPayloadQueryObject("urlRedirectBulkDeleteBySavedSearch");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Asynchronously delete redirects in bulk.
     */
    public function selectUrlRedirectBulkDeleteBySearch(ShopifyRootMutationUrlRedirectBulkDeleteBySearchArgumentsObject $argsObject): ShopifyUrlRedirectBulkDeleteBySearchPayloadQueryObject
    {
        $object = new ShopifyUrlRedirectBulkDeleteBySearchPayloadQueryObject("urlRedirectBulkDeleteBySearch");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a [`UrlRedirect`](https://shopify.dev/api/admin-graphql/latest/objects/UrlRedirect) object.
     */
    public function selectUrlRedirectCreate(ShopifyRootMutationUrlRedirectCreateArgumentsObject $argsObject): ShopifyUrlRedirectCreatePayloadQueryObject
    {
        $object = new ShopifyUrlRedirectCreatePayloadQueryObject("urlRedirectCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a [`UrlRedirect`](https://shopify.dev/api/admin-graphql/latest/objects/UrlRedirect) object.
     */
    public function selectUrlRedirectDelete(ShopifyRootMutationUrlRedirectDeleteArgumentsObject $argsObject): ShopifyUrlRedirectDeletePayloadQueryObject
    {
        $object = new ShopifyUrlRedirectDeletePayloadQueryObject("urlRedirectDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a [`UrlRedirectImport`](https://shopify.dev/api/admin-graphql/latest/objects/UrlRedirectImport) object.
     *
     * After creating the `UrlRedirectImport` object, the `UrlRedirectImport` request can be performed using the [`urlRedirectImportSubmit`](https://shopify.dev/api/admin-graphql/latest/mutations/urlRedirectImportSubmit) mutation.
     */
    public function selectUrlRedirectImportCreate(ShopifyRootMutationUrlRedirectImportCreateArgumentsObject $argsObject): ShopifyUrlRedirectImportCreatePayloadQueryObject
    {
        $object = new ShopifyUrlRedirectImportCreatePayloadQueryObject("urlRedirectImportCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Submits a `UrlRedirectImport` request to be processed.
     *
     * The `UrlRedirectImport` request is first created with the [`urlRedirectImportCreate`](https://shopify.dev/api/admin-graphql/latest/mutations/urlRedirectImportCreate) mutation.
     */
    public function selectUrlRedirectImportSubmit(ShopifyRootMutationUrlRedirectImportSubmitArgumentsObject $argsObject): ShopifyUrlRedirectImportSubmitPayloadQueryObject
    {
        $object = new ShopifyUrlRedirectImportSubmitPayloadQueryObject("urlRedirectImportSubmit");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a URL redirect.
     */
    public function selectUrlRedirectUpdate(ShopifyRootMutationUrlRedirectUpdateArgumentsObject $argsObject): ShopifyUrlRedirectUpdatePayloadQueryObject
    {
        $object = new ShopifyUrlRedirectUpdatePayloadQueryObject("urlRedirectUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a cart and checkout validation: a server-side rule enforced before a customer can complete checkout. Each validation is powered by a cart and checkout validation function that you provide using `functionId` or `functionHandle`.
     *
     * Use `validationCreate` to apply custom rules at checkout, such as limiting item quantities, enforcing order minimums or maximums, or blocking checkout for restricted shipping addresses. Validations run on Shopify's servers and are enforced throughout checkout, so they can't be bypassed by the client.
     *
     * Validation errors always block checkout progress. The `blockOnFailure` field controls whether runtime exceptions, such as timeouts, also block checkout.
     */
    public function selectValidationCreate(ShopifyRootMutationValidationCreateArgumentsObject $argsObject): ShopifyValidationCreatePayloadQueryObject
    {
        $object = new ShopifyValidationCreatePayloadQueryObject("validationCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a cart and checkout validation, removing its rule from the shop's checkout. Once deleted, its cart and checkout validation function no longer runs during checkout.
     */
    public function selectValidationDelete(ShopifyRootMutationValidationDeleteArgumentsObject $argsObject): ShopifyValidationDeletePayloadQueryObject
    {
        $object = new ShopifyValidationDeletePayloadQueryObject("validationDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a cart and checkout validation. Use `validationUpdate` to rename it, toggle whether it's enabled at checkout, change its `blockOnFailure` behavior, or update its metafields.
     *
     * Validation errors always block checkout progress. The `blockOnFailure` field controls whether runtime exceptions, such as timeouts, also block checkout.
     */
    public function selectValidationUpdate(ShopifyRootMutationValidationUpdateArgumentsObject $argsObject): ShopifyValidationUpdatePayloadQueryObject
    {
        $object = new ShopifyValidationUpdatePayloadQueryObject("validationUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Activate a [web pixel extension](https://shopify.dev/docs/apps/build/marketing-analytics/build-web-pixels)
     * by creating a web pixel record on the store where you installed your app.
     *
     * When you run the `webPixelCreate` mutation, Shopify validates it
     * against the settings definition in `shopify.extension.toml`. If the `settings` input field doesn't match
     * the schema that you defined, then the mutation fails. Learn how to
     * define [web pixel settings](https://shopify.dev/docs/apps/build/marketing-analytics/build-web-pixels#step-2-define-your-web-pixel-settings).
     */
    public function selectWebPixelCreate(ShopifyRootMutationWebPixelCreateArgumentsObject $argsObject): ShopifyWebPixelCreatePayloadQueryObject
    {
        $object = new ShopifyWebPixelCreatePayloadQueryObject("webPixelCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes the web pixel shop settings.
     */
    public function selectWebPixelDelete(ShopifyRootMutationWebPixelDeleteArgumentsObject $argsObject): ShopifyWebPixelDeletePayloadQueryObject
    {
        $object = new ShopifyWebPixelDeletePayloadQueryObject("webPixelDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Activate a [web pixel extension](https://shopify.dev/docs/apps/build/marketing-analytics/build-web-pixels)
     * by updating a web pixel record on the store where you installed your app.
     *
     * When you run the `webPixelUpdate` mutation, Shopify validates it
     * against the settings definition in `shopify.extension.toml`. If the `settings` input field doesn't match
     * the schema that you defined, then the mutation fails. Learn how to
     * define [web pixel settings](https://shopify.dev/docs/apps/build/marketing-analytics/build-web-pixels#step-2-define-your-web-pixel-settings).
     */
    public function selectWebPixelUpdate(ShopifyRootMutationWebPixelUpdateArgumentsObject $argsObject): ShopifyWebPixelUpdatePayloadQueryObject
    {
        $object = new ShopifyWebPixelUpdatePayloadQueryObject("webPixelUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a web presence.
     */
    public function selectWebPresenceCreate(ShopifyRootMutationWebPresenceCreateArgumentsObject $argsObject): ShopifyWebPresenceCreatePayloadQueryObject
    {
        $object = new ShopifyWebPresenceCreatePayloadQueryObject("webPresenceCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a web presence.
     */
    public function selectWebPresenceDelete(ShopifyRootMutationWebPresenceDeleteArgumentsObject $argsObject): ShopifyWebPresenceDeletePayloadQueryObject
    {
        $object = new ShopifyWebPresenceDeletePayloadQueryObject("webPresenceDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a web presence.
     */
    public function selectWebPresenceUpdate(ShopifyRootMutationWebPresenceUpdateArgumentsObject $argsObject): ShopifyWebPresenceUpdatePayloadQueryObject
    {
        $object = new ShopifyWebPresenceUpdatePayloadQueryObject("webPresenceUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Creates a webhook subscription that notifies your [`App`](https://shopify.dev/docs/api/admin-graphql/latest/objects/App) when specific events occur in a shop. Webhooks push event data to your endpoint immediately when changes happen, eliminating the need for polling.
     *
     * The subscription configuration supports multiple endpoint types including HTTPS URLs, Google Pub/Sub topics, and AWS EventBridge event sources. You can filter events using [Shopify API search syntax](https://shopify.dev/docs/api/usage/search-syntax) to receive only relevant webhooks, control which data fields are included in webhook payloads, and specify metafield namespaces to include.
     *
     * > Note:
     * > The Webhooks API version [configured in your app](https://shopify.dev/docs/apps/build/webhooks/subscribe/use-newer-api-version) determines the API version for webhook events. You can't specify it per subscription.
     *
     *
     * Building an app? If you only use app-specific webhooks, you won't need this. App-specific webhook subscriptions specified in your `shopify.app.toml` may be easier. They are automatically kept up to date by Shopify & require less maintenance. Please read [About managing webhook subscriptions](https://shopify.dev/docs/apps/build/webhooks/subscribe).
     */
    public function selectWebhookSubscriptionCreate(ShopifyRootMutationWebhookSubscriptionCreateArgumentsObject $argsObject): ShopifyWebhookSubscriptionCreatePayloadQueryObject
    {
        $object = new ShopifyWebhookSubscriptionCreatePayloadQueryObject("webhookSubscriptionCreate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Deletes a [`WebhookSubscription`](https://shopify.dev/docs/api/admin-graphql/latest/objects/WebhookSubscription) and stops all future webhooks to its endpoint. Returns the deleted subscription's ID for confirmation.
     *
     *
     * Building an app? If you only use app-specific webhooks, you won't need this. App-specific webhook subscriptions specified in your `shopify.app.toml` may be easier. They are automatically kept up to date by Shopify & require less maintenance. Please read [About managing webhook subscriptions](https://shopify.dev/docs/apps/build/webhooks/subscribe).
     */
    public function selectWebhookSubscriptionDelete(ShopifyRootMutationWebhookSubscriptionDeleteArgumentsObject $argsObject): ShopifyWebhookSubscriptionDeletePayloadQueryObject
    {
        $object = new ShopifyWebhookSubscriptionDeletePayloadQueryObject("webhookSubscriptionDelete");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * Updates a webhook subscription's configuration. Modify the endpoint URL, event filters, included fields, or metafield namespaces without recreating the subscription.
     *
     * The mutation accepts a [`WebhookSubscriptionInput`](https://shopify.dev/docs/api/admin-graphql/latest/input-objects/WebhookSubscriptionInput) that specifies the new configuration. You can switch between endpoint types (HTTP, Pub/Sub, EventBridge) by providing a different URI format. Updates apply atomically without interrupting webhook delivery.
     *
     *
     * Building an app? If you only use app-specific webhooks, you won't need this. App-specific webhook subscriptions specified in your `shopify.app.toml` may be easier. They are automatically kept up to date by Shopify & require less maintenance. Please read [About managing webhook subscriptions](https://shopify.dev/docs/apps/build/webhooks/subscribe).
     */
    public function selectWebhookSubscriptionUpdate(ShopifyRootMutationWebhookSubscriptionUpdateArgumentsObject $argsObject): ShopifyWebhookSubscriptionUpdatePayloadQueryObject
    {
        $object = new ShopifyWebhookSubscriptionUpdatePayloadQueryObject("webhookSubscriptionUpdate");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }
}

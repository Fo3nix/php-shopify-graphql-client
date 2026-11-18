<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `channelFullSync` mutation.
 */
class ShopifyChannelFullSyncPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ChannelFullSyncPayload";

    /**
     * Trace information for each country-language product feed that was triggered. Returns one entry per feed.
     */
    public function selectFullSyncTraceInfo(?ShopifyChannelFullSyncPayloadFullSyncTraceInfoArgumentsObject $argsObject = null): ShopifyFullSyncTraceInfoQueryObject
    {
        $object = new ShopifyFullSyncTraceInfoQueryObject("fullSyncTraceInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyChannelFullSyncPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyChannelFullSyncUserErrorQueryObject
    {
        $object = new ShopifyChannelFullSyncUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}

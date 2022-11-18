<?php

/*
 * ------------------------------- Article Store ------------------------------
 */

/**
 * @OA\RequestBody(
 *     request="ArticleStoreRequestBody",
 *     description="Pet object that needs to be added to the store",
 *     required=true,
 *     @OA\JsonContent(
 *       examples = {
 *          "example_1" : @OA\Schema( ref="#/components/examples/Article1", example="Article1")
 *      }
 *    )
 * )
 */

/**
 * @OA\RequestBody(
 *     request="ArticleUpdateRequestBody",
 *     description="Pet object that needs to be added to the store",
 *     required=true,
 *     @OA\JsonContent(
 *       examples = {
 *          "example_1" : @OA\Schema( ref="#/components/examples/Article1", example="Article1")
 *      }
 *    )
 * )
 */

/**
 *      @OA\Examples(
 *        summary="Article1",
 *        example = "Article1",
 *       value = {
 *              "user_id": 1,
 *              "title": "title of article",
 *              "description": "this is a description for article",
 *              "body": "this is a body for article",
 *              "image_url": "https://via.placeholder.com/640x480.png/00ff99?text=sunt",
 *              "tags": "{'php', 'laravel'}"
 *         },
 *      )
 */

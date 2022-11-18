<?php

/*
 * ------------------------------- Episode Store ------------------------------
 */

/**
 * @OA\RequestBody(
 *     request="EpisodeStoreRequestBody",
 *     description="Pet object that needs to be added to the store",
 *     required=true,
 *     @OA\JsonContent(
 *       examples = {
 *          "example_1" : @OA\Schema( ref="#/components/examples/Episode1", example="Episode1")
 *      }
 *    )
 * )
 */

/**
 * @OA\RequestBody(
 *     request="EpisodeUpdateRequestBody",
 *     description="Pet object that needs to be added to the store",
 *     required=true,
 *     @OA\JsonContent(
 *       examples = {
 *          "example_1" : @OA\Schema( ref="#/components/examples/Episode1", example="Episode1")
 *      }
 *    )
 * )
 */

/**
 *      @OA\Examples(
 *        summary="Episode1",
 *        example = "Episode1",
 *       value = {
 *              "course_id": 1,
 *              "title": "title of episode",
 *              "type": "type",
 *              "price": 2000000,
 *              "time": "01:10:00",
 *              "description": "this is a description for episode",
 *              "body": "this is a body for episode",
 *              "image_url": "https://via.placeholder.com/640x480.png/00ff99?text=sunt",
 *              "number": 0,
 *              "tags": "{'php', 'laravel'}"
 *         },
 *      )
 */

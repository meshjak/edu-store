<?php

/*
 * ------------------------------- Course Store ------------------------------
 */

/**
 * @OA\RequestBody(
 *     request="CourseStoreRequestBody",
 *     description="Pet object that needs to be added to the store",
 *     required=true,
 *     @OA\JsonContent(
 *       examples = {
 *          "example_1" : @OA\Schema( ref="#/components/examples/Course1", example="Course1")
 *      }
 *    )
 * )
 */

/**
 * @OA\RequestBody(
 *     request="CourseUpdateRequestBody",
 *     description="Pet object that needs to be added to the store",
 *     required=true,
 *     @OA\JsonContent(
 *       examples = {
 *          "example_1" : @OA\Schema( ref="#/components/examples/Course1", example="Course1")
 *      }
 *    )
 * )
 */

/**
 *      @OA\Examples(
 *        summary="Course1",
 *        example = "Course1",
 *       value = {
 *              "user_id": 1,
 *              "title": "title of course",
 *              "type": "type",
 *              "price": 2000000,
 *              "time": "01:10:00",
 *              "description": "this is a description for course",
 *              "body": "this is a body for course",
 *              "image_url": "https://via.placeholder.com/640x480.png/00ff99?text=sunt",
 *              "tags": "{'php', 'laravel'}"
 *         },
 *      )
 */

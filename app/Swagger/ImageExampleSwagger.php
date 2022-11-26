<?php

/*
 * ------------------------------- Image Store ------------------------------
 */

/**
 * @OA\RequestBody(
 *     request="ImageStoreRequestBody",
 *     description="Pet object that needs to be added to the store",
 *     required=true,
 *      @OA\MediaType(
 *      mediaType="multipart/form-data",
 *      @OA\Schema(
 *          @OA\Property(
 *              description="file to upload",
 *              property="file",
 *              type="file",
 *         ),
 *          required={"file"}
 *      )
 *     ),
 *     @OA\JsonContent(
 *       examples = {
 *          "example_1" : @OA\Schema( ref="#/components/examples/Image1", example="Image1")
 *      }
 *    )
 * )
 */

/**
 * @OA\RequestBody(
 *     request="ImageUpdateRequestBody",
 *     description="Pet object that needs to be added to the store",
 *     required=true,
 *     @OA\JsonContent(
 *       examples = {
 *          "example_1" : @OA\Schema( ref="#/components/examples/Image1", example="Image1")
 *      }
 *    )
 * )
 */

/**
 *      @OA\Examples(
 *        summary="Image1",
 *        example = "Image1",
 *       value = {
 *           "parent_id":null,
 *           "saved_by":1,
 *           "path":"/images/",
 *           "filename":"image_1",
 *           "format":"png",
 *           "size":1024,
 *           "resolution":480,
 *         },
 *      )
 */

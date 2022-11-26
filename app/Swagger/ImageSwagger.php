<?php

/**
 * @OA\Get(
 *     operationId="IndexImages",
 *     tags={"Image"},
 *     security={{"bearerAuth":{}}},
 *     path="/admin/images",
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

/**
 * @OA\Get(
 *     operationId="ShowImages",
 *     tags={"Image"},
 *     security={{"bearerAuth":{}}},
 *     path="/admin/images/{id}",
 *     @OA\Parameter(name="id",description="ID of Image",required=true,in="path",example="1"),
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

/**
 * @OA\Post(
 *     operationId="StoreImage",
 *     tags={"Image"},
 *     security={{"bearerAuth":{}}},
 *     requestBody={"$ref": "#/components/requestBodies/ImageStoreRequestBody"},
 *     path="/admin/images",
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

/**
 * @OA\Patch(
 *     operationId="UpdateImage",
 *     tags={"Image"},
 *     security={{"bearerAuth":{}}},
 *     requestBody={"$ref": "#/components/requestBodies/ImageUpdateRequestBody"},
 *     path="/admin/images/{id}",
 *     @OA\Parameter(name="id",description="ID of Image",required=true,in="path",example="1"),
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

/**
 * @OA\Delete(
 *     operationId="DeleteImage",
 *     tags={"Image"},
 *     security={{"bearerAuth":{}}},
 *     path="/admin/images/{id}",
 *     @OA\Parameter(name="id",description="ID of Image",required=true,in="path",example="1"),
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

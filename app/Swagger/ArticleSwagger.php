<?php

/**
 * @OA\Get(
 *     operationId="IndexArticles",
 *     tags={"Article"},
 *     security={{"bearerAuth":{}}},
 *     path="/admin/articles",
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

/**
 * @OA\Get(
 *     operationId="ShowArticles",
 *     tags={"Article"},
 *     security={{"bearerAuth":{}}},
 *     path="/admin/articles/{id}",
 *     @OA\Parameter(name="id",description="ID of Article",required=true,in="path",example="1"),
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

/**
 * @OA\Post(
 *     operationId="StoreArticle",
 *     tags={"Article"},
 *     security={{"bearerAuth":{}}},
 *     requestBody={"$ref": "#/components/requestBodies/ArticleStoreRequestBody"},
 *     path="/admin/articles",
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

/**
 * @OA\Patch(
 *     operationId="UpdateArticle",
 *     tags={"Article"},
 *     security={{"bearerAuth":{}}},
 *     requestBody={"$ref": "#/components/requestBodies/ArticleUpdateRequestBody"},
 *     path="/admin/articles/{id}",
 *     @OA\Parameter(name="id",description="ID of Article",required=true,in="path",example="1"),
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

/**
 * @OA\Delete(
 *     operationId="DeleteArticle",
 *     tags={"Article"},
 *     security={{"bearerAuth":{}}},
 *     path="/admin/articles/{id}",
 *     @OA\Parameter(name="id",description="ID of Article",required=true,in="path",example="1"),
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

<?php

/**
 * @OA\Get(
 *     operationId="IndexEpisodes",
 *     tags={"Episode"},
 *     security={{"bearerAuth":{}}},
 *     path="/admin/episodes",
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

/**
 * @OA\Get(
 *     operationId="ShowEpisodes",
 *     tags={"Episode"},
 *     security={{"bearerAuth":{}}},
 *     path="/admin/episodes/{id}",
 *     @OA\Parameter(name="id",description="ID of Episode",required=true,in="path",example="1"),
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

/**
 * @OA\Post(
 *     operationId="StoreEpisode",
 *     tags={"Episode"},
 *     security={{"bearerAuth":{}}},
 *     requestBody={"$ref": "#/components/requestBodies/EpisodeStoreRequestBody"},
 *     path="/admin/episodes",
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

/**
 * @OA\Patch(
 *     operationId="UpdateEpisode",
 *     tags={"Episode"},
 *     security={{"bearerAuth":{}}},
 *     requestBody={"$ref": "#/components/requestBodies/EpisodeUpdateRequestBody"},
 *     path="/admin/episodes/{id}",
 *     @OA\Parameter(name="id",description="ID of Episode",required=true,in="path",example="1"),
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

/**
 * @OA\Delete(
 *     operationId="DeleteEpisode",
 *     tags={"Episode"},
 *     security={{"bearerAuth":{}}},
 *     path="/admin/episodes/{id}",
 *     @OA\Parameter(name="id",description="ID of Episode",required=true,in="path",example="1"),
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

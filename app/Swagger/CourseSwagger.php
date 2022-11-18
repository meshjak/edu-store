<?php

/**
 * @OA\Get(
 *     operationId="IndexCourses",
 *     tags={"Course"},
 *     security={{"bearerAuth":{}}},
 *     path="/admin/courses",
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

/**
 * @OA\Get(
 *     operationId="ShowCourses",
 *     tags={"Course"},
 *     security={{"bearerAuth":{}}},
 *     path="/admin/courses/{id}",
 *     @OA\Parameter(name="id",description="ID of Course",required=true,in="path",example="1"),
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

/**
 * @OA\Post(
 *     operationId="StoreCourse",
 *     tags={"Course"},
 *     security={{"bearerAuth":{}}},
 *     requestBody={"$ref": "#/components/requestBodies/CourseStoreRequestBody"},
 *     path="/admin/courses",
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

/**
 * @OA\Patch(
 *     operationId="UpdateCourse",
 *     tags={"Course"},
 *     security={{"bearerAuth":{}}},
 *     requestBody={"$ref": "#/components/requestBodies/CourseUpdateRequestBody"},
 *     path="/admin/courses/{id}",
 *     @OA\Parameter(name="id",description="ID of Course",required=true,in="path",example="1"),
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

/**
 * @OA\Delete(
 *     operationId="DeleteCourse",
 *     tags={"Course"},
 *     security={{"bearerAuth":{}}},
 *     path="/admin/courses/{id}",
 *     @OA\Parameter(name="id",description="ID of Course",required=true,in="path",example="1"),
 *     @OA\Response(response=200,ref="#/components/responses/200"),
 *     @OA\Response(response=401,ref="#/components/responses/401"),
 *     @OA\Response(response=422,ref="#/components/responses/422")
 * )
 */

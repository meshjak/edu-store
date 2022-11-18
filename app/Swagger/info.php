<?php
/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="L5 OpenApi",
 *      description="L5 Swagger OpenApi description"
 * )
 */

/**
 *  @OA\Server(
 *      url="/api/",
 *      description=""
 *  )
 */

/**
 * @OA\SecurityScheme(
 *      securityScheme="bearerAuth",
 *      in="header",
 *      name="bearerAuth",
 *      type="http",
 *      scheme="bearer",
 *      bearerFormat="JWT",
 * )
 */

/**
 * @OA\Response(
 *   response="200",
 *   description="OK",
 *   @OA\JsonContent({ @OA\Schema(ref="#/components/schemas/SuccessResult")}))
 */

/**
 * @OA\Response(
 *   response="422",
 *   description="The given data is invalid",
 *     @OA\JsonContent(oneOf={ @OA\Schema(ref="#/components/schemas/ErrorResult")}))
 */

/**
 * @OA\Response(
 *   response="401",
 *   description="Unauthenticate",
 *     @OA\JsonContent(oneOf={ @OA\Schema(ref="#/components/schemas/ErrorResult")}))
 */

/**
 * @OA\Response(
 *   response="403",
 *   description="Unauthorize",
 *     @OA\JsonContent(oneOf={ @OA\Schema(ref="#/components/schemas/ErrorResult")}))
 */

/**
 * @OA\Schema(
 *  schema="ErrorResult",
 *  title="Error Result",
 * 	@OA\Property(
 *        property="message",
 *        type="string"
 *    ),
 * 	@OA\Property(
 *        property="errors",
 *        type="array",@OA\Items(type="string"),
 *    )
 * )
 */

/**
 * @OA\Schema(
 *  schema="SuccessResult",
 *  title="Success Result"
 * )
 */

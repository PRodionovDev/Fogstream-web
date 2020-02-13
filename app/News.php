<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(
 *  definition="News",
 *  @SWG\Property(
 *      property="id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="title",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="description",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="text",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="img",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="created_at",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="updated_at",
 *      type="string"
 *  )
 * )
 */
class News extends Model
{
    //
}

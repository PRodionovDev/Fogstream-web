<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(
 *  definition="Profile",
 *  @SWG\Property(
 *      property="id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="user_id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="surname",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="name",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="middlename",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="birthday",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="photo",
 *      type="string"
 *  )
 * )
 */
class Profile extends Model
{
    /**
     * Disable timestamps
     *
     * @var bool
     */
    public $timestamps = false;
}

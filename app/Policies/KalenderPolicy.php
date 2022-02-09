<?php

namespace App\Policies;

use App\Models\Kalender;
use Illuminate\Auth\Access\HandlesAuthorization;
use ;

class KalenderPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \  $
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny( $)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \  $
     * @param  \App\Models\Kalender  $kalender
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view( $, Kalender $kalender)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \  $
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create( $)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \  $
     * @param  \App\Models\Kalender  $kalender
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update( $, Kalender $kalender)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \  $
     * @param  \App\Models\Kalender  $kalender
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete( $, Kalender $kalender)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \  $
     * @param  \App\Models\Kalender  $kalender
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore( $, Kalender $kalender)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \  $
     * @param  \App\Models\Kalender  $kalender
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete( $, Kalender $kalender)
    {
        //
    }
}

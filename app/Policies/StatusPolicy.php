<?php

namespace App\Policies;

use App\Models\Status;
use Illuminate\Auth\Access\HandlesAuthorization;
use ;

class StatusPolicy
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
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view( $, Status $status)
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
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update( $, Status $status)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \  $
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete( $, Status $status)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \  $
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore( $, Status $status)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \  $
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete( $, Status $status)
    {
        //
    }
}

<?php

namespace App\Policies;

use App\Models\Proses;
use Illuminate\Auth\Access\HandlesAuthorization;
use ;

class ProsesPolicy
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
     * @param  \App\Models\Proses  $proses
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view( $, Proses $proses)
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
     * @param  \App\Models\Proses  $proses
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update( $, Proses $proses)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \  $
     * @param  \App\Models\Proses  $proses
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete( $, Proses $proses)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \  $
     * @param  \App\Models\Proses  $proses
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore( $, Proses $proses)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \  $
     * @param  \App\Models\Proses  $proses
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete( $, Proses $proses)
    {
        //
    }
}

<?php

namespace App\Policies;

use App\Models\Tugas;
use Illuminate\Auth\Access\HandlesAuthorization;
use ;

class TugasPolicy
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
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view( $, Tugas $tugas)
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
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update( $, Tugas $tugas)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \  $
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete( $, Tugas $tugas)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \  $
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore( $, Tugas $tugas)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \  $
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete( $, Tugas $tugas)
    {
        //
    }
}

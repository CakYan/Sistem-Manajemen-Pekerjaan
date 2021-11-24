<?php

namespace App\Policies;

use App\Models\hakAkses;
use Illuminate\Auth\Access\HandlesAuthorization;
use ;

class HakAksesPolicy
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
     * @param  \App\Models\hakAkses  $hakAkses
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view( $, hakAkses $hakAkses)
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
     * @param  \App\Models\hakAkses  $hakAkses
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update( $, hakAkses $hakAkses)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \  $
     * @param  \App\Models\hakAkses  $hakAkses
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete( $, hakAkses $hakAkses)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \  $
     * @param  \App\Models\hakAkses  $hakAkses
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore( $, hakAkses $hakAkses)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \  $
     * @param  \App\Models\hakAkses  $hakAkses
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete( $, hakAkses $hakAkses)
    {
        //
    }
}

<?php

namespace App\Policies;

use App\Models\Jabatan;
use Illuminate\Auth\Access\HandlesAuthorization;
use ;

class JabatanPolicy
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
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view( $, Jabatan $jabatan)
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
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update( $, Jabatan $jabatan)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \  $
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete( $, Jabatan $jabatan)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \  $
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore( $, Jabatan $jabatan)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \  $
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete( $, Jabatan $jabatan)
    {
        //
    }
}

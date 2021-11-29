<?php

namespace App\Policies;

use App\Models\Kelas;
use Illuminate\Auth\Access\HandlesAuthorization;
use ;

class KelasPolicy
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
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view( $, Kelas $kelas)
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
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update( $, Kelas $kelas)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \  $
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete( $, Kelas $kelas)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \  $
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore( $, Kelas $kelas)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \  $
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete( $, Kelas $kelas)
    {
        //
    }
}

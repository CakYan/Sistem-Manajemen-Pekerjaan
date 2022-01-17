<?php

namespace App\Policies;

use App\Models\Pdf;
use Illuminate\Auth\Access\HandlesAuthorization;
use ;

class PdfPolicy
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
     * @param  \App\Models\Pdf  $pdf
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view( $, Pdf $pdf)
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
     * @param  \App\Models\Pdf  $pdf
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update( $, Pdf $pdf)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \  $
     * @param  \App\Models\Pdf  $pdf
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete( $, Pdf $pdf)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \  $
     * @param  \App\Models\Pdf  $pdf
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore( $, Pdf $pdf)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \  $
     * @param  \App\Models\Pdf  $pdf
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete( $, Pdf $pdf)
    {
        //
    }
}

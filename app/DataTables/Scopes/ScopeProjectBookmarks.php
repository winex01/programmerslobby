<?php

namespace App\DataTables\Scopes;

use Yajra\DataTables\Contracts\DataTableScope;

class ScopeProjectBookmarks implements DataTableScope
{
    /**
     * Apply a query scope.
     *
     * @param \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $query
     * @return mixed
     */
    public function apply($query)
    {
        return $query->whereHas('favorites', function ($query) {
            $query->where('user_id', auth()->user()->id);
            $query->where('favoriteable_type', 'App\Project');
        });
    }
}

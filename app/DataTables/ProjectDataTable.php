<?php

namespace App\DataTables;

use App\Project;
use Yajra\DataTables\Services\DataTable;

class ProjectDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->editColumn('status', function ($query) {
                $status = strtoupper($query->status);
                $badge = '';

                switch ($status) {
                    case 'PUBLISHED':
                        $badge = 'badge-primary';
                        break;

                    case 'PENDING':
                        $badge = 'badge-warning';
                        break;

                    case 'REJECT':
                        $badge = 'badge-danger';
                        break;
                    
                    default:
                        $badge = 'badge-success'; // draft
                        break;
                }

                $status = ($status == 'REJECT') ? 'REJECTED' : $status;

                return '<span class="badge '.$badge.'">'.$status.'</span>';
            })
            ->editColumn('created_at', function ($query) {
                return $query->created_at->toDateString();
            })
            ->addColumn('slug', function ($query) {
                $status = strtoupper($query->status);
                $action = '<a href="'.route('submit.code.edit', $query->id).'">Edit</a>';

                if ($status == 'PUBLISHED') {

                    $action .= ' <a href="'.route('project', $query->slug).'">View</a>';

                }else if ($status == 'REJECT') {

                    $action = '';

                }


                return $action;
            })
            ->rawColumns(['status', 'created_at', 'slug']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Project $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Project $model)
    {
        return $model->newQuery()->select('id', 'title', 'status', 'created_at', 'slug');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->parameters([
                        'responsive' => true,
                        'autoWidth' => false
                    ])
                    ->minifiedAjax();
                    // ->addAction(['width' => '80px']);
                    // ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            'title',
            'status',
            'created_at',
            'slug' => [
                'title' => 'Action'
            ]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Project_' . date('YmdHis');
    }
}

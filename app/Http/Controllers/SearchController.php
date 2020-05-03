<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function project(Request $request)
    {
    	$q = $request->q;

		if ($q != '') {
			$projects = Project::where('title', 'LIKE', "%$q%")
				->orWhereHas('tags', function (Builder $query) use ($q) {
					$query->where('description', 'LIKE', "%$q%");
				})
				->published()
				->orderBy('title', 'ASC')
				->paginate(6);
			
			// append to URL query string
			$projects->appends ([
				'q' => $q
			]);

			if ( count($projects) > 0 ) {
				return view(viewIndex('projects'), compact('projects', 'q'));
			}
			return view(viewIndex('projects'), compact('q'));
		}

		return redirect(route('home'));	
    }

    //TODO search blog
}

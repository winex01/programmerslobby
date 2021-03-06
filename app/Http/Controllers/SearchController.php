<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function project(Request $request)
    {
    	// TODO: clean this up and transfer to sevice class
    	$q = $request->q;

		if ($q != '') {
			$projects = Project::where( function($query) use ($q) {
					// search title
					$query->where('title', 'LIKE', "%$q%");

					// search keywords
					$query->orWhere('meta_keywords', 'LIKE', "%$q%");

					// search tags
					$query->orWhereHas('tags', function ($query) use ($q) {
						$query->where('description', 'LIKE', "%$q%");
					});

					//search author
					$query->orWhereHas('author', function ($query) use ($q) {
						$query->where('name', 'LIKE', "%$q%");
					});
					
					// search by coded by
					$query->orWhere('coded_by', 'LIKE', "%$q%");
				})
				->published()
				->orderBy('title', 'ASC')
				->paginate(paginationEntries());
			
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

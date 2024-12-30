<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function show($number)
    {
        // Validate the chapter number
        if ($number < 1 || $number > 30) {
            return abort(404); // Return a 404 error for invalid chapters
        }

        // Construct the view name dynamically
        $viewName = 'chapters.kabanata' . $number;

        // Return the view
        return view($viewName);
    }


}

<?php

return [

    // By default, this middleware will simply redirect back with an error. You can customise this error message text below.
    'errorMessage' => 'An error occurred processing your request. You may be uploading a file which is too large.',

    // If you wish to change the default behavior of redirecting back with an error, you can do so by changing the closure below.
    'closure' => function(\Illuminate\Http\Request $request, \Closure $next) {
        return redirect()->back()->withInput()->withErrors(['no_post_data' => config('nopostdata.errorMessage')]);
    }

];
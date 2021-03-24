<?php




// Get the current URL without the query string.
echo url()->current();

// Get the current URL including the query string.
echo url()->full();

// Get the full URL for the previous request.
echo url()->previous();

echo asset('');

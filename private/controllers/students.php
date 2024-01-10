<?php
class Students extends Controller
{
    public function index($id = 'not available')
    {
        echo "This is the students controller and the id is " .$id . ".";
    }
}
?>
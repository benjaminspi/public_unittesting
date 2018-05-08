<?php

class RaBen {

    /**
     * Menu item will allow us to load the page to display the table
     */
    
    public function get_columns(){

        $ra_columns = array(
            'id'          => 'ID',
            'title'       => 'Title',
            'description' => 'Description',
            'year'        => 'Year',
            'director'    => 'Director',
            'rating'      => 'Rating'
        );

        return $ra_columns;
    }

}

?>
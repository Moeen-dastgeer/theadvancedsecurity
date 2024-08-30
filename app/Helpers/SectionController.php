<?php

    namespace App\Helpers;
    use DB;
    
    class SectionController{
        
        public static function sectionContent($id, $column){
            $data = DB::table('sections')->where('id', $id)->first();
            if($column == 'description'){
                
                return $data->description;   
                
            }else if($column == 'image'){
                return $data->image;
                
            }else if($column == 'title'){
                return $data->title;
            }else{
                return '';
            }
            
        }
        
    }
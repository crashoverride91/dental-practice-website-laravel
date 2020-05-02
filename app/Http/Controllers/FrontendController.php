<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homepage() {


        
        return view('homepage');
    }
    

     
    public function team(){

        $team= [
            ["name"=>"Sharon", "surname"=>"Stone","role"=>"Manager",  "img"=>" https://www.xing.com/image/b_b_4_96214b6ea_26867716_1/stella-diana-m%C3%BCller-foto.256x256.jpg"],
            
            ["name"=>"Grace", "surname"=>"Kelly", "role"=>"Assistant dentist", "img"=>" https://www.dentalcaresolutions.it/wp/wp-content/uploads/2015/09/Antonella_conte.jpg"],
        
            ["name"=>"Norman", "surname"=>"Osborne","role"=>"Dentist", "img"=>" https://images.squarespace-cdn.com/content/v1/5b2a2df41137a6414c3883b3/1531819799252-DC8LLIHAX4JP3HNY06Q7/ke17ZwdGBToddI8pDm48kNiEM88mrzHRsd1mQ3bxVct7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0s0XaMNjCqAzRibjnE_wBlkZ2axuMlPfqFLWy-3Tjp4nKScCHg1XF4aLsQJlo6oYbA/derek+1.jpg"],
        
            ["name"=>"Tracy", "surname"=>"Cole","role"=>"Assistan manager", "img"=>" https://www.xing.com/image/b_b_4_96214b6ea_26867716_1/stella-diana-m%C3%BCller-foto.256x256.jpg"]
        
        
        ];


        return view('team', ['team'=>$team]);
    }




    public function services(){


        return view('services');
    }


    public function technology(){

        $technology= [
            ["name"=>"Orthopantomograph", "description"=>"Lorem Picsum",  "img"=>" https://www.francescafrustagli.it/wp-content/uploads/2017/06/ortopantomografo.jpg"],
            
            ["name"=>"Dental Laser", "description"=>"Lorem Picsum", "img"=>" https://esthetichairturkey.com/media/article/1528141295560-dental-laser.jpg.1002x0_q90.jpg"],
        
            ["name"=>"Intraoral camera", "description"=>"Lorem Picsum", "img"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRjXP1Z_UyfRlcKxzmlrb0l0UhGJFJk__zZl9qNrz3RbisjBkWT&usqp=CAU"],
        
            ["name"=>"Implant 3D", "description"=>"Lorem Picsum", "img"=>"https://dta0yqvfnusiq.cloudfront.net/salvatoredental/2016/07/12-160722-579234bd18b1a.jpg"],
        
        
            ["name"=>"Ict Injection", "description"=>"Lorem Picsum",  "img"=>"https://implantium.it/wp-content/uploads/2018/11/siringa_elettronica_main.jpg"],
            
            ["name"=>"Diodi Laser", "description"=>"Lorem Picsum", "img"=>" https://esthetichairturkey.com/media/article/1528141295560-dental-laser.jpg.1002x0_q90.jpg"],
        
            ["name"=>"Tac one beam", "description"=>"Lorem Picsum", "img"=>"https://www.centrochirurgicosrl.it/wp-content/uploads/2015/10/radiologia-odontoiatrica.jpg"],
        
            ["name"=>"Amalgam Separator", "description"=>"Lorem Picsum", "img"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRQMkpIqTd6AaKDpMXq87Y5ypQpl--Iu6dmAaafykakPF4qU4mQ&usqp=CAU"]






        ];



        return view('technology',['technology'=>$technology]);
    }





    public function contacts(){


        return view('contacts');
    }

    public function navbar(){


        return view('navbar');
    }

}

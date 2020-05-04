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
            ["name"=>"Sharon", "surname"=>"Stone","role"=>"Manager", "description"=>"Sharon completed specialist training and was added to the GDC specialist list for endodontics in 2005.",  "img"=>" https://www.xing.com/image/b_b_4_96214b6ea_26867716_1/stella-diana-m%C3%BCller-foto.256x256.jpg"],
            
            ["name"=>"Grace", "surname"=>"Kelly", "role"=>"Assistant dentist","description"=>"Grace completed specialist training and was added to the GDC specialist list for endodontics in 2015.", "img"=>" https://www.dentalcaresolutions.it/wp/wp-content/uploads/2015/09/Antonella_conte.jpg"],
        
            ["name"=>"Norman", "surname"=>"Osborne","role"=>"Dentist","description"=>"Norman completed specialist training and was added to the GDC specialist list for endodontics in 2007.", "img"=>" https://images.squarespace-cdn.com/content/v1/5b2a2df41137a6414c3883b3/1531819799252-DC8LLIHAX4JP3HNY06Q7/ke17ZwdGBToddI8pDm48kNiEM88mrzHRsd1mQ3bxVct7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0s0XaMNjCqAzRibjnE_wBlkZ2axuMlPfqFLWy-3Tjp4nKScCHg1XF4aLsQJlo6oYbA/derek+1.jpg"],
        
            ["name"=>"Tracy", "surname"=>"Cole","role"=>"Assistant manager","description"=>"Tracy completed specialist training and was added to the GDC specialist list for endodontics in 2017.", "img"=>" https://www.xing.com/image/b_b_4_96214b6ea_26867716_1/stella-diana-m%C3%BCller-foto.256x256.jpg"]
        
        
        ];


        return view('team', ['team'=>$team]);
    }




    public function services(){


        return view('services');
    }


    public function technology(){

        $technology= [
            ["name"=>"Orthopantomograph", "description"=>"An OPG is a special type of X-Ray image that offers a panoramic/wide view x-ray of the lower face, displaying all the teeth of the upper and lower jaw on a single film.",  "img"=>" https://www.francescafrustagli.it/wp-content/uploads/2017/06/ortopantomografo.jpg"],
            
            ["name"=>"Dental Laser", "description"=>"Dental lasers are innovative medical devices designed for cutting edge laser applications. Let us guide you to discover the benefits of laser dentistry, surgery and cosmetics.", "img"=>" https://esthetichairturkey.com/media/article/1528141295560-dental-laser.jpg.1002x0_q90.jpg"],
        
            ["name"=>"Intraoral camera", "description"=>"LFor early detection and accurate representation of dental conditions, an intraoral camera is essential to delivering optimum quality of care.", "img"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRjXP1Z_UyfRlcKxzmlrb0l0UhGJFJk__zZl9qNrz3RbisjBkWT&usqp=CAU"],
        
            ["name"=>"Implant 3D", "description"=>"Implant 3D is a software that allows you to perform three-dimensional implant simulation directly on your personal computer.", "img"=>"https://necdentallab.com/uploads/article/image/31/IMG-dental-implant-GettyImages-931130140.jpg"],
        
        
            ["name"=>"Ict Injection", "description"=>"Ict injection is one of the devices used in the study of Dr. Tenti in the province of Varese for dental care: dental problems can be of various kinds, both functional and aesthetic.",  "img"=>"https://www.studiotenti.com/images/articoli/ict-injection.jpg"],
            
            ["name"=>"Diodi Laser", "description"=>"
            The diode laser is an incredibly valuable resource on the dental treatment front, including those of a certain complexity such as implant surgery, but also in endodontics, biostimulation.", "img"=>" https://esthetichairturkey.com/media/article/1528141295560-dental-laser.jpg.1002x0_q90.jpg"],
        
            ["name"=>"Tac one beam", "description"=>"It is a modern diagnostic method that allows you to reproduce sections and  to generate a three-dimensional image of the skull (or some of its areas) by means of radiation acquired by a digital sensor and processed by a computer.", "img"=>"https://www.centrochirurgicosrl.it/wp-content/uploads/2015/10/radiologia-odontoiatrica.jpg"],
        
            ["name"=>"Amalgam Separator", "description"=>"In addition, dental offices that have installed amalgam separators must maintain maintenance reports. This includes how many separator filters were exchanged per year and where those filters were sent for recycling.", "img"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRQMkpIqTd6AaKDpMXq87Y5ypQpl--Iu6dmAaafykakPF4qU4mQ&usqp=CAU"]






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

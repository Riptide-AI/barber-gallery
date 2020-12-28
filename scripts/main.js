
jQuery(document).ready(function () {
   jQuery("#gallery").unitegallery({
      gallery_theme: "slider",
      gallery_skin:"default",
      gallery_width: 1280,									
      gallery_height: 720,							

      gallery_min_width: 1280,						
      gallery_min_height: 720,											

      gallery_autoplay: true,					
      gallery_play_interval: 3000,				
      gallery_pause_on_mouseover: true,			

      slider_transition: "slide",					//fade, slide - the transition of the slide change
      slider_transition_speed: 1400,				//transition duration of slide change
      slider_transition_easing: "easeInOutQuad",	//transition easing function of slide change

      slider_control_zoom: false,					//true, false - enable zooming control
      slider_loader_type: 3,						//shape of the loader (1-7)
      slider_loader_color: "black",				//color of the loader: (black , white)

      slider_enable_bullets: true,				//enable the bullets onslider element
      slider_bullets_skin: "",					//skin of the bullets, if empty inherit from gallery skin
      slider_bullets_space_between: -1,			//set the space between bullets. If -1 then will be set default space from the skins
      slider_bullets_align_hor: "center",			//left, center, right - bullets horizontal align
      slider_bullets_align_vert: "bottom",			//top, middle, bottom - bullets vertical algin
      slider_bullets_offset_hor: 0,				//bullets horizontal offset 
      slider_bullets_offset_vert: 10,				//bullets vertical offset

      slider_enable_arrows: true,					//enable arrows onslider element
      slider_arrows_skin: "",						//skin of the slider arrows, if empty inherit from gallery skin

      slider_arrow_left_align_hor: "left",	  		//left, center, right - left arrow horizonal align
      slider_arrow_left_align_vert: "middle", 		//top, middle, bottom - left arrow vertical align
      slider_arrow_left_offset_hor: 20,		  	//left arrow horizontal offset
      slider_arrow_left_offset_vert: 0,		  	//left arrow vertical offset

      slider_arrow_right_align_hor: "right",   	//left, center, right - right arrow horizontal algin
      slider_arrow_right_align_vert: "middle", 	//top, middle, bottom - right arrow vertical align
      slider_arrow_right_offset_hor: 20,	   		//right arrow horizontal offset 
      slider_arrow_right_offset_vert: 0,	   		//right arrow vertical offset

      slider_enable_progress_indicator: false,


      slider_enable_play_button: false,			 //true,false - enable play / pause button onslider element

      slider_enable_fullscreen_button: false,		 //true,false - enable fullscreen button onslider element
   
      slider_enable_zoom_panel: false,				 //true,false - enable the zoom buttons, works together with zoom control.
      
      slider_controls_always_on: true,		     //true,false - controls are always on, false - show only on mouseover

      slider_enable_text_panel: false,			 //true,false - enable the text panel
      slider_textpanel_always_on: false,			 //true,false - text panel are always on, false - show only on mouseover



   });
}); 
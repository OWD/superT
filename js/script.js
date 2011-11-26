
document.selectores={};

var instrumentalizeMenuItems=(function()
{
    var $oe_menu		= $('#oe_menu');
    var $oe_menu_items	= $oe_menu.children('li');
    var $oe_overlay		= $('#oe_overlay');

    $oe_menu_items.bind('mouseenter',function(){
        var $this = $(this);
        $this.addClass('slided selected');
        $this.children('div').css('z-index','9999').stop(true,true).slideDown(200,function(){
        $oe_menu_items.not('.slided').children('div').hide();
        $this.removeClass('slided');
    });
    }).bind('mouseleave',function(){
        var $this = $(this);
        $this.removeClass('selected').children('div').css('z-index','1');
    });
    $oe_menu.bind('mouseenter',function(){
        var $this = $(this);
        $oe_overlay.stop(true,true).fadeTo(200, 0.6);
        $this.addClass('hovered');
        }).bind('mouseleave',function(){
            var $this = $(this);
            $this.removeClass('hovered');
            $oe_overlay.stop(true,true).fadeTo(200, 0);
            $oe_menu_items.children('div').hide();
    });
});
    
    
 // de aqui para abajo son funciones del menu one   

var  menuoneInitial1=(function()
{
    ///**
    //bind the mouseenter, mouseleave to each item:
    //- shows / hides image and submenu
    //bind the click event to the list elements (submenu):
    //- hides all items except the clicked one, 
    //and shows the content for that item
    //*/
    $items.unbind('mouseenter')
      .bind('mouseenter',m_enter)
      .unbind('mouseleave')
      .bind('mouseleave',m_leave)
      .find('.cc_submenu > ul > li')
      .bind('click',function(){
    var $li_e = $(this);
     //if the menu is already folded,
     //just replace the content
    if(folded){
	hideContent();
	showContent($li_e.attr('class'));
    }	
    else //fold and show the content
     {
	fold($li_e);
     }
      });
});
	
//back to menu button - unfolds the menu
var menuoneInitial2=(function(){
    $('#cc_back').bind('click',unfold);
});
    ///**
    //hides all the menu items except the clicked one
    //after that, the content is shown
    //*/
    
    
    ///**
    //mouseenter function for the items
    //the timeout is used to prevent this event 
    //to trigger if the user moves the mouse with 
    //a considerable speed through the menu items
    //*/
var m_enter=(function()
    {
        var $this 	= $(this);
        clearTimeout(menu_time);
        menu_time = setTimeout(function(){
        	//img
                $this.find('img').stop().animate({'top':'0px'},400);
                //cc_submenu ul
                $this.find('.cc_submenu > ul').stop().animate({'height':'200px'},400);
            },200);
    });
				
//mouseleave function for the items
var m_leave=(function()
    {
    	var $this = $(this);
	clearTimeout(menu_time);
	//img
	$this.find('img').stop().animate({'top':'-600px'},400);
	//cc_submenu ul
	$this.find('.cc_submenu > ul').stop().animate({'height':'0px'},400);
    });

	
  
var fold=(function($li_e)
{
	var $item		= $li_e.closest('.cc_item');		
	var d = 100;
	var step = 0;
	$items.unbind('mouseenter mouseleave');
	$items.not($item).each(function(){
            var $item = $(this);
            $item.stop().animate({
		'marginLeft':'-140px'
            },d += 200,function(){
                ++step;
                if(step == cnt_items-1){
                    folded = true;
                    showContent($li_e.attr('class'));
                }	
            });
        });
});
				
    ///**
    //shows all the menu items 
    //also hides any item's image / submenu 
    //that might be displayed
    //*/
var unfold=(function()
{
	$('#cc_content').stop().animate({'left':'-700px'},600,function(){
	 var d = 100;
	 var step = 0;
         $items.each(function(){
		var $item = $(this);			
		$item.find('img')
                 .stop()
		 .animate({'top':'-600px'},200)
		 .andSelf()
		 .find('.cc_submenu > ul')
		 .stop()
		 .animate({'height':'0px'},200);		 
                 $item.stop().animate({
			'marginLeft':'0px'
		},d += 200,function(){
			++step;
			if(step == cnt_items-1){
			folded = false;
			$items.unbind('mouseenter')
                         .bind('mouseenter',m_enter)
			 .unbind('mouseleave')
			 .bind('mouseleave',m_leave);
			hideContent();
		}		  
	    });
	});
    });
});

    //function to show the content
var showContent=(function(idx)
{
    $('#cc_content').stop().animate({'left':'140px'},200,function(){
		$(this).find('.'+idx).fadeIn();
    });
});
				
    //function to hide the content
var hideContent=(function()
{
	$('#cc_content').find('div').hide();
});
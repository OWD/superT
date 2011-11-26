
var replaceFonts=(function()
{
        document.selectores={
            "ul.oe_menu div a" : "Aller",
            "#miIde" : "AcornInitials"  
            };
        
        
        
        $.each(document.selectores,(function(selector,fuente){
                Cufon.replace(selector,fuente);
        }));
        
});
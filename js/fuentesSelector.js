
var replaceFonts=(function()
{
        document.selectores["index"]={
            "ul.oe_menu div a" : "Aller",
            "#miIde" : "AcornInitials"
            };
        document.selectores["galeria"]={
            "ul.oe_menu div a" : "Aller",
            "#miIde" : "AcornInitials"
            };
        document.selectores["menu"]={
            "span li h1 p" : "LiberationSans",
            ".cc_content_1" : "AcornInitials"
        };
            
            
            
        
        
        $.each(document.selectores["index"],(function(selector,fuente){
                
                Cufon.replace(selector,fuente);
        }));
        
        $.each(document.selectores["menu"],(function(selector,fuente){
                
                Cufon.replace(selector,fuente);
        }));
        
});


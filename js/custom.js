(function($){
    
    $(document).ready(function(){
    
        $(".pagination").customPaginate({
        
            itemsToPaginate : ".post",
			
			activeClass : "current"
        
        });
    
    });
    
})(jQuery)
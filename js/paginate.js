(function($){

       $.fn.customPaginate = function(options)
       {
           var paginationContainer = this;
           var itemsToPaginate;
           
            
           var defaults = {      
                itemsPerPage : 16           
           };
        
           var settings = {};
        
           $.extend(settings, defaults, options);
           
           var itemsPerPage = settings.itemsPerPage;
        
           itemsToPaginate = $(settings.itemsToPaginate);
           var numberOfPaginationLinks = Math.ceil((itemsToPaginate.length / itemsPerPage));
        
           $("<ul class='pagination alt_page_navigation' role='navigation' aria-label='Pagination' style='margin-top:10px; text-align:center;'></ul>").prependTo(paginationContainer);
           
           for(var index = 0; index < numberOfPaginationLinks; index++)
           {
                paginationContainer.find("ul").append("<li style='margin:0px 5px;'> "+(index+1)+" </li>");
           }
           
           itemsToPaginate.filter(":gt(" + (itemsPerPage - 1)  + ")").hide();
           
           paginationContainer.find("ul li").first().addClass(settings.activeClass).end().on('click', function(){
			   
			   var $this = $(this);
			   
			   $this.addClass(settings.activeClass);
			   
			   $this.siblings().removeClass(settings.activeClass);
           
               var linkNumber = $this.text();
               
                var itemsToHide = itemsToPaginate.filter(":lt(" + ((linkNumber-1) * itemsPerPage)  + ")");
                $.merge(itemsToHide, itemsToPaginate.filter(":gt(" + ((linkNumber * itemsPerPage) - 1)  + ")"));
                
                var itemsToShow = itemsToPaginate.not(itemsToHide);

                $("html,body").animate({scrollTop:"0px"}, function(){
                  itemsToHide.hide();
                  itemsToShow.show();
                });
           });
           
       }
            
}(jQuery));
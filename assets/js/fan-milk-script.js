
 $().ready(function(event){
        
        event.preventDefault();

        $('.bienvenue').show();
        $('.compte-client').hide();

        $(".enregitrer-un-client").click(function(){
           $('.compte-client').show();
           $('.bienvenue').hide();
        });



















        
  });


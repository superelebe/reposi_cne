$( function() {

  } );

$(document).ready(function() {

    $('#slides').jqFancyTransitions({ width:300, height:180, delay:3000, titleOpacity:0, position:'top', direction:'fountain' });

	$("#start").datepicker({ dateFormat: 'yy-mm-dd', minDate: new Date });
        $("#end").datepicker({ dateFormat: 'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate()+1);
            $("#to").datepicker( "option", "minDate", minValue );
        });


        $('#rotador-index').jshowoff({ speed:7000, links: true,
                    cssClass: 'thumbFeatures',
                    //effect: 'slideLeft'
        });
        
    $(".tweet").tweet({ // aca es donde se le indica donde poner los tweets, le pondremos un div vacio con clase .tweets
            username:"CNEC_GTO", // el usuario
            avatar_size: 32, // Ponle 0 si no quieres avatares
            page: 1,
            count: 6, // Numero de tweets
            loading_text: "Cargando..."
        }).bind("loaded", function() {
          var ul = $(this).find(".tweet_list");
          var ticker = function() {
            setTimeout(function() {
              ul.find('li:first').animate( {marginTop: '-4em'}, 500,function() {
                $(this).detach().appendTo(ul).removeAttr('style');
              });
              ticker();
            }, 5000);
          };
          ticker();
        });
    
      
     if ($.browser.msie){
        if ($.browser.version>=7){  
        
        $("span[rel]").overlay({
                
                mask: {
                color:'#455560',
                loadSpeed: 200,
                opacity: 0.9
                },
     
              closeOnClick: true
        });
    }; 
                 
    } else {
     //alert('Non IE8');
   // positions for each overlay
    var cargarfondos= function()
    {
        var cromatica = [
            ['#B5BFC7'],
            ['#808C97' ],
            ['#455560' ],
            ['#769D2E' ]
        ];
        
        // setup triggers
        $("span[rel]").each(function(i) {
     
            $(this).overlay
            ({
                
                mask:
                {
                color:cromatica[i],
                loadSpeed: 200,
                opacity: 0.9
                },
     
              closeOnClick: true
     
            });
 
        });
    }();
    
    }
    /*
    */
    
    var cargafooter = function(){
        $('#footconten').hide().load('footer.html', function(){
            $(this).fadeIn(300);});
        }();
    
        var cargaheader = function(){
        $('#headconten').hide().load('header.html', function(){
            $(this).fadeIn(300);});
        }();

});	
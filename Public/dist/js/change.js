//for changing font size
  /*$("#slider").slider(
{
            value:30,
            min: 0,
            max: 100,
            step: 1,
            slide: function( event, ui ) {
                $( "#slider-value" ).html( ui.value );
                var fs = $( "#slider-value" ).html();
                $("td > span").css("font-size",fs+"px");
	        }
            
}
);*/



// for changing color
function hexFromRGB(r, g, b) {
    var hex = [
      r.toString( 16 ),
      g.toString( 16 ),
      b.toString( 16 )
    ];
    $.each( hex, function( nr, val ) {
      if ( val.length === 1 ) {
        hex[ nr ] = "0" + val;
      }
    });
    return hex.join( "" ).toUpperCase();
  }
  function refreshSwatch() {
    var red = $( "#red" ).slider( "value" ),
      green = $( "#green" ).slider( "value" ),
      blue = $( "#blue" ).slider( "value" ),
      hex = hexFromRGB( red, green, blue );
    $( "#swatch" ).css( "background-color", "#" + hex );
    $( "td > span" ).css( "color", "#" + hex );
  }
  $(function() {
    $( "#red, #green, #blue" ).slider({
      orientation: "horizontal",
      range: "min",
      max: 255,
      value: 127,
      slide: refreshSwatch,
      change: refreshSwatch
    });
    $( "#red" ).slider( "value", 255 );
    $( "#green" ).slider( "value", 140 );
    $( "#blue" ).slider( "value", 60 );

    //for accessing final style
    $( "#confirm" ).click(function() {
        var color = $( "#swatch" ).css('background-color');
        $("#mws-sidebar-bg").css('background',color);
        $("#mws-header").css('background',color);
        setCookie('themecolor',color,365);
    });
  });

function CreateShadow() {
var ox = document.getElementById('offsetx').value;
var oy = document.getElementById('offsety').value;
var bd = document.getElementById('blur').value;
var cl = document.getElementById('color').value;
$("td > span").css("text-shadow",ox+"px "+oy+"px "+bd+"px "+cl);
}


function setCookie(c_name,value,expiredays)
{
  var exdate=new Date()
  exdate.setDate(exdate.getDate()+expiredays)
  document.cookie=c_name+ "=" +escape(value)+
  ((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
}


function getCookie(c_name)
{
  if (document.cookie.length>0)
    {
    c_start=document.cookie.indexOf(c_name + "=")
    if (c_start!=-1)
      { 
      c_start=c_start + c_name.length+1 
      c_end=document.cookie.indexOf(";",c_start)
      if (c_end==-1) c_end=document.cookie.length
      return unescape(document.cookie.substring(c_start,c_end))
      } 
    }
  return "";
}



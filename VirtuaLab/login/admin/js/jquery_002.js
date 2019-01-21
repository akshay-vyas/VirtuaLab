/*
ClockPick, by Josh Nathanson
Timepicker plugin for jQuery
See copyright at end of file

name	 clockpick
type	 jQuery
param	 options                  hash                    object containing config options
param	 options[starthour]       int                     starting hour (use military int)
param	 options[endhour]         int                     ending hour (use military int)
param	 options[showminutes]     bool                    show minutes
param 	 options[minutedivisions] int                     number of divisions, i.e. 4 = :00, :15, :30, :45
param 	 options[military]        bool                    use 24hr time if true
param	 options[event]           string                  mouse event to trigger plugin
param	 options[layout]          string                  set div layout to vertical or horizontal
                                  ('vertical','horizontal')
param	 options[valuefield]      string                  field to insert time value, if not same as click field
                                  (name of input field)
param	 callback                 function                callback function
*/

jQuery.fn.clockpick = function(options, callback) {

	var settings = {
		starthour       : 8,
		endhour         : 18,
		showminutes     : true,
		minutedivisions : 4,
		military        : false,
		event           : 'click',
		layout		: 'vertical',
		valuefield	: null
		};
		
	if(options) {
		jQuery.extend(settings, options);
	};
	
	var callback = callback || function() { };
	
	errorcheck();
	
	jQuery(this)[settings.event](function(e) {
										  
		var self = this;
		
		// clear any malingerers
		jQuery("#CP_hourcont").remove();
		jQuery("#CP_minutecont").remove();
		
		// append hour cont div 1 to body
		// add class "CP" for mouseout recognition, although there is only
		// one hourcont on the screen at a time
		$hourcont = jQuery("<div id='CP_hourcont' class='CP' />");
		jQuery("body").append($hourcont);
		binder($hourcont);
		
		// append hourcol div 2 to body - only used in vertical mode
		if (settings.layout == 'vertical') {
			
			$hourcol1 = jQuery("<div class='CP_hourcol' />");
			jQuery("body").append($hourcol1);
			
			$hourcol2 = jQuery("<div class='CP_hourcol' />");
			jQuery("body").append($hourcol2);
		}
		
		// if showminutes, append minutes cont to body
		if (settings.showminutes) {
			$mc = jQuery("<div id='CP_minutecont' class='CP' />");
			jQuery("body").append($mc);
			binder($mc);
		}
		
		if (settings.layout == 'horizontal') {
			$hourcont.css("width","auto");
			$mc.css("width","auto");
		}
		
		// all the action right here
		// fill in the hours container (minutes rendered in hour mouseover)
		// then make hour container visible
		renderhours();
		putcontainer();
		
		/*----------------------helper functions below-------------------------*/
		
		
		function renderhours() {
			// fill in the $hourcont div
			for (h=settings.starthour; h<=settings.endhour; h++) {
				
				displayhours = ((!settings.military && h > 12) ? h - 12 : h) + set_tt(h);
				// rectify zero hour
				if (!settings.military && h == 0) {
					displayhours = '12' + set_tt(h);
				}
				
				
				$hd = jQuery("<div class='CP_hour' id='hr_" + h + "'>" + displayhours + "</div>");
				// shrink width a bit if military
				if (settings.military) { $hd.width(20); }
				binder($hd);
				
				if (settings.layout == 'horizontal') {
					$hd.css("float","left");
					if (h == 12) { $hourcont.append("<div style='clear:left' />"); }
					$hourcont.append($hd);
				}
				else {
					if (h<12) { $hourcol1.append($hd); }
					else { $hourcol2.append($hd); }
				}		
			}
			// after for loop, if vertical, need to append hourcols to hourcont
			if (settings.layout == 'vertical') {
				$hourcont.append($hourcol1).append($hourcol2);
			}
		}
		
		function renderminutes(h) {
			realhours = h;
			displayhours = (!settings.military && h > 12) ? h - 12 : h;
			if (!settings.military && h == 0) {
				displayhours = '12';
			}
			$mc.empty();
			n = 60 / settings.minutedivisions;
			tt = set_tt(realhours);
			counter = 1;
		
			for(m=0;m<60;m=m+n) {
				$md = jQuery("<div class='CP_minute' id='" + realhours + "_" + m + "'>" + displayhours + ":" + ((m<10) ? "0" : "") + m + tt + "</div>");
				
				if (settings.layout == 'horizontal') {
					$md.css("float","left");
					if (settings.minutedivisions > 6 && counter == settings.minutedivisions / 2 + 1) {
						// long horizontal, kick in extra row after half
						$mc.append("<div style='clear:left' />");
					}
				}
				$mc.append($md);
				binder($md);
				counter++;
			}
		}
		
		function set_tt(realhours) {
			if (!settings.military) { 
				return (realhours >= 12) ? ' PM' : ' AM'; 
				}
			else { 
				return '';
			}
		}
		
		function putcontainer() {
			$hourcont.css("left",e.pageX - 5);
			$hourcont.css("top",e.pageY - (Math.floor($hourcont.height() / 2)));
			rectify($hourcont);
			$hourcont.fadeIn(100);
		}
		
		function rectify($obj) { 
			// if a div is off the screen, move it accordingly
			var ph = document.documentElement.clientHeight;
			var pw = document.documentElement.clientWidth;
			var t = parseInt($obj.css("top"));
			var l = parseInt($obj.css("left"));
			var st = document.documentElement.scrollTop;
			// run off top
			if (t <= st) {
				$obj.css("top",st+10);
			}
			else if (t + $obj.height() > ph) {
				$obj.css("top",ph - $obj.height() - 10);
			}
		}
		
		function binder($obj) {
		// all the binding is done here
		
			// bindings for hc (hours container)
			if($obj.attr("id") == 'CP_hourcont') {
				$obj.mouseout(function(e) {
					/*
					this tells divs to clear only if rolling all the way 
					out of hourcont.
					relatedTarget "looks ahead" to see where the mouse
					has moved to on mouseOut
					IE uses the more sensible "toElement"
					*/
					t = (e.toElement) ? e.toElement : e.relatedTarget;
					if (!(jQuery(t).is("div[@class^=CP]"))) {
						cleardivs();
					}
				});
			}
			
			// bindings for mc (minute container)
			else if ($obj.attr("id") == 'CP_minutecont') {
				// no events needed yet
				$obj.mouseout(function(e) {
					t = (e.toElement) ? e.toElement : e.relatedTarget;
					//alert(t.id);
					if (!(jQuery(t).is("div[@class^=CP]"))) {
						cleardivs();
					}
				});
			}
			
			// bindings for $hd (hour divs)
			else if ($obj.attr("class") == 'CP_hour') {

				$obj.mouseover(function(e) {
					h = $obj.attr("id").split('_')[1];
					jQuery(this).addClass("CP_over");
					if (settings.showminutes) {
						$mc.hide();
						renderminutes(h);
						
						// set position & show minutes container
						if (settings.layout == 'vertical') {
							t = e.pageY - 10;
							if (h<12) {
								l = parseInt($hourcont.css("left")) - $mc.width();
							}
							else {
								l = parseInt($hourcont.css("left")) + $hourcont.width();
							}
						}
						else {
							l = e.pageX - 10;
							if(h<12) {
								t = parseInt($hourcont.css("top")) - $mc.height();
							}
							else {
								t = parseInt($hourcont.css("top")) + $hourcont.height();
							}
						}
						$mc.css("left",l).css("top",t);
						rectify($mc);
						$mc.show();
					}
					return false;
				});
				
				$obj.mouseout(function() {
					jQuery(this).removeClass("CP_over");
					return false;
				});					
				
				$obj.click(function() {
					h = $obj.attr("id").split('_')[1];
					tt = set_tt(h);
					str = $obj.text();
					if(str.indexOf(' ') != -1) {
						cleanstr = str.substring(0,str.indexOf(' '));
					}
					else {
						cleanstr = str;
					}
					$obj.text(cleanstr + ':00' + tt);
					setval($obj);
					cleardivs();
				});
			}
			
			// bindings for $md (minute divs)
			else if ($obj.attr("class") == 'CP_minute') {
				$obj.mouseover(function() {
					jQuery(this).addClass("CP_over");
				});
				$obj.mouseout(function(e) {
					jQuery(this).removeClass("CP_over");					
				});					
				$obj.click(function() {
					setval($obj);
					cleardivs();
				});
			}
		};
		
		function setval($obj) { // takes either hour or minute obj
			if(!settings.valuefield) {
				self.value = $obj.text();
			}
			else {
				jQuery("input[@name=" + settings.valuefield + "]").val($obj.text());
			}
			callback.apply(jQuery(self));
		}
		
		function cleardivs() {
			if (settings.showminutes) {
				$mc.remove();
			}
			$hourcont.remove();
		}
		
	return false;
	});
	
	function errorcheck() {
		if (settings.starthour >= settings.endhour) {
			alert('Error - start hour must be less than end hour.');
			return false;
		}
		else if (60 % settings.minutedivisions != 0) {
			alert('Error - param minutedivisions must divide evenly into 60.');
			return false;
		}
	}
	
return(this);

}

/*
+-----------------------------------------------------------------------+
| Copyright (c) 2007 Josh Nathanson                  |
| All rights reserved.                                                  |
|                                                                       |
| Redistribution and use in source and binary forms, with or without    |
| modification, are permitted provided that the following conditions    |
| are met:                                                              |
|                                                                       |
| o Redistributions of source code must retain the above copyright      |
|   notice, this list of conditions and the following disclaimer.       |
| o Redistributions in binary form must reproduce the above copyright   |
|   notice, this list of conditions and the following disclaimer in the |
|   documentation and/or other materials provided with the distribution.|
|                                                                       |
| THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS   |
| "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT     |
| LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR |
| A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT  |
| OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, |
| SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT      |
| LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, |
| DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY |
| THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT   |
| (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE |
| OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.  |
|                                                                       |
+-----------------------------------------------------------------------+
*/